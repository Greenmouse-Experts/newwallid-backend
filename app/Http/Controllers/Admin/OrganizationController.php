<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Organization;
use App\Models\Member;
use App\Models\Verification;
use App\Http\Resources\OrganizationResource;
use App\Http\Resources\MemberResource;
use App\Http\Resources\VerificationResource;
use App\Http\Resources\IdManagementResource;
use App\Models\IDCardManagement;
use App\Http\Resources\IdCardTemplateResource;
use App\Models\IDTemplate;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($status = null)
    {
        if ($status != null) {
            $data = Organization::where('status', $status)->latest()->paginate(10);
        }
        else {
            $data = Organization::latest()->paginate(10);
        }

        return $this->jsonPaginatedResponse('Organizations', OrganizationResource::collection($data));
    }

    public function members()
    {
        $members = Member::where('status', 'active')->latest()->paginate(10);

        return $this->jsonPaginatedResponse('All Members', MemberResource::collection($members));
    }

    public function templates()
    {
        $id_card_template = IDTemplate::latest()->paginate(10);

        return $this->jsonPaginatedResponse('Id Card Template', IdCardTemplateResource::collection($id_card_template));
    }

    public function idcards()
    {
        $id_card = IDCardManagement::latest()->where('status', 'Approved')->paginate(10);

        return $this->jsonPaginatedResponse('Approved ID Cards', IdManagementResource::collection($id_card));
    }

    public function verifiers()
    {
        $verification = Verification::latest()->where('status', 'Approved')
                                            ->where('role', 'Verifier')->paginate(10);

        return $this->jsonPaginatedResponse('Verifiers', VerificationResource::collection($verification));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus($id, $status)
    {
        $org = Organization::findOrFail($id);
        $org->status = $status;
        $org->save();

        return response([
            'status' => true,
            'message' => 'Organization status updated successfully',
            'data' => new OrganizationResource($org),
            // 'data' => $status
        ]);
    }
}
