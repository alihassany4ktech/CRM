<?php

namespace App\Exports;

use App\Contract;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ContractExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return [
            '#',
            'Subject',
            'Client',
            'Amount',
            'Start Date',
            'End Date',
            'Signature'
        ];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Contract::getContract());
    }
}
