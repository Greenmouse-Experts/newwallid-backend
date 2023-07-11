<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Admin;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\AdminResource;
use App\Http\Resources\UserResource;
use App\Notifications\EmailVerificationNotification;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user && !$user->email_verified_at) {
            return redirect()->back()->withErrors(['email' => 'Your email has not been verified']);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    // API
    public function index(LoginRequest $request)
    {
        $request->validated();
        $user = User::query()->where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)){
            return $this->sendCodedResponse(401, 'Incorrect Password', null, false);
        }

        if(!$user || !Hash::check($request->password, $user->password)) {
            return $this->sendCodedResponse(401, 'Email not existing', null, false);
        }

        if (!$user->email_verified_at) {
            $user->notify(new EmailVerificationNotification($user));
            return $this->sendCodedResponse(401, 'Email has not been verified', null, false);
        }

        // $token = $this->createAuthToken($request->email, $request->password);
        $token = auth('api')->attempt(['email' => $request->email, 'password' => $request->password]);

        return response()->json([
            'status' => true,
            'message' => 'Login Successfully',
            'data' => [
                'tokens' => $token,
                'user' => new UserResource($user)
            ]
        ]);
    }

    public function adminView()
    {
        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function loginAdmin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        $admin = Admin::query()->where('email', $request->email)->first();

        if ($admin && !Hash::check($request->password, $admin->password)){
            return $this->sendCodedResponse(401, 'Incorrect Password', null, false);
        }

        if(!$admin || !Hash::check($request->password, $admin->password)) {
            return $this->sendCodedResponse(401, 'Email not existing', null, false);
        }

        $token = $this->createAuthToken($request->email, $request->password);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response([
                'status' => true,
                'message' => 'Login Successfully',
                'data' => [
                    'tokens' => $token,
                    'admin' => new AdminResource($admin)
                ]
            ]);
        }
    }
}
