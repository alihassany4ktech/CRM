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
        DB::table('project_categories')->insert([
            [
                'name' => 'Web'
            ],
            [
                'name' => 'Graphic'
            ]
        ]);

        DB::table('task_categories')->insert([
            [
                'category_name' => 'Category 1'
            ],
            [
                'category_name' => 'Category 2'
            ]
        ]);
    }
}
