<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function jsonResponse(bool $status, int $code, string $message, $data = [], $errors = null)
    {
        $responseBody = [
            'status' => $status,
            'message' => $message,
        ];
        if($code < 400) $responseBody['data'] = $data;
        if($code >= 400 ) $responseBody['errors'] = $errors;

        return response()->json($responseBody, $code);
    }

    public function jsonSuccessResponse(string $message, $code = 200)
    {
        return $this->jsonResponse(true, $code, $message, [], null);
    }

    public function jsonErrorResponse(string $message, array $errors)
    {
        return $this->jsonResponse(false, 422, $message, [], $errors);
    }

    public function jsonDataResponse(string $message, $data, $code = 200)
    {
        return $this->jsonResponse(true, $code, $message, $data, null);
    }

    public function jsonUnauthorizedResponse()
    {
        return $this->jsonResponse(false, 401, 'You are not authorized to perform this action', null, null);
    }

    public function jsonPaginatedResponse(string $message, $pagination)
    {
        $meta = [
            'per_page' => $pagination->perPage(),
            'current_page' => $pagination->currentPage(),
            'last_page' => $pagination->lastPage(),
            'total' => $pagination->total(),
            'next_page_url' => $pagination->nextPageUrl(),
            'previous_page_url' => $pagination->previousPageUrl(),
            'first_item' => $pagination->firstItem(),
            'last_item' => $pagination->lastItem(),
        ];
        return response()->json(
            [
                'status' => true,
                'message' => $message,
                'data' => $pagination->items(),
                'meta' => $meta
            ]
        );
    }

    public function sendResource($message, $resource)
    {
        return response([
            'status' => true,
            'message' => $message,
            'data' => $resource
        ]);
    }

    public function sendCodedResponse($code, $message, $data = null, $status = false)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data],
            $code);
    }

    public function createAuthToken($email, $password)
    {
        $request = Request::create('/oauth/token', 'POST', [
            'grant_type' => 'password',
            'client_id' => config('configs.client_id'),
            'client_secret' => config('configs.client_secret'),
            'username' => $email,
            'password' => $password,
            'scope' => '*',
        ]);

        $response = app()->handle($request);

        return json_decode($response->getContent());
    }

     public function encodeId($id)
    {
        return base64_encode($id);
    }

    public function decodeId($id)
    {
        return base64_decode($id);
    }

    public function uniqueKey($key)
    {
        return uniqid($key, true);
    }

    public function generateUniq()
    {
        return substr(round(microtime(true)), 4);
    }

    public function assignRoles($user, $type)
    {
        $roleWeb = Role::where('name', $type)
            ->where('guard_name', 'web')->first();

        $roleApi = Role::where('name', $type)
            ->where('guard_name', 'api')->first();

        $user->assignRole($roleWeb);
        $user->assignRole($roleApi);
    }
}
