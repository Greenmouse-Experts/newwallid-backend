<?php

namespace App\Http\Controllers\Verification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\VerificationResource;
use App\Models\Individual;
use App\Models\Organization;
use App\Models\User;
use App\Models\Verification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    //
    public function verification_requests() {
        $individual = Individual::where('user_id', Auth::user()->id)->first();

        $verification = [];
        if ($individual) {
            $verification = Verification::latest()->where('individual_id', $individual->id)->paginate(10);
        }

        return $this->jsonPaginatedResponse('Users Request', VerificationResource::collection($verification));
    }

    public function index() {
        $organization = Organization::where('user_id', Auth::user()->id)->first();

        $verification = Verification::latest()->where('organization_id', $organization->id)->paginate(10);

        return $this->jsonPaginatedResponse('Users Request', VerificationResource::collection($verification));
    }

    public function send_request(Request $request)
    {
        //Validate Request
        $validator = Validator::make(request()->all(), [
            'organization_id' => ['required', 'string'],
        ]);

        if($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $user_id = Auth::user()->id;

        $verifications = Verification::latest()->get();

        if ($verifications->isEmpty()) {
            // Creator details
            $organization = Organization::where('id', request()->organization_id)->first();
            $individual = Individual::where('user_id', Auth::user()->id)->first();
            // user details
            $ind_details = Individual::where('user_id', $user_id)->first();
            $org_details = Organization::where('id', request()->organization_id)->first();

            $instance = Verification::create([
                'user_id' => $user_id,
                'organization_id' => $organization->id ?? null,
                'individual_id' => $individual->id ?? null,
                'name' => $ind_details->firstname. ' ' .$ind_details->lastname ?? $org_details->name,
            ]);

            return response([
                'status' => true,
                'message' => 'Request sent Successfully',
                'data' => new VerificationResource($instance),
                'organization' => $organization
            ], 200);
        } else {
            foreach ($verifications as $verification) {
                $idVerification[] = $verification->user_id;
            }
            if (in_array($user_id, $idVerification)) {
                return response([
                    'status' => true,
                    'message' => 'Request sent before!',
                    'data' => null
                ], 200);
            } else {
                // Creator details
                $organization = Organization::where('id', request()->organization_id)->first();
                $individual = Individual::where('user_id', Auth::user()->id)->first();
                // user details
                $ind_details = Individual::where('user_id', Auth::user()->id)->first();
                $org_details = Organization::where('id', request()->organization_id)->first();

                $instance = Verification::create([
                    'user_id' => $user_id,
                    'organization_id' => $organization->id ?? null,
                    'individual_id' => $individual->id ?? null,
                    'name' => $ind_details->firstname. ' ' .$ind_details->lastname ?? $org_details->name,
                ]);

                return response([
                    'status' => true,
                    'message' => 'Request sent Successfully',
                    'data' => new VerificationResource($instance),
                    'organization' => $organization
                ], 200);
            }
        }
    }

    public function pending() {
        $organization = Organization::where('user_id', Auth::user()->id)->first();

        $verification = Verification::latest()->where('organization_id', $organization->id)
                                            ->where('status', 'Pending')->paginate(10);

        return $this->jsonPaginatedResponse('Users Request', VerificationResource::collection($verification));
    }

    public function getdecline() {
        $organization = Organization::where('user_id', Auth::user()->id)->first();

        $verification = Verification::latest()->where('organization_id', $organization->id)
                                            ->where('status', 'Declined')->paginate(10);

        return $this->jsonPaginatedResponse('Users Request', VerificationResource::collection($verification));
    }

    public function verifiers() {
        $organization = Organization::where('user_id', Auth::user()->id)->first();

        $verification = Verification::latest()->where('organization_id', $organization->id)
                                            ->where('status', 'Approved')
                                            ->where('role', 'Verifier')->paginate(10);

        return $this->jsonPaginatedResponse('Verifiers', VerificationResource::collection($verification));
    }

    public function approve($id) {
        // $validator = Validator::make(request()->all(), [
        //     'status' => ['required', 'string'],
        // ]);

        // if($validator->fails()) {
        //     return response()->json(['error'=>$validator->errors()], 401);
        // }

        $idFinder = $id;

        $verification = Verification::where('id', $idFinder)->first();

        if(!$verification) {
            return response()->json([
                "success" => false,
                "message" => "Verification record not found!",
            ], 200);
        }

        if($verification) {
            Verification::where('id', $idFinder)->update([
                'status' => 'Approved',
                'role' => 'Verifier'
            ]);
        }


        // $verification->status = 'Approved';
        // $verification->role = 'Verifier';
        // $verification->save();

        return response()->json([
            "success" => true,
            "message" => "Verification Approved Successfully!",
            "data" => $verification,
        ], 200);
    }

    public function decline($id) {
        // $validator = Validator::make(request()->all(), [
        //     'status' => ['required', 'string'],
        // ]);

        // if($validator->fails()) {
        //     return response()->json(['error'=>$validator->errors()], 401);
        // }

        $idFinder = $id;

        $verification = Verification::where('id', $idFinder)->first();

        $verification->update([
            'status' => 'Declined',
        ]);

        return response()->json([
            "success" => true,
            "message" => "Verification Declined Successfully!",
            "data" => $verification,
        ], 200);
    }

    public function add(Request $request)
    {
        //Validate Request
        $validator = Validator::make(request()->all(), [
            'user_id' => ['required', 'string'],
        ]);

        if($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $user_id = Auth::user()->id;

        $verifications = Verification::latest()->get();

        if ($verifications->isEmpty()) {
            // Creator details
            $organization = Organization::where('user_id', Auth::user()->id)->first();
            $individual = Individual::where('user_id', request()->user_id)->first();
            // user details
            $ind_details = Individual::where('user_id', request()->user_id)->first();
            $org_details = Organization::where('user_id', $user_id)->first();

            $instance = Verification::create([
                'user_id' => $individual->user_id,
                'organization_id' => $organization->id ?? null,
                'individual_id' => $individual->id ?? null,
                'name' => $ind_details->firstname. ' ' .$ind_details->lastname ?? $org_details->name,
                'role' => 'Verifier',
                'status' => 'Approved'
            ]);

            return response([
                'status' => true,
                'message' => 'User made as a verifier',
                'data' => new VerificationResource($instance),
                'organization' => $organization
            ], 200);
        } else {
            // Creator details
            $organization = Organization::where('user_id', Auth::user()->id)->first();
            $individual = Individual::where('user_id', request()->user_id)->first();
            // user details
            $ind_details = Individual::where('user_id', request()->user_id)->first();
            $org_details = Organization::where('user_id', $user_id)->first();

            foreach ($verifications as $verification) {
                $idVerification[] = $verification->user_id;
                $idOrgVerification[] = $verification->organization_id;
            }
            if (in_array($individual->user_id, $idVerification) AND in_array($organization->id, $idOrgVerification) ) {
                return response([
                    'status' => false,
                    'message' => 'Either user has sent a request or user is a verifier!',
                    'data' => null
                ], 401);
            } else {
                $instance = Verification::create([
                    'user_id' => $individual->user_id,
                    'organization_id' => $organization->id ?? null,
                    'individual_id' => $individual->id ?? null,
                    'name' => $ind_details->firstname. ' ' .$ind_details->lastname ?? $org_details->name,
                    'role' => 'Verifier',
                    'status' => 'Approved'
                ]);

                return response([
                    'status' => true,
                    'message' => 'User made as a verifier',
                    'data' => new VerificationResource($instance),
                    'organization' => $organization
                ], 200);
            }
        }
    }
}
