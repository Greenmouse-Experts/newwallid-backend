<?php

namespace App\Http\Controllers\IDs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\IdRequest;
use App\Http\Resources\IdCardResource;
use App\Models\IDCard;
use App\Models\Individual;
use App\Models\Organization;
use App\Models\User;
use App\Traits\AjaxUpload;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Intervention\Image\ImageManagerStatic as Image;


class MainController extends Controller
{
    use AjaxUpload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserIdcard(Request $request)
    {
        $idcard = IDCard::where('user_id', Auth::user()->id)->latest()->paginate(10);
        return $this->jsonPaginatedResponse('All My ID Cards', IdCardResource::collection($idcard));

    }

    public function getUserbusinessIdcard(Request $request)
    {
        $idcard = IDCard::where('user_id', Auth::user()->id)
            ->where('category', 'business')
            ->latest()->paginate(10);
        return $this->jsonPaginatedResponse('My Business ID Cards', IdCardResource::collection($idcard));
    }

    public function getUserhealthIdcard(Request $request)
    {
        $idcard = IDCard::where('user_id', Auth::user()->id)
            ->where('category', 'health')
            ->latest()->paginate(10);
        return $this->jsonPaginatedResponse('My Health ID Cards', IdCardResource::collection($idcard));
    }

    public function getUserstudentsIdcard(Request $request)
    {
        $idcard = IDCard::where('user_id', Auth::user()->id)
            ->where('category', 'student')
            ->latest()->paginate(10);
        return $this->jsonPaginatedResponse('My Student ID Cards', IdCardResource::collection($idcard));
    }

    public function getOrgIdcard()
    {
        $idcard = IDCard::where('organization_id', Auth()->user()->organization->id)->get();
        return response([
            'status' => true,
            'data' => IdCardResource::collection($idcard)
        ]);
    }

