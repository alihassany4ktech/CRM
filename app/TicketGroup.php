<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketGroup extends Model
{
    public function agents()
    {
        return $this->hasMany(TicketAgentGroup::class, 'group_id');
    }

    public function enabled_agents()
    {
        return $this->agents()->where('status', '=', 'enabled');
    }
}
