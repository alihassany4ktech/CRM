<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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

    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

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


    public static function getTicket()
    {
        $records = Ticket::join('users', 'users.id', 'tickets.user_id')
            ->select('tickets.id', 'tickets.subject', 'users.name', DB::raw("DATE_FORMAT(tickets.created_at, '%Y-%m-%d %H:%i')"), 'tickets.status', 'tickets.priority')->get()->toArray();
        return $records;
    }
}
