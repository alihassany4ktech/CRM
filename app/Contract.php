<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $dates = [
        'start_date',
        'end_date'
    ];
    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contract_type()
    {
        return $this->belongsTo(ContractType::class, 'contract_type_id');
    }

    public function renew_history()
    {
        return $this->hasMany(ContractRenew::class, 'contract_id');
    }
    public static function getContract()
    {
        $records = DB::table('users')
            ->join('contracts', 'users.id', '=', 'contracts.user_id')
            ->select('contracts.id', 'contracts.subject', 'users.name',  'contracts.amount', 'contracts.start_date', 'contracts.end_date')
            ->get()->toArray();
        return $records;
    }
}
