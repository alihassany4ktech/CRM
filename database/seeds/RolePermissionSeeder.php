<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'create',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete',
                'guard_name' => 'web',
            ],

            [
                'name' => 'edit',
                'guard_name' => 'web',
            ]

        ]);
        DB::table('roles')->insert([
            [
                'name' => 'Demo Role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Demo Role 2',
                'guard_name' => 'web',
            ]
        ]);

        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => 1,
                'role_id' => 1,
            ],
            [
                'permission_id' => 2,
                'role_id' => 1,
            ],
            [
                'permission_id' => 3,
                'role_id' => 1,
            ],
            // 
            [
                'permission_id' => 2,
                'role_id' => 2,
            ],
            [
                'permission_id' => 3,
                'role_id' => 2,
            ],
        ]);

        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1,
                'model_type' => 'App\User',
                'model_id' => 3,

            ]
        ]);
    }
}
