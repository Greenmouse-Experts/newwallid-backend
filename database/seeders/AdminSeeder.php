<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Admin();
        $user->name = 'Admin';
        $user->email = 'admin@wall.com';
        $user->level = 'super';
        $user->password = Hash::make('admin123');
        $user->save();
    }
}
