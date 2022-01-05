<?php

namespace App\Exports;

use App\Project;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProjectExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {
        return [
            '#',
            'Project Name',
            'Client Name',
            'Category',
            'Start Date',
            'Deadline',
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Project::getProject());
    }
}
