<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\VerifyUserRequest;
use App\Http\Resources\MemberResource;
use App\Http\Resources\UserRoleResource;
use App\Models\Member;
use App\Models\UserRole;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Models\Organization;
use App\Models\Individual;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return response([
            'status' => true,
            'message' => 'User',
            'data' => new UserResource($user)
        ]);
    }

    public function roles()
    {
        return response([
            'status' => true,
            'message' => 'Roles',
            'data' => Auth::user()->roles
        ]);
    }

    public function notifications()
    {
        return response([
            'status' => true,
            'message' => 'Notifications',
            'data' => Auth::user()->unreadNotifications
        ]);
    }

    public function getUser($id)
    {
        $user = User::findOrFail($this->decodeId($id));
        return response([
            'status' => true,
            'message' => 'User',
            'data' => new UserResource($user)
        ]);
    }

    public function getUserByIdNumber(Request $request)
    {
        $idcardnmber = $request->idcardnumber;

        $individual = Individual::where('id_card_number', $idcardnmber)->first();
        $organization = Organization::where('id_card_number', $idcardnmber)->first();

        if($individual) {
            $user = User::where('id', 'LIKE', "%{$individual->user_id}%")->latest()->paginate(10);
            return $this->jsonPaginatedResponse('Users', UserResource::collection($user));
        } elseif ($organization) {
            $user = User::where('id', 'LIKE', "%{$organization->user_id}%")->latest()->paginate(10);
            return $this->jsonPaginatedResponse('Users', UserResource::collection($user));
        } else {
            return response([
                'status' => false,
                'message' => 'User(s) with that query not found',
                'data' => null
            ], 400);
        }
    }

    public function SearchUserByuserName(Request $request)
    {

        $username = $request->username;

        // dd($username);

        $user = User::where('username', 'LIKE', "%{$username}%")->latest()->paginate(10);

        if ($user) {
            return $this->jsonPaginatedResponse('Users', UserResource::collection($user));
        } else {
            return response([
                'status' => false,
                'message' => 'User(s) with that query not found',
                'data' => null
            ], 400);
        }
    }

    public function profile($username)
    {
        $user = User::where('username', $username)->first();
        if ($user) {
            return response([
                'status' => true,
                'message' => 'User',
                'data' => new UserResource($user)
            ]);
        } else {
            return response([
                'status' => false,
                'message' => 'User with the Username not found',
                'data' => null
            ]);
        }
    }

    public function getIndividualUsers(Request $request)
    {
        $username = $request->username;

        // dd($username);

        $user = User::where('username', 'LIKE', "%{$username}%")
            ->where('type', 'individual')
            ->latest()->paginate(10);

        if ($user) {
            return $this->jsonPaginatedResponse('Individual Users', UserResource::collection($user));
        } else {
            return response([
                'status' => false,
                'message' => 'Individual User(s) with that query not found',
            ], 400);
        }
    }

    public function getOrganizationUsers(Request $request)
    {
        $username = $request->username;


        $user = User::where('username', 'LIKE', "%{$username}%")
            ->where('type', 'organization')
            ->latest()->paginate(10);

        if ($user) {
            return $this->jsonPaginatedResponse('Organization Users', UserResource::collection($user));
        } else {
            return response([
                'status' => false,
                'message' => 'Organization User(s) with that query not found',
            ], 400);
        }
    }

    public function getOrganizationRoles(Request $request)
    {
        $organization = request()->organization_id;


        $role = UserRole::where('organization_id', $organization)
            ->latest()->paginate(10);

        if ($role) {
            return $this->jsonPaginatedResponse('Organization Roles', UserRoleResource::collection($role));
        } else {
            return response([
                'status' => false,
                'message' => 'Organization Role(s) empty',
            ], 400);
        }
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

    public function verifyUser(VerifyUserRequest $request)
    {
        $request->validated();
        if (Auth::user()->type == "individual") {
            $user = User::where('username', $request->username)->first();

            if ($user) {
                return response([
                    'status' => true,
                    'message' => 'User Verification Successful',
                    'data' => new UserResource($user)
                ]);
            } else {
                return response([
                    'status' => false,
                    'message' => 'User Not Found',
                ]);
            }
        }else{
            $user = User::where('username', $request->username)->first();

            if (!$user) {
                return response([
                    'status' => false,
                    'message' => 'User Not Found',
                ]);
            }

            if ($user->type == "organization"){
                return response([
                    'status' => false,
                    'message' => 'What do you think you\'re trying to do? Are u Normal? Why will u want to verify an organization when you\'re an organization???',
                ]);
            }
            $inividual = User::findorfail($user->id)->individual;

            $member = Member::where('individual_id', $inividual->id)
            ->where('organization_id', Auth::user()->typeData->id)
            ->first();

            if ($member){
                return response([
                    'status' => true,
                    'message' => 'User Verified and is a member of your organization',
                    'data' => [
                        'user_details' => new UserResource($user),
                        'member_details' => new MemberResource($member)
                    ]
                ]);
            }else{
                return response([
                    'status' => false,
                    'message' => 'User Verified but not a member of your organization.Try Adding the user to your organization',
                ]);
            }


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
