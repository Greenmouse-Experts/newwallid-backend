<?php

namespace App\Http\Controllers\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\IdCardTemplateResource;
use App\Models\IDTemplate;
use App\Models\Organization;
use App\Models\UserRole;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class IDTemplateController extends Controller
{
    //
    public function index() 
    {
        $id_card_template = IDTemplate::latest()->where('organization_id', Auth::user()->id)->paginate(10);

        return $this->jsonPaginatedResponse('Id Card Template', IdCardTemplateResource::collection($id_card_template));
    }
    
    public function store() 
    {
        //Validate Request
        $validator = Validator::make(request()->all(), [
            'background_color' => ['required', 'string'],
            'text_color' => ['required', 'string'],
            'logo' => 'required|mimes:jpeg,png,jpg',
        ]);

        if($validator->fails()) {          
            return response()->json(['error'=>$validator->errors()], 401);                        
        }  

        //Find User
        $userFinder = Auth::user()->id;

        if (request()->hasFile('logo')) {
            $logo = request()->logo->getClientOriginalName();
            $path = request()->logo->storeAs('id-card-logo', $logo, 'public');

            $id_card_template = IDTemplate::create([
                'organization_id' => $userFinder,
                'background_color' => '#'.request()->background_color,
                'text_color' => '#'.request()->text_color,
                'role' => request()->role,
                'logo' => $logo,
                'path' => '/storage/'.$path,
            ]);

            $organization = Organization::where('user_id', $userFinder)->first();

            UserRole::create([
                'organization_id' => $organization->id,
                'role' => request()->role
            ]);
    
            if ($id_card_template) {
                return response()->json([
                    "success" => true,
                    "message" => "ID Card Template Created Successfully",
                    "data" => $id_card_template,
                ], 200); 
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'ID Card Template could not be created',
                ], 400);
            }
        } 
    }

    public function update($id) {
        $idFinder = $id;

        //Validate Request
        $validator = Validator::make(request()->all(), [
            'background_color' => ['string'],
            'text_color' => ['string'],
            'logo' => 'mimes:jpeg,png,jpg',
        ]);

        if($validator->fails()) {          
            return response()->json(['error'=>$validator->errors()], 401);                        
        }  

        //Find User
        $id_card_template = IDTemplate::findorfail($idFinder);

        try {
            if (request()->hasFile('logo')) {
                $logo = request()->logo->getClientOriginalName();
                if($id_card_template->logo) {
                    Storage::delete('/public/id-card-logo/'. $id_card_template->logo);
                }
                $path = request()->logo->storeAs('id-card-logo', $logo, 'public');

                $idCardTemplate = $id_card_template->update([
                    'organization_id' => Auth::user()->id,
                    'background_color' => '#'.request()->background_color,
                    'text_color' => '#'.request()->text_color,
                    'role' => request()->role,
                    'logo' => $logo,
                    'path' => '/storage/'.$path,
                ]);
        
                return response()->json([
                    "success" => true,
                    "message" => "ID Card Template Updated Successfully!",
                    "data" => $idCardTemplate,
                ], 200); 
            } 
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'ID Card Template could not be updated!',
            ], 400);
        }
    }

    public function delete($id) {
        $idFinder = $id;

        try {
            $idCardTemplate = IDTemplate::findorfail($idFinder);
            if($idCardTemplate->logo) {
                Storage::delete('/public/id-card-logo/'. $idCardTemplate->logo);
            }
            $idCardTemplate = IDTemplate::findorfail($idFinder)->delete();
            return response()->json([
                'status' => true,
                'message' => 'ID Card Template Deleted Successfully',
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'ID Card Template could not be deleted!',
            ], 400);
        }
    }
}
