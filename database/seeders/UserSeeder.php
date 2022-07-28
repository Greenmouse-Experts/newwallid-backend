<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->firstname = 'Tao';
        $user->lastname = 'Coder';
        $user->email = 'tao@yahoo.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
