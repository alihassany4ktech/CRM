<?php

namespace App\Http\Controllers\Admin;

use App\Tax;
use App\User;
use App\ProductCategory;
use App\ProductSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TicketChannel;
use App\TicketType;

class TicketController extends Controller
{
    public function tickets()
    {
        return view('dashboard.admin.ticket.all');
    }

    public function create()
    {
        $ticketTypes = TicketType::all();
        $users = User::all();
        $employees = User::where('type', '=', 'Employee')->get();
        $ticketChannels = TicketChannel::all();
        return view('dashboard.admin.ticket.create', compact('users', 'employees', 'ticketTypes', 'ticketChannels'));
    }
}
