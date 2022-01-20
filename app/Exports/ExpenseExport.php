<?php

namespace App\Exports;

use App\Expense;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExpenseExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        return [
            '#',
            'Type',
            'Item Name',
            'Price ($)',
            'Employees',
            'Purchased From',
            'Purchase Date'

        ];
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Expense::getExpense());
    }
}
