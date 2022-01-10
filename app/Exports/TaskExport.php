<?php

namespace App\Exports;

use App\Task;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TaskExport implements FromCollection, WithHeadings
{


    public function headings(): array
    {
        return [
            '#',
            'Title',
            'Project',
            'Category',
            'Assignee',
            'Start Date',
            'Due Date',
            'Status',
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Task::getTask());
    }
}
