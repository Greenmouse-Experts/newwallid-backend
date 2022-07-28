<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\EventRequest as Invitation;
use App\Models\Member;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Auth;
use App\Models\Event;
use App\Models\Payment;
use App\Models\Ticket;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $response = Http::withToken(config('paystack.secret'))
            ->post('https://api.paystack.co/transaction/initialize', [
                'email' => 'tao@yahoo.com',
                'amount' => 100,
                'callback_url' => url('payments/response')
            ]);

        if ($response->ok()) {

            return response([
                'status' => true,
                'message' => 'Payment initiated',
                'data' => [
                    'link' => $response->object()->data->authorization_url
                ]
            ]);
        }

        return response([
            'status' => false,
            'message' => 'Payment could not initiated',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function save_data(Request $request)
    {
        $payment = Payment::create([
            'ticket_id' => $request->ticket_id,
            'reference' => $request->reference,
            'amount' => $request->amount / 100,
            'status' => $request->status,
            'paid_at' => $request->paid_at,
            'channel' => $request->channel,
            'fees' => $request->fees / 100,
            'ip_address' => $request->ip_address,

        ]);

        return response([
            'status' => true,
            'message' => 'Payment Details Saved Successfuly',
        ]);
    }


    public function create_ticket(Request $request)
    {
        $ticket = Ticket::create([
            'user_id' => $request->user_id,
            'event_id' => $request->event_id,
            'category_id' => $request->category_id != "null" ? $request->category_id : null,
            'qr_code' => null
        ]);

        return response([
            'status' => true,
            'message' => 'Payment Details Saved Successfuly',
        ]);
    }


    public function verify($reference)
    {
        $response = Http::withToken(config('paystack.secret'))
            ->get('https://api.paystack.co/transaction/verify/' . $reference);

        if ($response->ok()) {
            if ($response->object()->data->status == 'success') {
                return response([
                    'status' => true,
                    'message' => 'Payment verified'
                ]);
            } else {
                return response([
                    'status' => false,
                    'message' => 'Payment could not be verified'
                ]);
            }
        } else {
            return response([
                'status' => false,
                'message' => 'Payment could not be verified'
            ]);
        }
    }

    /** @noinspection DuplicatedCode */
    public function mobile_verify_subscription_payment_and_save(Request $request)
    {

        $SECRET_KEY = getenv('PAYSTACK_SECRET_KEY');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . $request->reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $SECRET_KEY",
                "Cache-Control: no-cache",
            ),
        ));

        $paystack_response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        $result = json_decode($paystack_response);

//        return response([
//            'lol'=>dd($result),
//        ]);

        if ($result->data->status != 'success') {
            return response([
                'status' => false,
                'message' => 'Payment could not be verified'
            ]);
        };

        // Save Subscription and save payment ref and payment details
        $subPlan = SubscriptionPlan::findorfail($result->data->metadata->meta->subscription_plan_id);
        $individual_id = User::findorfail($result->data->metadata->meta->user_id)->individual->id;
        $date = new \DateTime();
        $date->modify('+' . $subPlan->validity . 'day');

        $subscription = Subscription::create([
            'status' => "active",
            'individual_id' => $individual_id,
            'subscription_plan_id' => $result->data->metadata->meta->subscription_plan_id,
            'organization_id' => $subPlan->organization_id,
            'expiry_date' => $date->format('Y-m-d'),
        ]);

//        return $subscription->id;

        //update member subscription id
        $update_member_sub_id = Member::where('individual_id', $individual_id)
            ->where('organization_id', $subPlan->organization_id)
            ->first();

        $update_member_sub_id->subscription_id = $subscription->id;
        $update_member_sub_id->save();

        $payment = Payment::create([
            'subscription_id' => $subscription->id,
            'reference' => $result->data->reference,
            'amount' => $result->data->amount / 100,
            'status' => $result->data->status,
            'paid_at' => $result->data->paid_at,
            'channel' => $result->data->channel,
            'fees' => $result->data->fees / 100,
            'ip_address' => $result->data->ip_address,
        ]);

        return response([
            'status' => true,
            'message' => 'Payment Verified and Saved Successfully'
        ]);

    }


    /** @noinspection DuplicatedCode */
    public function mobile_verify_ticket_payment_and_save(Request $request)
    {
        $SECRET_KEY = getenv('PAYSTACK_SECRET_KEY');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . $request->reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $SECRET_KEY",
                "Cache-Control: no-cache",
            ),
        ));

        $paystack_response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        $result = json_decode($paystack_response);

        if ($result->data->status != 'success') {
            return response([
                'status' => false,
                'message' => 'Payment could not be verified'
            ]);
        };

        $ticket = Ticket::create([
            'user_id' => $result->data->metadata->meta->user_id,
            'event_id' => $result->data->metadata->meta->event_id,
            'category_id' => $result->data->metadata->meta->category_id != "null" ? $result->data->metadata->meta->category_id : null,
            'qr_code' => null
        ]);

        //update event_request status to approved
        $update_invitation_status = Invitation::where('event_id', $result->data->metadata->meta->event_id)
            ->where('user_id', $result->data->metadata->meta->user_id)
            ->first();

        $update_invitation_status->status = 'approved';
        $update_invitation_status->save();

        $payment = Payment::create([
            'ticket_id' => $ticket->id,
            'reference' => $result->data->reference,
            'amount' => $result->data->amount / 100,
            'status' => $result->data->status,
            'paid_at' => $result->data->paid_at,
            'channel' => $result->data->channel,
            'fees' => $result->data->fees / 100,
            'ip_address' => $result->data->ip_address,
        ]);

        return response([
            'status' => true,
            'message' => 'Payment Verified and Saved Successfully'
        ]);
    }
}
