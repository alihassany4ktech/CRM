<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $dates = ['purchase_date', 'purchase_on'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function getExpense()
    {
        $records = Expense::join('users', 'users.id', 'expenses.user_id')
            ->select('expenses.id', 'expenses.type', 'expenses.item_name', 'expenses.price', 'users.name', 'expenses.purchase_from', DB::raw("DATE_FORMAT(expenses.purchase_date, '%Y-%m-%d')"))->get()->toArray();
        return $records;
    }
}
