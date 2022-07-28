<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\RegisterOrgRequest;

use App\Models\Individual;
use App\Models\Organization;

use App\Http\Resources\UserResource;
use App\Http\Requests\Auth\LoginRequest;


class AuthController extends Controller
{

    public function apiLogout(Request $request) {
    
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }

   
}
