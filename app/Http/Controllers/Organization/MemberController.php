<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Member;
use App\Models\Organization;
use App\Http\Resources\MemberResource;

use App\Handlers\NotificationHandler;
use App\Http\Requests\MemberRequest;
use App\Http\Resources\MembershipRequestResource;
use App\Models\Individual;
use App\Models\MembershipRequest;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use Exception;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class MemberController extends Controller
{
    use NotificationHandler;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // dd(Auth::user()->organization->id);
        $members = Member::where('organization_id', Auth::user()->organization->id)
            ->latest()->paginate(10);
        return $this->jsonPaginatedResponse('All Members', MemberResource::collection($members));
    }

    public function searchMember(Request $request)
    {
        $name = $request->name;

        $members = Member::join('individuals','members.individual_id','individuals.id')
            ->where('individuals.firstname', 'LIKE', "%{$name}%")
           ->where('organization_id', Auth::user()->organization->id)
            ->select('members.*')
            ->latest()->paginate(10);

        if ($members['data']) {
            return $this->jsonPaginatedResponse('Member(s)', MemberResource::collection($members));
        } else {
            return response([
                'status' => false,
                'message' => 'Member(s) with that query not found',
            ], 400);
        }
    }

    public function active_member()
    {
        // dd(Auth::user()->organization->id);
        $members = Member::where('organization_id', Auth::user()->organization->id)
            ->where('status','active')
            ->latest()->paginate(10);
        return $this->jsonPaginatedResponse('All Active Members', MemberResource::collection($members));
    }

    public function unactive_member()
    {
        // dd(Auth::user()->organization->id);
        $members = Member::where('organization_id', Auth::user()->organization->id)
            ->where('status','unactive')
            ->latest()->paginate(10);
        return $this->jsonPaginatedResponse('All Unactive Members', MemberResource::collection($members));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        $request->validated();

        $org = Auth::user()->organization;
        if ($org->type == 'Restricted') {
            $access_type = 'Not paid';
        } else if ($org->type == 'Free pass') {
            $access_type = 'Free pass';
        }

        try {
            $member = Member::firstOrCreate([
                'individual_id' => $request->individual_id,
                'organization_id' => FacadesAuth::user()->organization->id,
                'status' => $request->status,
                'amount_paid' => $request->amount_paid,
                'expiry_date' => $request->expiry_date,
                'subscription_id' => $request->subscription_id,
            ]);

            return response([
                'status' => true,
                'message' => 'Member added successfully',
                'data' => new MemberResource($member)
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
            return response([
                'status' => false,
                'message' => 'Member could not be added',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return response([
            'status' => true,
            'message' => 'Member fetched successfully',
            'data' => new MemberResource($member)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequest $request, $id)
    {
        $request->validated();
        try {
            $model = Member::findOrFail($id);
            $member = $model->update([
                'individual_id' => $request->individual_id,
                'organization_id' => FacadesAuth::user()->organization->id,
                'status' => $request->status,
                'amount_paid' => $request->amount_paid,
                'expiry_date' => $request->expiry_date,
                'subscription_id' => $request->subscription_id,
            ]);

            return response([
                'status' => true,
                'message' => 'Member updated successfully',
                'data' => new MemberResource($model)
            ]);
        } catch (Exception $e) {

            return response([
                'status' => false,
                'message' => 'Member could not be updated',
            ]);
        }
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

    public function activate($id)
    {

        $org = Organization::where('user_id', Auth::user()->id)->first();
        $member = Member::where('organization_id', $org->id)
            ->where('id', $id)->first();

        if ($member) {

            $member->status = 'active';
            $member->save();

            // try {
            //     $user = User::findOrFail($member->user_id);
            //     $this->sendApprovalNotification($user);
            // } catch (\Exception $e) {
            //     info('Error 101 ' . $e->getMessage());
            // }

            return response([
                'status' => true,
                'message' => 'Member activated successfully'
            ]);
        }

        return response([
            'status' => false,
            'message' => 'Member ID not recognized'
        ]);
    }


    public function deactivate($id)
    {

        $org = Organization::where('user_id', Auth::user()->id)->first();
        $member = Member::where('organization_id', $org->id)
            ->where('id', $id)->first();

        if ($member) {

            $member->status = 'unactive';
            $member->save();

            // try {
            //     $user = User::findOrFail($member->user_id);
            //     $this->sendApprovalNotification($user);
            // } catch (\Exception $e) {
            //     info('Error 101 ' . $e->getMessage());
            // }

            return response([
                'status' => true,
                'message' => 'Member Deactivated successfully'
            ]);
        }

        return response([
            'status' => false,
            'message' => 'Member ID not recognized'
        ]);
    }


    public function updateStatus($id, $status)
    {
        $org = Organization::where('user_id', Auth::user()->id)->first();

        $member = Member::where('owner_id', $org->id)
            ->where('id', $this->decodeId($id))
            ->where('type', 'organization')->first();

        if ($member) {

            $member->status = $status;
            $member->save();

            return response([
                'status' => true,
                'message' => 'Member status updated successfully'
            ]);
        }

        return response([
            'status' => false,
            'message' => 'Member ID not recognized'
        ]);
    }

    public function my_requests(Request $request)
    {
        $requests = MembershipRequest::where('organization_id', Auth::user()->typeData->id)
                                        ->where('status', 'pending')->latest()->paginate(10);
        return $this->jsonPaginatedResponse('Membership Requests', MembershipRequestResource::collection($requests));
    }

    public function get_requests_info($id)
    {
        $requests = MembershipRequest::findorfail($id);

        return response([
            'status' => true,
            'message' => 'Membership Request Info',
            'data' => new MembershipRequestResource($requests)
        ], 200);
    }


    public function approve_request($id)
    {
        $mem_request = MembershipRequest::findorfail($id);
        $mem_request->status = 'approved';
        $mem_request->save();

        //now add user to organization's member
        $member = Member::create([
            'role' => $mem_request->role,
            'individual_id' => $mem_request->individual_id,
            'organization_id' => $mem_request->organization_id,
            'status' => 'active',
            'subscription_id' => null,
            'access_status' => "restricted",
            'membership_request_id' => $mem_request->id,
        ]);

        // $this->sendApprovalNotification($user);


        return response([
            'status' => true,
            'message' => 'Membership Request Accepted Successfully',
            'data' => new MemberResource($member)
        ], 200);
    }

    public function decline_request($id)
    {
        $mem_request = MembershipRequest::findorfail($id);
        // $mem_request = MembershipRequest::latest()->where('individual_id', $id)
        //                                           ->where('organization_id', Auth::user()->id)->first();
        $mem_request->status = "declined";
        $mem_request->save();

        return response([
            'status' => true,
            'message' => 'Membership Request Declined Successfully',
            'data' => new MembershipRequestResource($mem_request)
        ], 200);
    }

    public function addApprove(Request $request)
    {

        $request->validate([
            'user' => 'required',
            'category_id' => 'required'
        ]);

        $member = Member::firstOrCreate(
            [
                'org_id' => Auth::user()->typeData->id,
                'individual_id' => $request->individual_id,
            ],
            [
                'status' => 'approved',
                'category_id' => $request->category_id
            ]
        );

        return response([
            'status' => false,
            'message' => 'Member added successfully',
            'data' => new MemberResource($member)
        ]);
    }

    public function add_no_subscription(Request $request)
    {
        $request->validate([
            'user_id' => 'required|numeric',
        ]);

        $individual = User::findorfail($request->user_id)->individual;

        $member = Member::create([
            'individual_id' => $individual->id,
            'subscription_id' => null,
            'status' => 'unactive',
            'organization_id' => Auth::user()->typeData->id,
            'access_status' => Auth::user()->organization->type == 0 ? "Free pass" : "restricted",
            'membership_request_id' => null
        ]);

        return response([
            'status' => true,
            'message' => 'Member added successfully',
            'data' => new MemberResource($member)
        ]);


    }


    public function add_approve(Request $request)
    {


        $request->validate([
            'individual_id' => 'required',
            'subscription_plan_id' => 'required'
        ]);

        // check if user been added as a member has a membership join request with the organization
        $memreqCheck = MembershipRequest::where('individual_id', $request->individual_id)
            ->where('organization_id', Auth::user()->typeData->id)
            ->where('status', 'pending')
            ->first();

        if ($memreqCheck) {

            return response([
                'status' => true,
                'message' => 'This User has a Pending membership request with you kindly check it out',
            ], 400);

        }


        //check if the user been added as a member is already a member of the organization
        $check = Member::where('individual_id', $request->individual_id)
            ->where('organization_id', Auth::user()->typeData->id)
            ->get();


        if ($check->count() > 0) {
            return response([
                'status' => true,
                'message' => 'This User is already a Member of your Organization',
            ], 400);
        }

        $validity = SubscriptionPlan::findorfail($request->subscription_plan_id);

        $date = new \DateTime();
        $date->modify('+' . $validity->validity . 'day');


        // create subscription
        $subscription = Subscription::create([
            'status' => 'active',
            'individual_id' => $request->individual_id,
            'organization_id' => $validity->organization_id,
            'expiry_date' => $date->format('Y-m-d'),
            'subscription_plan_id' => $request->subscription_plan_id,
        ]);


        // $save membership

        $member = Member::create([
            'individual_id' => $request->individual_id,
            'subscription_id' => $subscription->id,
            'status' => 'active',
            'organization_id' => Auth::user()->typeData->id,
            'access_status' => Auth::user()->organization->type == 0 ? "Free pass" : "restricted",
            'membership_request_id' => null
        ]);

        return response([
            'status' => true,
            'message' => 'Member added successfully',
            'data' => new MemberResource($member)
        ]);
    }

    // Individual member(send join request)
    // Individual member(send join request)
    public function createRequest(MemberRequest $request)
    {
        $request->validated();

        $sub = Subscription::find($request->subscription_id);
        if ($sub->price != $request->amount_paid) {
            return response([
                'status' => false,
                'message' => 'The amount you\'re paying must be equal with this subscription plan',
            ]);
        }
        try {
            $member = Member::firstOrCreate([
                'individual_id' => Auth::user()->typeData->id,
                'organization_id' => $request->organization_id,
                'status' => 'pending',
                'amount_paid' => $request->amount_paid,
                'subscription_id' => $request->subscription_id,
            ]);

            return response([
                'status' => true,
                'message' => 'Membership request sent',
                'data' => new MemberResource($member)
            ]);
        } catch (Exception $e) {
            return response([
                'status' => false,
                'message' => 'Member could not be added',
            ]);
        }
    }
}
