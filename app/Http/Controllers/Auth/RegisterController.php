<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\RegisterOrgRequest;

use App\Models\User;
use App\Models\ResetCodePassword;
use App\Models\Individual;
use App\Models\Organization;

use App\Handlers\EmailHandler;
use App\Http\Resources\UserResource;
use App\Handlers\NotificationHandler;
use App\Notifications\EmailVerificationNotification;

use Mail;
use App\Mail\SendCodeResetPassword;

class RegisterController extends Controller
{

    use NotificationHandler, EmailHandler;

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'unique:individuals'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function register(Request $request)
    {

        $input = $request->all();
        $validator = $this->validator($input);

        if ($validator->passes()) {
            $user = $this->create($input);
            $individual = Individual::create([
                'firstname' => $input['firstname'],
                'lastname' => $input['lastname'],
                'phone' => $input['phone'],
                'user_id' => $user->id
            ]);

            $this->assignRoles($user, 'individual');

            $user->notify(new EmailVerificationNotification($user));

            // try {
            //     $this->sendEmailVerificationNotification($user);
            // }
            // catch (\Exception $e) {

            // }

            return redirect('account-created');
        }

        return back()->withErrors($validator->errors());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        try {

            $input = $request->validated();
            $user = $this->create($input);
            
            // $user = User::create([
            //     'firstname' => $input['firstname'],
            //     'lastname' => $input['lastname'],
            //     'username' => $input['username'],
            //     'phone' => $input['phone'],
            //     'email' => $input['email'],
            //     'password' => Hash::make($input['password'])
            // ]);

            $individual = Individual::create([
                'firstname' => $input['firstname'],
                'lastname' => $input['lastname'],
                'phone' => $input['phone'],
                // 'id_card_number' => $this->idCardNumber($request->name),
                'id_card_number' => $this->wallID(10),
                'user_id' => $user->id
            ]);

            $this->assignRoles($user, 'individual');

            $user->notify(new EmailVerificationNotification($user));

            $response = [
                'status' => true,
                'message' =>  'Account created Successfully, Please verify your account and Login',
                'data' => [
                    'user' => new UserResource($user)
                ]
            ];

            return response($response);
        } catch (\Exception $e) {

            if (isset($user))
                $user->delete();

            throw $e;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // private function idCardNumber($name)
    // {
    //     $_name = strtoupper(substr($name, 0, 3));
    //     $random_number = random_int(100000, 999999);
    //     $idcardnumber = $_name . '-' . $random_number;
    //     return $idcardnumber;
    // }
    function wallID($input, $strength = 10) {
        $input = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }

    public function storeOrganization(RegisterOrgRequest $request)
    {

        try {

            $request->validated();

            $user = User::create([
                'type' => 'organization',
                'email' => $request->email,
                'username' => $request->name,
                'password' => Hash::make($request->password)
            ]);

            $org = Organization::create([
                'name' => $request->input('name'),
                'user_id' => $user->id,
                'phone' => $request->phone,
                // 'id_card_number' => $this->idCardNumber($request->name),
                'id_card_number' => $this->wallID(10),
                'type' => $request->type
            ]);

            $this->assignRoles($user, 'organization');
            $user->notify(new EmailVerificationNotification($user));


            $response = [
                'status' => true,
                'message' =>  'Account created Successfully',
                'data' => [
                    'user' => new UserResource($user)
                ]
            ];


            return response($response);
        } catch (\Exception $e) {

            if (isset($user))
                $user->delete();

            if (isset($org))
                $org->delete();

            throw $e;
        }
    }

    public function createOrganization(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:organizations,name',
            'email' => 'required|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'phone' => 'required|unique:organizations,phone',
            'address' => 'required|unique:organizations,address',
        ]);

        $user = User::create([
            'type' => 'organization',
            'email' => $request->email,
            'username' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        $org = Organization::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'phone' => $request->phone,
            'id_card_number' => $this->wallID(10),
            'type' => $request->type,
            'address' => $request->address,
        ]);
        $this->assignRoles($user, 'organization');

        $user->notify(new EmailVerificationNotification($user));

        // try {
        //     $this->sendEmailVerificationNotification($user);
        // } catch (\Exception $e) {
        // }

        // return response()->json(
        //    [ 'data'=> $org,]
        // );

        return redirect('login')
            ->with("success", "We just sent you a verification email. Please, check your email inbox.");
    }

    public function accountTypeView()
    {
        return view('auth.type');
    }

    public function organizationView()
    {
        return view('auth.organization');
    }


    public function verifyEmail(Request $request)
    {
        $url = "https://wallid.netlify.app/account/verified";

        if (!$request->hasValidSignature()) {
            abort(401);
        }

        $user = User::findOrFail($request->user);
        if (!$user->email_verified_at) {
            $user->email_verified_at = now();
            $user->save();

            return redirect()->to($url);
            // return view('pages.verify_email_success');
        }
        return redirect()->to($url);
        // return redirect()->to('login');
    }

    public function resend($email)
    {
        $user = User::where('email', $email)->first();

        $user->notify(new EmailVerificationNotification($user));

        $response = [
            'status' => true,
            'message' =>  'A fresh verification link has been sent to your email address.',
            'data' => null
        ];

        return response($response);
    }

    public function forget_password(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users',
        ]);

        // Delete all old code that user send before.
        ResetCodePassword::where('email', $request->email)->delete();

        // Generate random code
        $code = mt_rand(100000, 999999);

        // Create a new code
        $codeData = ResetCodePassword::create([
            'email' => $request->email,
            'code' => $code
        ]);

        // Send email to user
        Mail::to($request->email)->send(new SendCodeResetPassword($codeData->code));

        $response = [
            'status' => true,
            'message' =>  'We have emailed your password reset code!',
            'data' => null
        ];

        return response($response);
    }

    public function reset_password(Request $request)
    {
        $request->validate([
            'code' => 'required|string|exists:reset_code_passwords',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if (ResetCodePassword::where('code', '=', $request->code)->exists()) {
            // find the code
            $passwordReset = ResetCodePassword::firstWhere('code', $request->code);

            // check if it does not expired: the time is one hour
            if ($passwordReset->created_at > now()->addHour()) {
                $passwordReset->delete();

                return response()->json([
                    'status' => false,
                    'message' =>  'Password reset code expired'
                ]);
            }

            // find user's email 
            $user = User::firstWhere('email', $passwordReset->email);

            // update user password
            $user->update([
                'password' => Hash::make($request->password)
            ]);

            // delete current code 
            $passwordReset->delete();

            return response()->json([
                'success' => true,
                'message' => 'Password has been successfully reset'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Code does\'nt exist in our database'
            ]); 
        }
    }
}
