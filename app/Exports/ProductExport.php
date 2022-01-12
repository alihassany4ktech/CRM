<?php

namespace App\Exports;

use App\Product;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return [
            '#',
            'Name',
            'HSN/ SAC code',
            'Orignal Price: $',
            'Price: $ (Include All Taxes)',
            'Client Can Purchase',

        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Product::getProduct());
    }
}
