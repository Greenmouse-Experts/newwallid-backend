<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOrganizationRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Http\Resources\OrganizationResource;
use App\Http\Resources\UserResource;
use App\Models\Event;
use App\Models\EventRequest;
use App\Models\IDCard;
use App\Models\Member;
use App\Models\MembershipRequest;
use App\Models\Organization;
use App\Models\Subscription;
use App\Models\SubscriptionPlan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $orgs = Organization::latest()->paginate(10);
        return $this->jsonPaginatedResponse('Organizations', OrganizationResource::collection($orgs));
    }

    public function getUser()
    {
        $user = User::findorfail(Auth::user()->id);

        return response([
            'status' => true,
            'message' => 'Logged in Organization Details',
            'data' => new UserResource($user)
        ]);
    }


    public function mobileStats()
    {
        $totalMembers = Member::where('organization_id', \Auth::user()->typeData->id)->count();

        $totalActiveMembers = Member::where('organization_id', Auth::user()->typeData->id)
            ->where('status', 'active')
            ->count();

        $totalUnactiveMembers = Member::where('organization_id', Auth::user()->typeData->id)
            ->where('status', 'unactive')
            ->count();

        $pendingMembershipRequest = MembershipRequest::where('organization_id', Auth::user()->typeData->id)
            ->where('status', 'pending')
            ->count();

        $totalEvents = Event::where('user_id', Auth::user()->id)->count();

        $openEvents = Event::where('user_id', Auth::user()->id)
            ->where('status', 'open')
            ->count();

        $closedEvents = Event::where('user_id', Auth::user()->id)
            ->where('status', 'closed')
            ->count();

        $suspenedEvents = Event::where('user_id', Auth::user()->id)
            ->where('status', 'suspended')
            ->count();

        $ongoingEvents = Event::where('user_id', Auth::user()->id)
            ->where('status', 'ongoing')
            ->count();

        $sentEventRequest = EventRequest::where('sender_id', Auth::user()->id)->count();

        $receivedEventRequest = EventRequest::where('user_id', Auth::user()->id)->count();

        $createdidCard = IdCard::where('organization_id', Auth::user()->typeData->id)->count();

        $myidCard = IDCard::where('user_id', Auth::user()->id)->count();

        $allSubscriptions = Subscription::where('organization_id', Auth::user()->typeData->id)->count();

        $activesubscriptions = Subscription::where('organization_id', Auth::user()->typeData->id)
            ->where('status', 'active')
            ->count();

        $expired_subscriptions = Subscription::where('organization_id', Auth::user()->typeData->id)
            ->where('status', 'expired')
            ->count();

        $totalSubscriptionPlan = SubscriptionPlan::where('organization_id', Auth::user()->typeData->id)->count();

        return response([
            'status' => true,
            'message' => 'Dashboard Stats',
            'data' => [
                'totalMembers' => $totalMembers,
                'totalActiveMembers' => $totalActiveMembers,
                'totalUnactiveMembers' => $totalUnactiveMembers,
                'pendingMembershipRequest' => $pendingMembershipRequest,
                'totalEvents' => $totalEvents,
                'openEvents' => $openEvents,
                'closedEvents' => $closedEvents,
                'suspenedEvents' => $suspenedEvents,
                'ongoingEvents' => $ongoingEvents,
                'sentEventRequest' => $sentEventRequest,
                'receivedEventRequest' => $receivedEventRequest,
                'createdidCard' => $createdidCard,
                'myidCard' => $myidCard,
                'allSubscriptions' => $allSubscriptions,
                'activesubscriptions' => $activesubscriptions,
                'expired_subscriptions' => $expired_subscriptions,
                'totalSubscriptionPlan' => $totalSubscriptionPlan,

            ]
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
    public function update(UpdateOrganizationRequest $request)
    {
        $request->validated();

        $organization = Organization::where('user_id', Auth::user()->id)->first();



        if ($request->image != $organization->image) {

            $image_name = time() . "." . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            Image::make($request->image)->save(public_path('profile_picture/organization/') . $image_name);
            if ($organization->image) {
                $old_file = public_path() . '/profile_picture/organization/' . $organization->image;
                if (file_exists($old_file)) {
                    unlink($old_file);
                }
            }
        };

        if ($organization) {

            $organization->name = $request->name;
            $organization->address = $request->address;
            $organization->image = $image_name ?? $request->image;
            $organization->save();

            return response([
                'status' => true,
                'message' => 'Profile updated successfully',
            ]);
        };

        return response([
            'status' => false,
            'message' => 'Profile could not be updated',
        ], 400);

    }

    public function updatev2(UpdateOrganizationRequest $request)
    {
        $request->validated();

        $organization = Organization::where('user_id', Auth::user()->id)->first();

        if ($organization) {

            $organization->name = $request->name;
            $organization->address = $request->address;
            $organization->image = $image_name ?? $request->image;

            if ($request->image != $organization->image) {

                $base64Image = $request->image;

                // Generate a unique filename for the image
                $filename = Str::random(20) . '.png';

                // Decode the base64 string to binary data
                $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));

                // Generate a unique file name for the image
                $filename = 'image_' . time() . '.png';

                // Specify the path where you want to save the image in the public directory
                $path = public_path('profile_picture/organization/' . $filename);

                // Save the image data to the specified path
                file_put_contents($path, $imageData);

                $organization->image = $filename;


                // $image_name = time() . "." . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
                // Image::make($request->image)->save(public_path('profile_picture/organization/') . $image_name);
                // if ($organization->image) {
                //     $old_file = public_path() . '/profile_picture/organization/' . $organization->image;
                //     if (file_exists($old_file)) {
                //         unlink($old_file);
                //     }
                // }
            };

            $organization->save();

            return response([
                'status' => true,
                'message' => 'Profile updated successfully',
            ]);
        };

        return response([
            'status' => false,
            'message' => 'Profile could not be updated',
        ], 400);

    }


    public function updatePassword(UpdateUserPasswordRequest $request)
    {
        $user = User::findorfail(Auth::user()->id);

        $check = Hash::check($request->current_password, $user->password);


        if ($check) {
            //change password in db
            $user->password = Hash::make($request->password);
            $user->save();

            return response()->json([
                'status' => true,
                'message' => 'Password Changed Successfully',
            ], 200);
        }
        return response()->json([
            'status' => false,
            'message' => 'Your Current password is incorrect',
        ], 400);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
