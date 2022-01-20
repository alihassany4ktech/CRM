<?php

namespace App\Exports;

use App\Notice;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class NoticeExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            'Id',
            'Notice',
            'Date',
            'To'
        ];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Notice::getNotice());
    }
}
