<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketReply extends Model
{
    // use SoftDeletes;


    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id')->withoutGlobalScopes(['active']); admin
    // }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
