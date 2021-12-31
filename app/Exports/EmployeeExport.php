<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


class EmployeeExport implements FromCollection, WithHeadings
{


    public function headings(): array
    {
        return [
            '#',
            'Employee Id',
            'Name',
            'Email',
            'Designation',
            'Department',
            'Mobile Number',
            'Slack Username',
            'Address',
            'Joining Date',
            'Exit Date',
            'Gender',
            'Hourly Rate',
            'Skills',
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(User::getEmployee());
    }
}
