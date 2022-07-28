<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionPlanRequest;
use App\Http\Requests\SubscriptionRequest;
use App\Http\Resources\SubscribedUserResource;
use App\Http\Resources\SubscriptionPlanResource;
use Illuminate\Http\Request;

use Auth;
use App\Models\Subscription;
use App\Http\Resources\SubscriptionResource;
use App\Models\SubscribedUser;
use App\Models\SubscriptionPlan;
use Exception;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Validation\Rule;

class SubscriptionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $subs = Subscription::where('organization_id', Auth::user()->typeData->id)
            ->latest()
            ->paginate(10);

        return $this->jsonPaginatedResponse('Subscriptions', SubscriptionResource::collection($subs));
    }

    public function expired_subscription()
    {
        $subs = Subscription::where('organization_id', Auth::user()->typeData->id)
            ->where('status','expired')
            ->latest()
            ->paginate(10);

        return $this->jsonPaginatedResponse('Expired Subscriptions', SubscriptionResource::collection($subs));
    }

    public function active_subscription()
    {
        $subs = Subscription::where('organization_id', Auth::user()->typeData->id)
            ->where('status','active')
            ->latest()
            ->paginate(10);

        return $this->jsonPaginatedResponse('Active Subscriptions', SubscriptionResource::collection($subs));
    }


    public function mySubscriptions()
    {
        $subs = Subscription::where('organization_id', request()->organization_id)->paginate(10);
        return $this->jsonPaginatedResponse('Subscriptions', SubscriptionResource::collection($subs));
    }

    public function plans()
    {
        $plans = SubscriptionPlan::where('organization_id', Auth::user()->organization->id)->latest()->paginate(10);
        return $this->jsonPaginatedResponse('Subscription Plans', SubscriptionPlanResource::collection($plans));
    }

    public function plansbyOrg()
    {
        $plans = SubscriptionPlan::where('organization_id', Auth::user()->organization->id)->get();

        return response([
            'status' => true,
            'message' => 'Subscription Plan Fetched successfully',
            'data' => $plans
        ]);

    }

    public function store_plan(SubscriptionPlanRequest $request)
    {

        $validated = $request->validated();

        //save the plan

        $plan = SubscriptionPlan::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'validity' => $request->validity,
            'organization_id' => Auth::user()->organization->id,
        ]);


        return response([
            'status' => true,
            'message' => 'Subscription Plan added successfully',
            'data' => new SubscriptionPlanResource($plan)
        ]);
    }

    public function update_plan(SubscriptionPlanRequest $request, $id)
    {

        $validated = $request->validated();

        //save the plan

        $plan = SubscriptionPlan::findorfail($id);

        $plan->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'organization_id' => Auth::user()->organization->id,
        ]);


        return response([
            'status' => true,
            'message' => 'Subscription Plan Updated successfully',
            'data' => new SubscriptionPlanResource($plan)
        ]);
    }

    public function delete_plan($id)
    {


        $plan = SubscriptionPlan::findorfail($id);

        $plan->delete();


        return response([
            'status' => true,
            'message' => 'Subscription Plan Deleted successfully',
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriptionRequest $request)
    {
        $request->validated();
        try {
            $sub = Subscription::create([
                'name' => $request->name,
                'status' => $request->status ?? 'active',
                'price' => $request->price,
                'validity' => $request->validity,
                'organization_id' => FacadesAuth::user()->organization->id,

            ]);
            return response([
                'status' => true,
                'message' => 'Subscription added successfully',
                'data' => new SubscriptionResource($sub)
            ]);
        } catch (Exception $e) {
            return response([
                'status' => false,
                'message' => 'Subscription could not be added',
            ]);
        }
    }


    public function updateSubscription(SubscriptionRequest $request, $id)
    {
        $request->validated();
        //
        try {
            $sub = Subscription::findOrFail($id);

            $sub->update([
                'name' => $request->name,
                'status' => $request->status ?? 'active',
                'price' => $request->price,
                'validity' => $request->validity,
                'organization_id' => Auth::user()->organization->id,

            ]);
            return response([
                'status' => true,
                'message' => 'Subscription updated successfully',
                'data' => new SubscriptionResource($sub)
            ]);
        } catch (Exception $e) {
            return response([
                'status' => true,
                'message' => 'Subscription could not updated',
            ]);
        }
    }

    public function userSubscribe(Request $request)
    {
        $request->validate([
            'subscription_id' => [
                "required",
                Rule::unique('subscribed_users')->where(function ($query) use ($request) {
                    $query->where(['subscription_id' => $request->subscription_id, 'user_id' => \Auth::user()->id]);
                })
            ],
            'amount_paid' => 'required',
        ]);

        $sub = SubscribedUser::create([
            'subscription_id' => $request->subscription_id,
            'user_id' => \Auth::user()->id,
            'amount_paid' => $request->amount_paid,
        ]);

        return response([
            'status' => true,
            'message' => 'Subscription added successfully',
            'data' => new SubscribedUserResource($sub)
        ]);
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
}
