<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketAgentGroup extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    public function group()
    {
        return $this->belongsTo(TicketGroup::class, 'group_id');
    }
}
