<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TicketGroup;

class TicketAgentController extends Controller
{
    public function agents()
    {
        $employees = User::where('type', '=', 'Employee')->get();
        $groups = TicketGroup::all();
        return view('dashboard.admin.ticket.agent.all', compact('employees', 'groups'));
    }
}
