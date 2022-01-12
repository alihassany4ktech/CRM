<?php

namespace App\Http\Controllers\Admin;

use App\TicketType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketTypeController extends Controller
{


    public function types()
    {
        $types = TicketType::all();
        return view('dashboard.admin.ticket.type.all', compact('types'));
    }

    public function store(Request $request)
    {
        $type = new TicketType();
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
