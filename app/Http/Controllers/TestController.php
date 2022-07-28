<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organization;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Http\Resources\UserResource;
use App\Http\Resources\OrganizationResource;

use App\Handlers\EmailHandler;
use App\Handlers\NotificationHandler;

// use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class TestController extends Controller
{
    use NotificationHandler, EmailHandler;

    public function roles()
    {
        $user = User::findOrFail(1);
        $role = Role::findOrFail(1);

        return response([
            'status' => true,
            'message' => 'welcome',
            'data' => $role->permissions
        ]);
    }

    public function resource()
    {
        $user = User::findOrFail(20);
        return $this->sendResource('User', new UserResource($user));
    }

    public function util()
    {
        $rand = mt_rand();
        return substr($rand, 0, 4);
    }

    public function unique()
    {
        // $key = $this->uniqueKey('ev');
        // $key = substr($key, 0, 5) . 1;
        return substr(round(microtime(true)), 4);
    }

    public function signedUrl()
    {
        return URL::signedRoute('email.verify', ['user' => 1]);
    }

    public function notify()
    {
        $user = User::findOrFail(1);
        $this->sendEmailVerificationNotification($user);
        return $user;
    }

    public function email()
    {
        $user = User::findOrFail(1);
        $this->sendWelcomeMail($user);
        return $user;
    }

    public function getuser()
    {
        return Auth::check();
    }
}
