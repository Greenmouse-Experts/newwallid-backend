<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Individual;
use App\Models\Organization;
use App\Http\Resources\UserResource;

class MainController extends Controller
{
    //
    public function update_password(Request $request)
    {
        $input = $request->only(['new_password', 'new_password_confirmation']);

        $validate_data = [
            'new_password' => ['required', 'string', 'min:8', 'confirmed']
        ];

        $validator = Validator::make($input, $validate_data);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please see errors parameter for all errors.',
                'errors' => $validator->errors()
            ], 400);
        }
        
        $user = User::findorfail(Auth::user()->id);
        
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Password Updated Successfully',
            'data' => $user
        ]);
    }

    public function upload_profile_picture(Request $request) 
    {
        $input = $request->only(['avatar']);

        $validate_data = [
            'avatar' => 'required|mimes:jpeg,png,jpg',
        ];

        $validator = Validator::make($input, $validate_data);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please see errors parameter for all errors.',
                'errors' => $validator->errors()
            ], 400);
        }

        //User
        $user = User::findorfail(Auth::user()->id);

        if($user->type == "individual")
        {
            $individual = Individual::where('user_id', $user->id)->first();

            $filename = request()->avatar->getClientOriginalName();
            if($individual->image) {
                Storage::delete(str_replace("storage", "public", $individual->image));
            }
            request()->avatar->storeAs('users_image/individual', $filename, 'public');
            $individual->image = '/storage/users_image/individual/'.$filename;
            $individual->save();

            return response()->json([
                'success' => true,
                'message' => 'Profile Picture Uploaded Successfully!',
                'data' => [
                    'user' => new UserResource($user)
                ]
            ]);
        } else {
            $organization = Organization::where('user_id', $user->id)->first();

            $filename = request()->avatar->getClientOriginalName();
            if($organization->image) {
                Storage::delete(str_replace("storage", "public", $organization->image));
            }
            request()->avatar->storeAs('users_image/organization', $filename, 'public');
            $organization->image = '/storage/users_image/organization/'.$filename;
            $organization->save();

            return response()->json([
                'success' => true,
                'message' => 'Profile Picture Uploaded Successfully!',
                'data' => [
                    'user' => new UserResource($user)
                ]
            ]);
        }
            
    }

    public function update_individual_profile(Request $request)
    {
        $input = $request->only(['firstname', 'lastname', 'phone']);

        $validate_data = [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric'],
        ];

        $validator = Validator::make($input, $validate_data);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please see errors parameter for all errors.',
                'errors' => $validator->errors()
            ], 400);
        }

        $user = User::findorfail(Auth::user()->id);
        $individual = Individual::where('user_id', $user->id)->first();

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->save();

        $individual->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
        ]); 

        return response()->json([
            'success' => true,
            'message' => 'Profile Updated Successfully',
            'data' => [
                'user' => new UserResource($user)
            ]
        ]);
    }

    public function update_organization_profile(Request $request)
    {
        $input = $request->only(['name', 'phone', 'address']);

        $validate_data = [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric'],
        ];

        $validator = Validator::make($input, $validate_data);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please see errors parameter for all errors.',
                'errors' => $validator->errors()
            ], 400);
        }

        $user = User::findorfail(Auth::user()->id);
        $organization = Organization::where('user_id', $user->id)->first();

        $organization->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]); 

        return response()->json([
            'success' => true,
            'message' => 'Profile Updated Successfully',
            'data' => [
                'user' => new UserResource($user)
            ]
        ]);
    }
}
