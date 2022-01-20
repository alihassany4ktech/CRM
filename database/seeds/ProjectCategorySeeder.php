<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategorySeeder extends Seeder
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
                'auth_id' => 1,
                'name' => 'Laravel',
            ],
            [
                'auth_id' => 1,
                'name' => 'Yii',
            ],
            [
                'auth_id' => 1,
                'name' => 'Zend',
            ],
            [
                'auth_id' => 1,
                'name' => 'CakePhp',
            ],
            [
                'auth_id' => 1,
                'name' => 'Codeigniter',
            ]

        ]);
    }
}
