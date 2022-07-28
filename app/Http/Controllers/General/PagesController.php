<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\EventRequest as Invitation;
use App\Models\Member;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

use Auth;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function faq()
    {
        return view('pages.ui.faq');
    }

    public function pricing()
    {
        return view('pages.ui.pricing');
    }

    public function about()
    {
        return view('pages.ui.about');
    }

    public function contact()
    {
        return view('pages.ui.contact');
    }

    public function ticket()
    {
        if (Auth::user()->ticketPlan) {
            return view('pages.create_ticket');
        }

        return redirect()->to('ticket-plans');
    }

    public function ticketPlan()
    {
        return view('pages.ticket_plans');
    }

    public function created()
    {
        return view('pages.created');
    }

    public function created_password_success()
    {
        return view('pages.password_reset_success');
    }

    public function paymentResponse(Request $request)
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

        // Save Ticket and save payment ref and payment details

        // if()

        $ticket = Ticket::create([
            'user_id' => $result->data->metadata->user_id,
            'event_id' => $result->data->metadata->event_id,
            'category_id' => $result->data->metadata->category_id != "null" ? $result->data->metadata->category_id : null,
            'qr_code' => null
        ]);

        //update event_request status to approved
        $update_invitation_status = Invitation::where('event_id', $result->data->metadata->event_id)
            ->where('user_id', $result->data->metadata->user_id)
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

        $x = User::findorfail(Auth::user()->id);
        $y = $x->type;


        return redirect('/' . $y . '/events/' . $result->data->metadata->event_id . '/info');


        // return view('pages.payments.index');
    }

    public function SubscriptionPaymentResponse(Request $request)
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

//        return dd($result);

        if ($result->data->status != 'success') {
            return response([
                'status' => false,
                'message' => 'Payment could not be verified'
            ]);
        }

        // Save Subscription and save payment ref and payment details
        $subPlan = SubscriptionPlan::findorfail($result->data->metadata->subscription_plan_id);
        $individual_id = User::findorfail($result->data->metadata->user_id)->individual->id;
        $date = new \DateTime();
        $date->modify('+' . $subPlan->validity . 'day');

        $subscription = Subscription::create([
            'status' => "active",
            'individual_id' => $individual_id,
            'subscription_plan_id' => $result->data->metadata->subscription_plan_id,
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

        return redirect('/individual/organizations/' . $subPlan->organization_id . '/subscriptions');

        // return view('pages.payments.index');
    }
}
