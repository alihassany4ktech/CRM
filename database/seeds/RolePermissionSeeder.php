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
            ['auth_id' => 1, 'name' => 'add_clients', 'guard_name' => 'web', 'display_name' => 'Add Clients', 'module_id' => 1],
            ['auth_id' => 1, 'name' => 'view_clients', 'guard_name' => 'web', 'display_name' => 'View Clients', 'module_id' => 1],
            ['auth_id' => 1, 'name' => 'edit_clients', 'guard_name' => 'web', 'display_name' => 'Edit Clients', 'module_id' => 1],
            ['auth_id' => 1, 'name' => 'delete_clients', 'guard_name' => 'web', 'display_name' => 'Delete Clients', 'module_id' => 1],

            ['auth_id' => 1, 'name' => 'add_employees', 'guard_name' => 'web', 'display_name' => 'Add Employees', 'module_id' => 2],
            ['auth_id' => 1, 'name' => 'view_employees', 'guard_name' => 'web', 'display_name' => 'View Employees', 'module_id' => 2],
            ['auth_id' => 1, 'name' => 'edit_employees', 'guard_name' => 'web', 'display_name' => 'Edit Employees', 'module_id' => 2],
            ['auth_id' => 1, 'name' => 'delete_employees', 'guard_name' => 'web', 'display_name' => 'Delete Employees', 'module_id' => 2],

            ['auth_id' => 1, 'name' => 'add_projects', 'guard_name' => 'web', 'display_name' => 'Add Project', 'module_id' => 3],
            ['auth_id' => 1, 'name' => 'view_projects', 'guard_name' => 'web', 'display_name' => 'View Project', 'module_id' => 3],
            ['auth_id' => 1, 'name' => 'edit_projects', 'guard_name' => 'web', 'display_name' => 'Edit Project', 'module_id' => 3],
            ['auth_id' => 1, 'name' => 'delete_projects', 'guard_name' => 'web', 'display_name' => 'Delete Project', 'module_id' => 3],
            // [
            //     'auth_id' => 1,
            //     'name' => 'add_attendance',
            //     'guard_name' => 'web',
            // ],

            // [
            //     'auth_id' => 1,
            //     'name' => 'view_attendance',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'add_tasks',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'view_tasks',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'edit_tasks',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'delete_tasks',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'add_estimates',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'view_estimates',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'edit_estimates',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'delete_estimates',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'add_tickets',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'view_tickets',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'edit_tickets',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'delete_tickets',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'add_product',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'view_product',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'edit_product',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'delete_product',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'add_expenses',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'view_expenses',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'edit_expenses',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'delete_expenses',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'add_contract',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'view_contract',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'edit_contract',
            //     'guard_name' => 'web',
            // ],
            // [
            //     'auth_id' => 1,
            //     'name' => 'delete_contract',
            //     'guard_name' => 'web',
            // ]

        ]);
        DB::table('roles')->insert([
            [
                'auth_id' => 1,
                'name' => 'Demo Role',
                'guard_name' => 'web',
            ],
            [
                'auth_id' => 1,
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
            ]
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
