<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function employee()
    {
        return $this->belongsTo(User::class);
    }
    public static function getNotice()
    {
        $records = DB::table('notices')->select(
            [
                'id',
                'heading',
                DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"),
                'to'
            ]
        )->get()->toArray();
        return $records;
    }
}
