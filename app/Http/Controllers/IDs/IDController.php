<?php

namespace App\Http\Controllers\IDs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\IdManagementRequest;
use App\Http\Resources\IdManagementResource;
use App\Models\IDCardManagement;
use App\Models\Individual;
use App\Models\Organization;
use App\Models\User;
use App\Models\IDTemplate;
use App\Models\Member;
use App\Traits\AjaxUpload;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class IDController extends Controller
{
    public function index() 
    {
        $id_card = IDCardManagement::latest()->where('user_id', Auth::user()->id)
                                             ->where('status', 'Approved')->paginate(10);

        return $this->jsonPaginatedResponse('User ID Card', IdManagementResource::collection($id_card));
    }

    public function pending_individual() 
    {
        $individual = Individual::where('user_id', Auth::user()->id)->first();

        $id_card = IDCardManagement::latest()->where('user_id', Auth::user()->id)
                                             ->where('status', 'Pending')
                                             ->where('created_by', $individual->id)->paginate(10);

        return $this->jsonPaginatedResponse('Pending ID Individual Created Card', IdManagementResource::collection($id_card));
    }

    public function pending_organization() 
    {
        $individual = Individual::where('user_id', Auth::user()->id)->first();

        $id_card = IDCardManagement::latest()->where('user_id', Auth::user()->id)
                                             ->where('status', 'Pending')
                                             ->where('created_by', '!=', $individual->id)->paginate(10);

        return $this->jsonPaginatedResponse('Pending ID Organization Created Card', IdManagementResource::collection($id_card));
    }

    public function process_idCard_organization($id) 
    {
        $validator = Validator::make(request()->all(), [
            'status' => ['required', 'string'],
        ]);

        if($validator->fails()) {          
            return response()->json(['error'=>$validator->errors()], 401);                        
        } 

        $idFinder = $id;

        $id_card = IDCardManagement::findorfail($idFinder);

        $id_card->status = request()->status;
        $id_card->save();

        if (request()->status == "Declined") {
            return response()->json([
                "success" => true,
                "message" => "ID Card Declined! ",
                "data" => $id_card,
            ], 200); 
        } elseif(request()->status == "Approved") {
            return response()->json([
                "success" => true,
                "message" => "ID Card Approved Successfully! ",
                "data" => $id_card,
            ], 200); 
        }
    }

    public function store(IdManagementRequest $request)
    {
        $request->validated();

        //get username of the person the card will be created for
        $user = User::where('id', Auth::user()->id)->first();
        $getIndividualUser = Individual::where('user_id', $user->id)->first();

        //get the organization data
        $getOrganizationUser = Organization::where('id', request()->organization_id)->first();
        $organization_user = User::where('id', $getOrganizationUser->user_id)->first();

        //get members
        $memberRequest = Member::where('individual_id', $getIndividualUser->id)
                                 ->where('organization_id', $getOrganizationUser->id)->first();

        if (!$memberRequest) {
            return response()->json([
                'status' => false,
                'message' => 'Member request not sent',
            ], 400);
        } else {
            if ($user == null) {
                return response()->json([
                    'status' => false,
                    'message' => 'User Not Found',
                ], 400);
            } else {
                $user_id = $user->id;
                
                if (Auth::user()->type == 'organization') {
                    $org_id = Organization::where('user_id', Auth::user()->id)->first();
                    // $idcard = IDCardManagement::where('user_id', $user_id)
                    //     ->where('organization_id', $org_id->id)
                    //     ->get();
                    $idcards = IDCardManagement::latest()->get();
                } else if (Auth::user()->type == 'individual') {
                    $indi_id = Individual::where('user_id', Auth::user()->id)->first();
                    // $idcard = IDCardManagement::where('user_id', $user_id)
                    //     ->where('individual_id', $indi_id->id)
                    //     ->get();
                    $idcards = IDCardManagement::latest()->get();
                }

                $idTemplates = IDTemplate::where('organization_id', $organization_user->id)->get();

                if ($idcards->isEmpty()) {
                    if ($idTemplates->isEmpty()) {
                        return response([
                            'status' => false,
                            'message' => 'No Template created by organization',
                        ], 400);
                    } else {
                        foreach ($idTemplates as $idTemplate) {
                            $idOrgTemplate[] = $idTemplate->role;
                        }
                        if (in_array($memberRequest->role, $idOrgTemplate)) {

                            $template = IDTemplate::where('role', $memberRequest->role)->first();

                            if ($request->hasFile('passport')) {
                                $passport = request()->passport->getClientOriginalName();
                                $path = request()->passport->storeAs('IDCard_Passport', $passport, 'public');
                            }

                            // Creator details
                            $organization = Organization::where('user_id', Auth::user()->id)->first();
                            $individual = Individual::where('user_id', Auth::user()->id)->first();
                            // user details
                            $ind_details = Individual::where('user_id', $user_id)->first();
                            $org_details = Organization::where('user_id', $user_id)->first();

                            //   return  $organization;
                            $instance = IDCardManagement::create([
                                'id_card_number' => $organization_user->username.'-'.$this->id_no(5),
                                'user_id' => $user_id,
                                'organization_id' => $organization->id ?? $getOrganizationUser->id,
                                'individual_id' => $individual->id ?? null,
                                'template_id' => $template->id ?? null,
                                'name' => request()->name ?? $ind_details->firstname. ' ' .$ind_details->lastname,
                                'passport' => $passport ?? null,
                                'path' => '/storage/'.$path,
                                'role' => $memberRequest->role ?? null,
                                'issued_date' => $request->issued_date,
                                'status' => 'Pending',
                                'created_by' => $individual->id
                            ]);

                            return response([
                                'status' => true,
                                'message' => 'Id card created Successfully',
                                'data' => new IdManagementResource($instance),
                            ], 200);
                        } else {
                            return response([
                                'status' => false,
                                'message' => 'Role not existing in the organization ID Card Template.',
                            ], 400);
                        }
                    }
                } else {
                    foreach ($idcards as $idcard) {
                        $idIndCard[] = $idcard->individual_id;
                        $idOrgCard[] = $idcard->organization_id;
                    }
                    if (in_array($getIndividualUser->id, $idIndCard) AND in_array($getOrganizationUser->id, $idOrgCard) ) {
                        return response([
                            'status' => false,
                            'message' => 'User has an ID!',
                            'data' => null
                        ], 200);
                    } else {
                        if ($idTemplates->isEmpty()) {
                            return response([
                                'status' => false,
                                'message' => 'No Template created by organization',
                            ], 400);
                        } else {
                            foreach ($idTemplates as $idTemplate) {
                                $idOrgTemplate[] = $idTemplate->role;
                            }
                            if (in_array($memberRequest->role, $idOrgTemplate)) {

                                $template = IDTemplate::where('role', $memberRequest->role)->first();

                                if ($request->hasFile('passport')) {
                                    $passport = request()->passport->getClientOriginalName();
                                    $path = request()->passport->storeAs('IDCard_Passport', $passport, 'public');
                                }

                                // Creator details
                                $organization = Organization::where('user_id', Auth::user()->id)->first();
                                $individual = Individual::where('user_id', Auth::user()->id)->first();
                                // user details
                                $ind_details = Individual::where('user_id', $user_id)->first();
                                $org_details = Organization::where('user_id', $user_id)->first();

                                //   return  $organization;
                                $instance = IDCardManagement::create([
                                    'id_card_number' => $organization_user->username.'-'.$this->id_no(5),
                                    'user_id' => $user_id,
                                    'organization_id' => $organization->id ?? $getOrganizationUser->id,
                                    'individual_id' => $individual->id ?? null,
                                    'template_id' => $template->id ?? null,
                                    'name' => request()->name ?? $ind_details->firstname. ' ' .$ind_details->lastname,
                                    'passport' => $passport ?? null,
                                    'path' => '/storage/'.$path,
                                    'role' => $memberRequest->role ?? null,
                                    'issued_date' => $request->issued_date,
                                    'status' => 'Pending',
                                    'created_by' => $individual->id
                                ]);

                                return response([
                                    'status' => true,
                                    'message' => 'Id card created Successfully',
                                    'data' => new IdManagementResource($instance),
                                ], 200);
                            } else {
                                return response([
                                    'status' => false,
                                    'message' => 'Role not existing in the organization ID Card Template.',
                                ], 400);
                            }
                        }
                    }
                }
            }
        }
    }

    function id_no($input, $strength = 5) 
    {
        $input = '0123456789';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }

    public function approved_idCard() 
    {
        $organization = Organization::where('user_id', Auth::user()->id)->first();

        $id_card = IDCardManagement::latest()->where('organization_id', $organization->id)
                                             ->where('status', 'Approved')->paginate(10);

        return $this->jsonPaginatedResponse('Approved ID Cards', IdManagementResource::collection($id_card));
    }

    public function pending_idCard() 
    {
        $organization = Organization::where('user_id', Auth::user()->id)->first();

        $id_card = IDCardManagement::latest()->where('organization_id', $organization->id)
                                             ->where('status', 'Pending')->paginate(10);

        return $this->jsonPaginatedResponse('Pending ID Cards', IdManagementResource::collection($id_card));
    }

    public function declined_idCard() 
    {
        $organization = Organization::where('user_id', Auth::user()->id)->first();

        $id_card = IDCardManagement::latest()->where('organization_id', $organization->id)
                                             ->where('status', 'Declined')->paginate(10);

        return $this->jsonPaginatedResponse('Declined ID Cards', IdManagementResource::collection($id_card));
    }

    public function process_idCard($id) 
    {
        $validator = Validator::make(request()->all(), [
            'status' => ['required', 'string'],
        ]);

        if($validator->fails()) {          
            return response()->json(['error'=>$validator->errors()], 401);                        
        } 

        $idFinder = $id;

        $id_card = IDCardManagement::findorfail($idFinder);

        $id_card->status = request()->status;
        $id_card->save();

        if (request()->status == "Declined") {
            return response()->json([
                "success" => true,
                "message" => "ID Card Declined! ",
                "data" => $id_card,
            ], 200); 
        } elseif(request()->status == "Approved") {
            return response()->json([
                "success" => true,
                "message" => "ID Card Approved Successfully! ",
                "data" => $id_card,
            ], 200); 
        }
    }

    public function create(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'user_id' => ['required'],
            'passport' => 'required|mimes:jpeg,png,jpg'
        ]);

        if($validator->fails()) {          
            return response()->json(['error'=>$validator->errors()], 401);                        
        }  

        //get username of the person the card will be created for
        $user = User::where('id', $request->user_id)->first();
        $getIndividualUser = Individual::where('user_id', $user->id)->first();

        //get the organization data
        $organization_user = User::where('id', Auth::user()->id)->first();
        $getOrganizationUser = Organization::where('user_id', $organization_user->id)->first();

        //get members
        $memberRequest = Member::where('individual_id', $getIndividualUser->id)
                                 ->where('organization_id', $getOrganizationUser->id)->first();
        if (!$memberRequest) {
            return response()->json([
                'status' => false,
                'message' => 'Member request not sent',
            ], 400);
        } else {
            if ($user == null) {
                return response()->json([
                    'status' => false,
                    'message' => 'User Not Found',
                ], 400);
            } else {
                $user_id = $user->id;
                
                if (Auth::user()->type == 'organization') {
                    $org_id = Organization::where('user_id', Auth::user()->id)->first();
                    // $idcard = IDCardManagement::where('user_id', $user_id)
                    //     ->where('organization_id', $org_id->id)
                    //     ->get();
                    $idcards = IDCardManagement::latest()->get();
                } else if (Auth::user()->type == 'individual') {
                    $indi_id = Individual::where('user_id', Auth::user()->id)->first();
                    // $idcard = IDCardManagement::where('user_id', $user_id)
                    //     ->where('individual_id', $indi_id->id)
                    //     ->get();
                    $idcards = IDCardManagement::latest()->get();
                }

                $idTemplates = IDTemplate::where('organization_id', $organization_user->id)->get();

                if ($idcards->isEmpty()) {
                    if ($idTemplates->isEmpty()) {
                        return response([
                            'status' => false,
                            'message' => 'No Template created',
                        ], 400);
                    } else {
                        foreach ($idTemplates as $idTemplate) {
                            $idOrgTemplate[] = $idTemplate->role;
                        }
                        if (in_array($memberRequest->role, $idOrgTemplate)) {

                            $template = IDTemplate::where('role', $memberRequest->role)->first();

                            if ($request->hasFile('passport')) {
                                $passport = request()->passport->getClientOriginalName();
                                $path = request()->passport->storeAs('IDCard_Passport', $passport, 'public');
                            }

                            // Creator details
                            $organization = Organization::where('user_id', Auth::user()->id)->first();
                            $individual = Individual::where('user_id', Auth::user()->id)->first();
                            // user details
                            $ind_details = Individual::where('user_id', $user_id)->first();
                            $org_details = Organization::where('user_id', $user_id)->first();

                            //   return  $organization;
                            $instance = IDCardManagement::create([
                                'id_card_number' => $organization_user->username.'-'.$this->id_no(5),
                                'user_id' => $user_id,
                                'organization_id' => $organization->id ?? $getOrganizationUser->id,
                                'individual_id' => $ind_details->id ?? null,
                                'template_id' => $template->id ?? null,
                                'name' => $ind_details->firstname. ' ' .$ind_details->lastname,
                                'passport' => $passport ?? null,
                                'path' => '/storage/'.$path,
                                'role' => $memberRequest->role ?? null,
                                'issued_date' => now(),
                                'status' => 'Pending',
                                'created_by' => $organization->id
                            ]);

                            return response([
                                'status' => true,
                                'message' => 'Id card created Successfully',
                                'data' => new IdManagementResource($instance),
                            ], 200);
                        } else {
                            return response([
                                'status' => false,
                                'message' => 'Role not existing in the organization ID Card Template.',
                            ], 400);
                        }
                    }
                } else {
                    foreach ($idcards as $idcard) {
                        $idIndCard[] = $idcard->individual_id;
                        $idOrgCard[] = $idcard->organization_id;
                    }
                    if (in_array($getIndividualUser->id, $idIndCard) AND in_array($getOrganizationUser->id, $idOrgCard) ) {
                        return response([
                            'status' => false,
                            'message' => 'User has an ID!',
                            'data' => null
                        ], 200);
                    } else {
                        if ($idTemplates->isEmpty()) {
                            return response([
                                'status' => false,
                                'message' => 'No Template created',
                            ], 400);
                        } else {
                            foreach ($idTemplates as $idTemplate) {
                                $idOrgTemplate[] = $idTemplate->role;
                            }
                            if (in_array($memberRequest->role, $idOrgTemplate)) {

                                $template = IDTemplate::where('role', $memberRequest->role)->first();

                                if ($request->hasFile('passport')) {
                                    $passport = request()->passport->getClientOriginalName();
                                    $path = request()->passport->storeAs('IDCard_Passport', $passport, 'public');
                                }

                                // Creator details
                                $organization = Organization::where('user_id', Auth::user()->id)->first();
                                $individual = Individual::where('user_id', Auth::user()->id)->first();
                                // user details
                                $ind_details = Individual::where('user_id', $user_id)->first();
                                $org_details = Organization::where('user_id', $user_id)->first();

                                //   return  $organization;
                                $instance = IDCardManagement::create([
                                    'id_card_number' => $organization_user->username.'-'.$this->id_no(5),
                                    'user_id' => $user_id,
                                    'organization_id' => $organization->id ?? $getOrganizationUser->id,
                                    'individual_id' => $ind_details->id ?? null,
                                    'template_id' => $template->id ?? null,
                                    'name' => $ind_details->firstname. ' ' .$ind_details->lastname,
                                    'passport' => $passport ?? null,
                                    'path' => '/storage/'.$path,
                                    'role' => $memberRequest->role ?? null,
                                    'issued_date' => now(),
                                    'status' => 'Pending',
                                    'created_by' => $organization->id
                                ]);

                                return response([
                                    'status' => true,
                                    'message' => 'Id card created Successfully',
                                    'data' => new IdManagementResource($instance),
                                ], 200);
                            } else {
                                return response([
                                    'status' => false,
                                    'message' => 'Role not existing in the organization ID Card Template.',
                                ], 400);
                            }
                        }
                    }
                }
            }
        }
    }
}