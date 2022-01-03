<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    public function lead_agent()
    {
        return $this->belongsTo(LeadAgent::class, 'agent_id');
    }
    public function lead_source()
    {
        return $this->belongsTo(LeadSource::class, 'source_id');
    }
    public function lead_status()
    {
        return $this->belongsTo(LeadStatus::class, 'status_id');
    }
    public function category()
    {
        return $this->belongsTo(LeadCategory::class, 'category_id');
    }

    public function followup()
    {
        return $this->hasOne(LeadFollowUp::class, 'lead_id')->orderBy('created_at', 'desc');
    }
    public function client()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }
    // get Excel 

    public static function getLead()
    {
        $records = DB::table('leads')->select(
            'id',
            'client_name',
            'client_email',
            'cell',
            'office',
            'address',
            'company_name',
            'city',
            'state',
            'country',
            'postal_code'
        )->get()->toArray();
        return $records;
    }
}