    public function store(IdRequest $request)
    {
        $request->validated();

        //get username of the person the card will be created for

        $user = User::where('username', $request->name)->first();

        if ($user == null) {
            return response()->json([
                'status' => false,
                'message' => 'User with that username Not Found',
            ], 400);
        } else {
            $user_id = $user->id;
            // $idcard  = IdCard::whereHas('organization', function ($q) use ($user_id) {
            //     $q->where('user_id', $user_id);
            // })->get();
            // $logged_in_user = User::findorfail(Auth::user()->id);

            if (Auth::user()->type == 'organization') {
                $org_id = Organization::where('user_id', Auth::user()->id)->first();
                $idcard = IdCard::where('user_id', $user_id)
                    ->where('organization_id', $org_id->id)
                    ->get();
            } else if (Auth::user()->type == 'individual') {
                $indi_id = Individual::where('user_id', Auth::user()->id)->first();
                $idcard = IdCard::where('user_id', $user_id)
                    ->where('individual_id', $indi_id->id)
                    ->get();
            }
            // return $idcard->count();

            if ($idcard->count() > 0) {
                return response([
                    'status' => false,
                    'message' => 'You already created an id card for this user',
                ], 400);
            } else {

                // return "lol";
                if ($request->image) {

                    $image_name = time() . "." . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
                    Image::make($request->image)->save(public_path('IDCard_Passport/') . $image_name);
                }

                // Creator details
                $organization = Organization::where('user_id', Auth::user()->id)->first();
                $individual = Individual::where('user_id', Auth::user()->id)->first();
                //user details
                $ind_details = Individual::where('user_id', $user_id)->first();
                $org_details = Organization::where('user_id', $user_id)->first();

                //   return  $organization;
                $instance = IDCard::create([
                    'user_id' => $user_id,
                    'firstname' => $ind_details->firstname ?? $org_details->name,
                    'lastname' => $ind_details->lastname ?? null,
                    'middle_name' => null,
                    'passport' => $image_name ?? null,
                    'id_card_number' => null,
                    'organization_id' => $organization->id ?? null,
                    'individual_id' => $individual->id ?? null,
                    'issued_date' => $request->issued_date,
                    'expiry_date' => $request->expiry_date,
                    'template_name' => $request->template_name,
                    'layout' => $request->layout,
                    'category' => $request->category,
                    'role' => $request->role
                ]);

                return response([
                    'status' => true,
                    'message' => 'Id card created Successfully',
                    'data' => new IdCardResource($instance)
                ], 200);
                // return $idcard;
            }
        }


        // $user_id = $request->user_id ?? Auth::user()->id;
        // $idcard  = IdCard::whereHas('user.organization', function ($q) use ($user_id) {
        //     $q->where('user_id', $user_id);
        // })->get();

        // if ($idcard->count() > 0) {
        //     return response([
        //         'status' => true,
        //         'message' => 'Id card for this user already exist',
        //     ]);
        // }

        // if ($request->hasFile('passport')) {
        //     $file = $request->file('passport');
        //     $extension = $file->getClientOriginalExtension();
        //     $fileName = sha1(time()) . '.' . $extension;
        //     $path = public_path() . '/passport';
        //     $file->move($path, $fileName);
        //     $saved_path = 'passport/' . $fileName;
        // }

        // if ($request->hasFile('logo_url')) {
        //     $file = $request->file('logo_url');
        //     $ext = $file->getClientOriginalExtension();
        //     $file_name = sha1(time()) . '.' . $ext;
        //     $logo_path = public_path() . '/logo';
        //     $file->move($logo_path, $file_name);
        //     $saved_logo_path = 'logo/' . $fileName;
        // }

        // // Qr Code
        // try {
        //     $rand_number = Str::random(30);
        //     $qr_image =  \QrCode::size(500)->format('png')->generate($rand_number);
        //     $file_name = sha1(time()) . '.png';
        //     $file_path = 'qrcode/' . $file_name;
        //     storage_path() . "/app/" . $file_path;
        //     Storage::disk('local')->put($file_path, $qr_image);
        // } catch (\Throwable $th) {
        //     return response([
        //         'status' => false,
        //         'message' => 'Qr code for Id card could not be created',
        //     ]);
        // }

        // try {
        //     $organization = Organization::where('user_id', Auth::user()->id)->first();
        //     // dd($organization->first());
        //     $instance = IDCard::create([
        //         'user_id' => $user_id,
        //         'firstname' => $request->firstname,
        //         'lastname' => $request->lastname,
        //         'middle_name' => $request->middle_name,
        //         'passport' => $saved_path ?? null,
        //         'id_card_number' => $organization->id_card_number,
        //         'organization_id' => $organization->id,
        //         'issued_date' => $request->issued_date,
        //         'expiry_date' => $request->expiry_date,
        //         'template_name' => $request->template_name,
        //         'category' => $request->category,
        //         'qr_code' => $rand_number,
        //         'qr_code_url' => $file_path,
        //         'logo_url' => $saved_logo_path ?? null,
        //         'role' => $request->role
        //     ]);


        //     return response([
        //         'status' => true,
        //         'message' => 'Id card created Successfully',
        //         'data' => new IdCardResource($instance)
        //     ]);
        // } catch (\Illuminate\Database\QueryException $e) {
        //     var_dump($e->errorInfo);
        // }
    }

    public function created_ids()
    {
        if (Auth::user()->type == 'organization') {
            $org_id = Organization::where('user_id', Auth::user()->id)->first();
            $idcard = IdCard::where('organization_id', $org_id->id)->latest()->paginate(10);
        } else if (Auth::user()->type == 'individual') {
            $indi_id = Individual::where('user_id', Auth::user()->id)->first();
            $idcard = IdCard::where('individual_id', $indi_id->id)->latest()->paginate(10);
        }

        return $this->jsonPaginatedResponse('All my Created ID Cards', IdCardResource::collection($idcard));
    }

    public function SearchCreated_ids(Request $request)
    {
        $name = $request->name;

        if (Auth::user()->type == 'organization') {
            $org_id = Organization::where('user_id', Auth::user()->id)->first();
            $idcard = IdCard::where('firstname', 'LIKE', "%{$name}%")
                ->where('organization_id', $org_id->id)
                ->latest()->paginate(10);
        } else if (Auth::user()->type == 'individual') {
            $indi_id = Individual::where('user_id', Auth::user()->id)->first();
            $idcard = IdCard::where('firstname', 'LIKE', "%{$name}%")
                ->where('individual_id', $indi_id->id)
                ->latest()->paginate(10);
        }


        if ($idcard['data']) {
            return $this->jsonPaginatedResponse('ID Card Query', IdCardResource::collection($idcard));
        } else {
            return response([
                'status' => false,
                'message' => 'ID Card(s) with that query not found',
            ], 400);
        }

    }


