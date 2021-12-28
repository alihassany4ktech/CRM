<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('super_admins')->insert([
            'name'  => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),     //password
            'remember_token' => Str::random(10),
        ]);
    }
}
