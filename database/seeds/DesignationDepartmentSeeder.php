<?php

use App\Department;
use App\Designation;
use Illuminate\Database\Seeder;

class DesignationDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            'Marketing',
            'Sales',
            'Human Resources',
            'Public Relations',
            'Research',
            'Finance'
        ];

        $designations = [
            'Trainee',
            'Senior',
            'Junior',
            'Team Lead',
            'Project Manager'
        ];

        foreach ($departments as $department) {
            Department::create([
                'name' => $department,
            ]);
        }
        foreach ($designations as $designation) {
            Designation::create([
                'name' => $designation,
            ]);
        }
    }
}
