<?php

namespace App\Http\Controllers\Individual;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionPaymentRequest;
use App\Http\Requests\UpdateIndividualRequest;
use App\Http\Resources\IndividualResource;
use App\Models\IDCard;
use App\Models\SubscriptionPlan;
use App\Models\Ticket;
use Illuminate\Http\Request;

use Auth;
use App\Models\Event;
use App\Models\Member;
use App\Models\Individual;
use App\Models\Organization;
use App\Http\Resources\MemberResource;
use App\Http\Resources\MembershipRequestResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\Subscription;

use App\Http\Resources\SubscriptionResource;
use App\Models\IDCardManagement;
use App\Models\MembershipRequest;
use Intervention\Image\ImageManagerStatic as Image;

class MainController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('role:individual');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allOrgs = Member::where('individual_id', Auth::user()->typeData->id)
            ->where('status', '!=', 'pending')->count();

        $pendingMembershipRequest = MembershipRequest::where('status', 'pending')
            ->where('individual_id', Auth::user()->typeData->id)
            ->latest()
            ->limit(10)->get();

        $events = Event::where('user_id', Auth::user()->id)->count();

        return response([
            'status' => true,
            'message' => 'Info',
            'data' => [
                'totalOrgs' => $allOrgs,
                'organizations' => MembershipRequestResource::collection($pendingMembershipRequest),
                'totalEvents' => $events
            ]
        ]);
    }

    public function getUser()
    {
        $user = User::findorfail(Auth::user()->id);

        return response([
            'status' => true,
            'message' => 'Logged in Individual Details',
            'data' => new UserResource($user)
        ]);
    }

    public function mobileStats()
    {

        $allOrgs = Member::where('individual_id', Auth::user()->typeData->id)
            ->where('status', '!=', 'pending')->count();

        $pendingMembershipRequest = MembershipRequest::where('status', 'pending')
            ->where('individual_id', Auth::user()->typeData->id)
            ->count();

        $events = Event::where('user_id', Auth::user()->id)->count();

        $activesubscriptions = Subscription::where('individual_id', Auth::user()->typeData->id)
            ->where('status', 'active')
            ->count();

        $expired_subscriptions = Subscription::where('individual_id', Auth::user()->typeData->id)
            ->where('status', 'expired')
            ->count();

        $purchasedtickets = Ticket::where('user_id', Auth::user()->id)->count();

        $createdidCard = IDCardManagement::where('individual_id', Auth::user()->typeData->id)->count();

        $myidCard = IDCardManagement::where('user_id', Auth::user()->id)
                                        ->where('status', 'Approved')->count();

        return response([
            'status' => true,
            'message' => 'Dashboard Stats',
            'data' => [
                'totalOrganizationJoined' => $allOrgs,
                'PendingMembershipRequest' => $pendingMembershipRequest,
                'totalEvents' => $events,
                'active_subscriptions' => $activesubscriptions,
                'expired_subscriptions' => $expired_subscriptions,
                'purchasedtickets' => $purchasedtickets,
                'createdidCard' => $createdidCard,
                'myidCard' => $myidCard,
            ]
        ]);
    }

    public function allIndividuals()
    {
        $all = Individual::all();

        return response([
            'status' => true,
            'message' => 'All Individuals',
            'data' => IndividualResource::collection($all)
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


    public function orgSubscriptions()
    {
        $subs = Subscription::where('organization_id', request()->organization_id)->paginate(10);
        return $this->jsonPaginatedResponse('Subscriptions', SubscriptionResource::collection($subs));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIndividualRequest $request)
    {
        $request->validated();

        //        $user = User::findorfail(Auth::user()->id)->first();
        //        $user_details = new UserResource($user);
        //
        //        if ($user_details->email != $request->email){
        //            return response([
        //                'status' => false,
        //                'message' => 'You cant change your email',
        //            ],400);
        //        }
        //
        //        if ($user_details->details->phone != $request->phone){
        //            return response([
        //                'status' => false,
        //                'message' => 'You cant change your phone number',
        //            ],400);
        //        }

        $individual = Individual::where('user_id', Auth::user()->id)->first();

        if ($request->image != $individual->image) {

            $image_name = time() . "." . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            Image::make($request->image)->save(public_path('profile_picture/individual/') . $image_name);

            if ($individual->image) {
                $old_file = public_path() . '/profile_picture/individual/' . $individual->image;
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
            }

        }

        if ($individual) {

            $individual->firstname = $request->firstname;
            $individual->lastname = $request->lastname;
            $individual->dob = $request->dob;
            $individual->image = $image_name ?? $request->image;
            $individual->bio = $request->bio;

            $individual->save();

            return response([
                'status' => true,
                'message' => 'Profile updated successfully',
            ]);
        }

        return response([
            'status' => false,
            'message' => 'Profile could not be updated',
        ], 400);
    }

    public function joined_Organization()
    {
        $m = Member::where('individual_id', Auth::user()->typeData->id)
            ->latest()
            ->paginate(10);

        return $this->jsonPaginatedResponse('ALL joined Organization', MemberResource::collection($m));
    }

    public function search_joined_Organization($query)
    {
        //return $query;
            $m = Member::join('organizations', 'organizations.id', '=', 'members.organization_id')
                ->join('users', 'users.id', '=', 'organizations.user_id')
                ->where('members.individual_id', Auth::user()->typeData->id)
                ->where('users.username', 'LIKE', "%{$query}%")
                ->select('members.*')
                ->latest()
                ->paginate(10);
        //  return $m;

        return $this->jsonPaginatedResponse('ALL joined Organization', MemberResource::collection($m));
    }

    public function search_Organization_plan(Request $request)
    {
        $name = $request->name;
        $organization_id = $request->organization_id;


        $user = SubscriptionPlan::where('name', 'LIKE', "%{$name}%")
            ->where('organization_id', $organization_id)
            ->latest()->paginate(10);

        if ($user) {
            return $this->jsonPaginatedResponse('Organization Users', UserResource::collection($user));
        } else {
            return response([
                'status' => false,
                'message' => 'Organization Subscription Plan with that query not found',
            ], 400);
        }
    }

    public function organizations_join_request()
    {

        $m = MembershipRequest::where('individual_id', Auth::user()->typeData->id)
            ->latest()
            ->paginate(10);

        return $this->jsonPaginatedResponse('Organization Join Requests', MembershipRequestResource::collection($m));
    }

    public function send_join_request_Organization(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'role' => 'required|string'
        ]);

        $org = Organization::where('name', $request->name)->first();

        // check if organization with that username exists;
        if ($org) {

            // check if if the user sending the join request is already a member of the organization
            $checkUsermembership = Member::where('individual_id', Auth::user()->typeData->id)
                ->where('organization_id', $org->id)
                ->first();

            if ($checkUsermembership) {
                return response([
                    'status' => false,
                    'message' => 'You are already a member of this Organization'
                ], 400);
            }


            // check if the organization is a free pass organization
            //if its a free pass organization just register as member straight

            if ($org->type == 0) {
                
                // $this->sendApprovalNotification($user);
                $member = MembershipRequest::create([
                    'role' => request()->role,
                    'organization_id' => $org->id,
                    'status' => 'approved',
                    'individual_id' => Auth::user()->typeData->id
                ]);


                // just save user as company member
                $members = Member::create([
                    'role' => request()->role,
                    'individual_id' => Auth::user()->typeData->id,
                    'organization_id' => $org->id,
                    'status' => 'active',
                    'subscription_id' => null,
                    'access_status' => "free pass",
                    'membership_request_id' => null,
                ]);

                // return response([
                //     'status' => true,
                //     'message' => 'Organization Joined Successfully',
                //     'data' => new MemberResource($member)
                // ], 200);

                return response([
                    'status' => true,
                    'message' => 'Organization Joined Successfully',
                    'data' => new MembershipRequestResource($member)
                ], 200);
            }


            // check if the user sending the request has sent a request before
            $mem_req = MembershipRequest::where('organization_id', $org->id)
                ->where('individual_id', Auth::user()->typeData->id)
                ->first();


            if ($mem_req) {
                if ($mem_req->status == 'pending') {
                    return response([
                        'status' => false,
                        'message' => 'You currently have a pending join request with this Organization'
                    ], 400);
                } else if ($mem_req->status == 'approved') {
                    return response([
                        'status' => false,
                        'message' => 'Your request to this organization was approved and youre currently a member'
                    ], 400);
                } else if ($mem_req->status == 'declined') {
                    return response([
                        'status' => false,
                        'message' => 'Your previous Memebership request was declined. Try Again in a few days or contact the organization.'
                    ], 400);
                }
            }

            $member = MembershipRequest::create([
                'role' => request()->role,
                'organization_id' => $org->id,
                'status' => 'pending',
                'individual_id' => Auth::user()->typeData->id
            ]);

            return response([
                'status' => true,
                'message' => 'Membership Request sent successfully',
                'data' => new MembershipRequestResource($member)
            ], 200);
        }

        return response([
            'status' => false,
            'message' => 'Organization not found'
        ], 400);
    }

    public function allUserActiveSubscription()
    {
        $subscriptions = Subscription::where('individual_id', Auth::user()->typeData->id)
            ->where('status', 'active')
            ->latest()->paginate(10);
        return $this->jsonPaginatedResponse('ALL User Active Subscriptions', SubscriptionResource::collection($subscriptions));
    }

    public function allUserExpiredSubscription()
    {
        $subscriptions = Subscription::where('individual_id', Auth::user()->typeData->id)
            ->where('status', 'expired')
            ->latest()->paginate(10);
        return $this->jsonPaginatedResponse('ALL User Expired Subscriptions', SubscriptionResource::collection($subscriptions));
    }


    public function organization_subscriptions($id)
    {
        $subscription = Subscription::where('organization_id', $id)
            ->where('individual_id', Auth::user()->typeData->id)
            ->latest()
            ->paginate(10);

        return $this->jsonPaginatedResponse('Organization Subscriptions', SubscriptionResource::collection($subscription));
    }

    public function organization_subscription_plans($id)
    {
        $plans = SubscriptionPlan::where('organization_id', $id)->get();

        return response([
            'status' => true,
            'message' => 'Organization Subscription Plans',
            'data' => $plans
        ]);

    }

    /** @noinspection DuplicatedCode */
    public function intiateSubscriptionPayment(SubscriptionPaymentRequest $request)
    {
        $request->validated();

        $plan = SubscriptionPlan::where('id', $request->subscription_plan_id)->first();
        $price = $plan->price;


        //check if user has an active subscription
        $checkActiveSub = Subscription::where('individual_id', Auth::user()->typeData->id)
            ->where('organization_id', $plan->organization_id)
            ->where('status', 'active')
            ->first();

        if ($checkActiveSub) {
            return response([
                'status' => false,
                'message' => 'You have a current Active Subscription Plan',
            ], 400);
        }

        //        return $price;

        //initiate payment with paystack
        $SECRET_KEY = getenv('PAYSTACK_SECRET_KEY');

        $url = "https://api.paystack.co/transaction/initialize";
        $fields = [
            'email' => Auth::user()->email,
            'amount' => $price * 100,
            'callback_url' => url('payments/verify/subscription'),
            'metadata' => [
                'subscription_plan_id' => $request->subscription_plan_id,
                'user_id' => Auth::user()->id,
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

        $authorization_url = $result->data->authorization_url;
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
