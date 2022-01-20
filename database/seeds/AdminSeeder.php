<?php


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('admins')->insert([
            [
                'name'  => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),     //password
                'remember_token' => Str::random(10),
            ],
            [
                'name'  => 'Admin2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('password'),     //password
                'remember_token' => Str::random(10),
            ]
        ]);
    }
}
