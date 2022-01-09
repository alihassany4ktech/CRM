<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContractRenew extends Model
{
    protected $dates = [
        'start_date',
        'end_date'
    ];
    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }
}
