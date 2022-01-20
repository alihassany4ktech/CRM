<?php

namespace App\Exports;

use App\Ticket;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TicketExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            '#',
            'Ticket Subject',
            'Requester Name',
            'Requested On',
            'Status',
            'Priority',
            'Agent'
        ];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Ticket::getTicket());
    }
}
