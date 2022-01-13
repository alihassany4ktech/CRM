<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    // use SoftDeletes;

    public function requester()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    // public function client()
    // {
    //     return $this->belongsTo(User::class, 'user_id')->withoutGlobalScopes(['active']);
    // }

    public function reply()
    {
        return $this->hasMany(TicketReply::class, 'ticket_id');
    }

    public function tags()
    {
        return $this->hasMany(TicketTag::class, 'ticket_id');
    }
    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