    /** @noinspection DuplicatedCode */
    public function business_created_ids()
    {
        if (Auth::user()->type == 'organization') {
            $org_id = Organization::where('user_id', Auth::user()->id)->first();

            $idcard = IdCard::where('organization_id', $org_id->id)
                ->where('category', 'business')
                ->latest()->paginate(10);
        } else if (Auth::user()->type == 'individual') {
            $indi_id = Individual::where('user_id', Auth::user()->id)->first();

            $idcard = IdCard::where('individual_id', $indi_id->id)
                ->where('category', 'business')
                ->latest()->paginate(10);
        }

        return $this->jsonPaginatedResponse('All my Created Business ID Cards', IdCardResource::collection($idcard));
    }


    public function health_created_ids()
    {
        if (Auth::user()->type == 'organization') {
            $org_id = Organization::where('user_id', Auth::user()->id)->first();

            $idcard = IdCard::where('organization_id', $org_id->id)
                ->where('category', 'health')
                ->latest()->paginate(10);
        } else if (Auth::user()->type == 'individual') {
            $indi_id = Individual::where('user_id', Auth::user()->id)->first();

            $idcard = IdCard::where('individual_id', $indi_id->id)
                ->where('category', 'health')
                ->latest()->paginate(10);
        }

        return $this->jsonPaginatedResponse('All my Created Health ID Cards', IdCardResource::collection($idcard));
    }

    public function students_created_ids()
    {
        if (Auth::user()->type == 'organization') {
            $org_id = Organization::where('user_id', Auth::user()->id)->first();

            $idcard = IdCard::where('organization_id', $org_id->id)
                ->where('category', 'student')
                ->latest()->paginate(10);
        } else if (Auth::user()->type == 'individual') {
            $indi_id = Individual::where('user_id', Auth::user()->id)->first();

            $idcard = IdCard::where('individual_id', $indi_id->id)
                ->where('category', 'student')
                ->latest()->paginate(10);
        }

        return $this->jsonPaginatedResponse('All my Created Student ID Cards', IdCardResource::collection($idcard));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idCard = IDCard::findorfail($id);

        return response([
            'status' => true,
            'message' => 'Id Fetched Successfully',
            'data' => new IdCardResource($idCard)
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(IdRequest $request, $id)
    {

        $idcard = IDCard::findorfail($id);

        // return $idcard->id;

        $db_passport = $idcard->passport;

        $passport_path = public_path('IDCard_Passport/') . $db_passport;

        if ($request->image != $db_passport) {
            if (file_exists($passport_path)) {
                unlink($passport_path);
                $image_name = time() . "." . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
                Image::make($request->image)->save(public_path('IDCard_Passport/') . $image_name);
            }
        }

        $idcard->update([
            // 'user_id' => $user_id,
            // 'firstname' => $user->firstname,
            // 'lastname' => $user->lastname,
            // 'middle_name' => $user->middle_name,
            'passport' => $image_name ?? $request->image,
            // 'id_card_number' => null,
            // 'organization_id' =>  $organization->id ?? null,
            // 'individual_id' =>  $individual->id ?? null,
            'issued_date' => $request->issued_date,
            'expiry_date' => $request->expiry_date,
            'template_name' => $request->template_name,
            'layout' => $request->layout,
            'category' => $request->category,
            'role' => $request->role
        ]);

        //  $test = IDCard::findorfail($id);
        //  return dump($idcard);

        return response([
            'status' => true,
            'message' => 'Id card Updated Successfully',
            'data' => new IdCardResource($idcard)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $idcard = IDCard::findOrFail($id);
            $idcard->delete();
            if ($idcard->passport) {
                file_exists(public_path('IDCard_Passport/') . $idcard->passport) ? unlink(public_path('IDCard_Passport/') . $idcard->passport) : '';
            }
            return response([
                'status' => true,
                'message' => 'Id card deleted successfully',
            ], 200);
        } catch (Exception $e) {
            // dd($e->getmessage());
            return response([
                'status' => false,
                'message' => 'Oops! something went wrong',
            ], 400);
        }
    }
}
