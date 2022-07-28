<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\TicketPlan;
use App\Models\Category;
use App\Models\TicketCategory;
use App\Http\Requests\TicketRequest;
use App\Http\Requests\BuyTicketRequest;
use App\Http\Resources\TicketResource;
use App\Models\TicketPaymentTemp;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

use App\Models\EventRequest as Invitation;

class MainController extends Controller
{

    public function tickets($value = '')
    {
        $tickets = TicketCategory::latest()->get();
        return response([
            'status' => true,
            'message' => 'Ticket Categories',
            'data' => TicketCategoryResource::collection($tickets)
        ]);
    }

    public function index($value = '')
    {
        $tickets = Ticket::where('user_id', Auth::user()->id)->get();
        return response([
            'status' => true,
            'message' => 'Tickets',
            'data' => $tickets
        ]);
    }

    public function process(Request $request)
    {
        if ($request->type == 'free') {

            TicketPlan::firstOrCreate(
                [
                    'user_id' => Auth::user()->id
                ],
                ['model' => 'free']
            );

            return response([
                'status' => true,
                'redirect' => null,
                'message' => 'Ticket Plan was created Successfully'
            ]);
        } else {
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'reference' => 'required'
        ]);

        Ticket::firstOrCreate([
            'event_id' => $this->decodeId($request->event_id),
            'user_id' => Auth::user()->id
        ]);

        return response([
            'status' => true,
            'message' => 'Ticket created Successfully'
        ]);
    }


    public function buy(BuyTicketRequest $request)
    {
        $request->validated();

        // declare vars
        $logged_in = User::findorfail(Auth::user()->id);
        $email = $logged_in->email;

        //check if user has purchased the ticket
        $event = Event::findOrFail($request->event_id);

        if ($event->user_id == Auth::user()->id) {
            //user created the event
            return response()->json([
                'status' => false,
                'message' => 'You created this Event'
            ], 400);
        } else {
            //user didnt create event, so check if user already bought ticket
            $ticket = Ticket::where('event_id', $event->id)
                ->where('user_id', Auth::user()->id)
                ->first();

            if ($ticket) {
                //user already bought ticket
                return response()->json([
                    'status' => false,
                    'message' => 'You have previously purchased Ticket for this Event'
                ], 400);
            } else {
                //user hasn't bought ticket, so check the event pricing

                if ($event->pricing == 'multiple') {
                    //get price from amultiple ticket
                    if ($request->category_id) {
                        $cat = TicketCategory::findOrFail($request->category_id);
                        $price = $cat->price;
                    } else {
                        return response()->json([
                            'status' => false,
                            'message' => 'Ticket Category is required'
                        ], 400);
                    }
                } else {
                    // get the price for a single ticket
                    $price = $event->price;
                }

                // return Auth::user()->email;

                //initiate payment with paystack
                $SECRET_KEY = getenv('PAYSTACK_SECRET_KEY');

                $url = "https://api.paystack.co/transaction/initialize";
                $fields = [
                    'email' =>  Auth::user()->email,
                    'amount' => $price * 100,
                    'callback_url' => url('payments/verify'),
                    'metadata' => [
                        'category_id' => $request->category_id ? $request->category_id : "null",
                        'user_id' => Auth::user()->id,
                        'event_id' => $request->event_id
                    ]
                ];
                $fields_string = http_build_query($fields);
                //open connection
                $ch = curl_init();

                //set the url, number of POST vars, POST data
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "Authorization: Bearer $SECRET_KEY",
                    "Cache-Control: no-cache",
                ));

                //So that curl_exec returns the contents of the cURL; rather than echoing it
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                //execute post
                $paystack_result = curl_exec($ch);

                $result = json_decode($paystack_result);

                $authorization_url =  $result->data->authorization_url;
                $paystack_status = $result->status;

                // return dd($result->status);


                if ($paystack_status == true) {

                    return response()->json([
                        'status' => true,
                        'message' => 'Payment initiated',
                        'data' => [
                            'link' => $authorization_url,
                        ]
                    ], 200);
                } else {
                    return response([
                        'status' => false,
                        'message' => 'Payment failed. Response not ok',
                        'data' => $result
                    ], 400);
                }
            }
        }
    }

    public function getevent_ticket($id)
    {

        $event = Event::findorfail($id);

        if ($event->pricing == "multiple") {
            $ticket = Ticket::join('users', 'tickets.user_id', 'users.id')
                ->join('ticket_categories', 'tickets.category_id', 'ticket_categories.id')
                ->join('events', 'tickets.event_id', 'events.id')
                ->where('tickets.event_id', $id)
                ->where('tickets.user_id', Auth::user()->id)
                ->select('tickets.*','events.pricing as pricing', 'ticket_categories.name as ticket_category_name', 'ticket_categories.price as tickets_category_price', 'events.unique_id as event_id', 'events.isFree as isFree')
                ->first();
            // $ticket ="lol";
        } else {
            $ticket = Ticket::join('users', 'tickets.user_id', 'users.id')
                ->join('events', 'tickets.event_id', 'events.id')
                ->where('tickets.event_id', $id)
                ->where('tickets.user_id', Auth::user()->id)
                ->select('tickets.*', 'events.price as price', 'events.pricing as pricing','events.unique_id as event_id','events.isFree')
                ->first();
        }

        return response()->json([
            'status' => true,
            'message' => 'Event Ticket',
            'data' => $ticket
        ], 200);
    }

    public function buy_free(Request $request){

        $ticket = Ticket::create([
            'user_id' => Auth::user()->id,
            'event_id' => $request->event_id,
            'category_id' => null,
        ]);

       //update event_request status to approved
       $update_invitation_status = Invitation::where('event_id', $request->event_id)
       ->where('user_id', Auth::user()->id,)
       ->first();

       $update_invitation_status->status = 'approved';
       $update_invitation_status->save();

        return response()->json([
            'status' => true,
            'message' => ' Get Event Event Ticket Successful',
        ], 200);
    }
}
