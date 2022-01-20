<?php

use FontLib\Table\Type\name;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_categories')->insert([
            [
                'auth_id' => 1,
                'category_name' => 'Category 1'
            ],
            [
                'auth_id' => 2,
                'category_name' => 'Category 2'
            ]
        ]);

        DB::table('currencies')->insert([
            [
                'currency_name'  => 'Dollars',
                'currency_symbol' => '$',
                'currency_code' => 'USD',
            ],
            [
                'currency_name'  => 'Pounds',
                'currency_symbol' => '£',
                'currency_code' => 'GBP',
            ],
            [
                'currency_name'  => 'Euros',
                'currency_symbol' => '€',
                'currency_code' => 'EUR',
            ],
            [
                'currency_name'  => 'Rupee',
                'currency_symbol' => '₹',
                'currency_code' => 'INR',
            ]
        ]);
    }
}
