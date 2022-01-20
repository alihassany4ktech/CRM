<?php

namespace App\Http\Controllers\Admin;

use App\TicketType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TicketTypeController extends Controller
{


    public function types()
    {
        $types = TicketType::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('dashboard.admin.ticket.type.all', compact('types'));
    }

    public function store(Request $request)
    {
        $type = new TicketType();
        $type->auth_id = Auth::guard('admin')->user()->id;
        $type->type = $request->tiket_type;
        $type->save();
        return response()->json(['success' => 'Ticket Type Added Successfully!']);
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            $type = TicketType::find($request->id);
            $type->type = $request->tiket_type;
            $type->update();
            return response()->json(['success' => 'Ticket Type Updated Successfully!']);
        }
    }

    public function delete(Request $request)
    {
        $type = TicketType::find($request->type_id);
        $type->delete();
        return response()->json(['success' => 'Type Deleted Successfully!']);
    }
}
