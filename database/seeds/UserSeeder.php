<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Dr.Hector Hammes',
                'phone' => '+91 654 784 547',
                'type' => 'Customer',
                'company' => 'Y4ktech',
                'city' => 'Lahore',
                'state' => 'Punjab',
                'address' => '71 Pilgrim Avenue Chevy Chase, MD 20815',
                'shipping_address' => '71 Pilgrim Avenue Chevy Chase, MD 20815',
                'zip' => '12345',
                'email' => 'customer@gmail.com',
                'website_url' => 'https://www.test.com',
                'skyp_url' => 'https://www.skyp.com',
                'linkedin_url' => 'https://www.linkedin.com',
                'twitter_url' => 'https://www.twitter.com',
                'facebook_url' => ' https://www.facebook.com',
                'note' => '<p>In publishing and graphic design, Lorem ipsum is a placeholder text 
                commonly used to demonstrate the visual form of a document or a typeface without 
                relying on meaningful content.</p>',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'password' => Hash::make('12345678'),
                // employee 
                'employee_id' => 'NaN',
                'designation_id' => null,
                'department_id' => null,
                'slack_username' => '',
                'joining_date' => '12/10/20',
                'exit_date' => '10/12/19',
                'gender' => '',
                'hourly_rate' => '',
                'skills' => '',
                'status' => 'Active'
            ],
            [

                'name' => 'Angela Dominic',
                'phone' => '+91 654 784 547',
                'type' => 'Customer',
                'company' => 'TechSole',
                'city' => 'Karachi',
                'state' => 'Sindh',
                'address' => '71 Pilgrim Avenue Chevy Chase, MD 20815',
                'shipping_address' => '71 Pilgrim Avenue Chevy Chase, MD 20815',
                'zip' => '54321',
                'email' => 'angela@gmail.com',
                'website_url' => 'https://www.test.com',
                'skyp_url' => 'https://www.skyp.com',
                'linkedin_url' => 'https://www.linkedin.com',
                'twitter_url' => 'https://www.twitter.com',
                'facebook_url' => ' https://www.facebook.com',
                'note' => '<p>In publishing and graphic design, Lorem ipsum is a placeholder text 
                commonly used to demonstrate the visual form of a document or a typeface without 
                relying on meaningful content.</p>',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'password' => Hash::make('12345678'),
                // employee 
                'employee_id' => 'NaN1',
                'designation_id' => null,
                'department_id' => null,
                'slack_username' => '',
                'joining_date' => '12/10/20',
                'exit_date' => '10/12/19',
                'gender' => '',
                'hourly_rate' => '',
                'skills' => '',
                'status' => 'Active'
            ],
            // employee
            [
                'employee_id' => 'emp-1',
                'name' => 'Micheal Doe',
                'email' => 'micheal@gmail.com',
                'password' => Hash::make('12345678'),
                'phone' => '+91 654 784 547',
                'type' => 'Employee',
                'address' => '71 Pilgrim Avenue Chevy Chase, MD 20815',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'designation_id' => '1',
                'department_id' => '1',
                'slack_username' => 'test@example.com',
                'joining_date' => '12/10/20',
                'exit_date' => '10/12/19',
                'gender' => 'Male',
                'hourly_rate' => '10',
                'skills' => 'skill1,skill2,skill2',
                // Customer,
                'shipping_address' => '',
                'company' => '',
                'city' => '',
                'state' => '',
                'zip' => '',
                'website_url' => '',
                'skyp_url' => '',
                'linkedin_url' => '',
                'twitter_url' => '',
                'facebook_url' => '',
                'note' => '',
                'status' => 'Active'

            ]
        ]);
    }
}
