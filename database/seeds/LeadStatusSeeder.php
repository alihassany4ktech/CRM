<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lead_statuses')->insert([
            [
                'type' => 'pending',
                'default' => 1
            ],
            [
                'type' => 'inprocess',
                'default' => 0
            ],
            [
                'type' => 'converted',
                'default' => 0
            ]
        ]);
    }
}
