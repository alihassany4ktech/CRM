<?php



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            SuperAdminSeeder::class,
            UserSeeder::class,
            LeadStatusSeeder::class,
            DesignationDepartmentSeeder::class,
            RolePermissionSeeder::class,
            ProjectSeeder::class
        ]);
    }
}
