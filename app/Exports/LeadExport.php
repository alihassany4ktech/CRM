<?php

namespace App\Exports;

use App\Lead;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class LeadExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Email',
            'Mobile Number',
            'Office Number',
            'Address',
            'Company Name',
            'city',
            'state',
            'country',
            'postal_code',
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return Lead::all();
        return collect(Lead::getLead());
    }
}
