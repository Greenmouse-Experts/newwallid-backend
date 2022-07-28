<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminStoreRequest;
use App\Http\Resources\AdminResource;
use App\Models\Admin;
use App\Models\Individual;
use Illuminate\Http\Request;

use Auth;
use App\Models\User;
use App\Models\Event;
use App\Models\Group;
use App\Models\Ticket;
use App\Models\Organization;

use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.index', compact('admin'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function tickets()
    {
        $tickets = Ticket::all();
        return view('admin.tickets.index', compact('tickets'));
    }

    public function organizations()
    {
        $organizations = Organization::all();
        return view('admin.organizations.index', compact('organizations'));
    }

    public function details()
    {
        $totalUsers = User::count();
        $totalIndividuals = Individual::count();
        $totalEvents = Event::count();
        $totalOrgs = Organization::count();
//        $users = User::latest()->paginate(5);

        $data = array(
            'totalUsers' => $totalUsers,
            'totalIndividuals' => $totalIndividuals,
            'totalOrgs' => $totalOrgs,
            'totalEvents' => $totalEvents,
//            'users' => $this->jsonPaginatedResponse('Latest Users', UserResource::collection($users)),
        );

        return response([
            'status' => true,
            'message' => 'Details fetched successfully',
            'data' => $data]);
    }

    public function storeadmin(AdminStoreRequest $request)
    {
       $request->validated();

        $admin = Admin::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password'=> Hash::make($request->password),
            'level'=> 'super'
        ]);

        return response()->json([
            'status'=> true,
            'message'=> "Admin Created Successfully"
        ]);

    }

    public function alladmins()
    {
        $admins = Admin::latest()->paginate(10);

        return $this->jsonPaginatedResponse('All Admins', AdminResource::collection($admins));
    }
}
