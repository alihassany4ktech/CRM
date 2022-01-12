<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TicketGroup;
use Illuminate\Http\Request;

class TicketGroupController extends Controller
{

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $group = new TicketGroup();
            $group->group_name = $request->group_name;
            $group->save();
            return response()->json(['success' => 'Ticket Group Added Successfully!']);
        }
    }

    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $group = TicketGroup::find($request->id);
            $group->delete();
            return response()->json(['success' => 'Ticket Group Deleted Successfully!']);
        }
    }
}
