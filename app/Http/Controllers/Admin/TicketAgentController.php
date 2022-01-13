<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\TicketGroup;
use App\TicketAgentGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketAgentController extends Controller
{
    public function agents()
    {
        $employees = User::doesntHave('agent')->where('type', '=', 'Employee')->get();
        $groups = TicketGroup::all();
        $ticketAgents = TicketAgentGroup::all();
        return view('dashboard.admin.ticket.agent.all', compact('employees', 'groups', 'ticketAgents'));
    }

    public function store(Request $request)
    {
        $users = $request->user_id;
        if ($request->ajax()) {
            foreach ($users as $user) {
                $agent = new TicketAgentGroup();
                $agent->agent_id = $user;
                $agent->group_id = $request->group_id;
                $agent->save();
            }
            return response()->json(['success' => 'Ticket Agent Added Successfully!']);
        }
    }

    public function changeGroup(Request $request)
    {
        if ($request->ajax()) {
            $ticket_agent_group = TicketAgentGroup::find($request->agentGroupId);
            $ticket_agent_group->group_id = $request->groupId;
            $ticket_agent_group->update();
            return response()->json(['success' => 'Group Updated Successfully!']);
        }
    }

    public function changeStatus(Request $request)
    {
        if ($request->ajax()) {
            $ticket_agent_group = TicketAgentGroup::find($request->agentGroupId);
            $ticket_agent_group->status = $request->status;
            $ticket_agent_group->update();
            return response()->json(['success' => 'Status Updated Successfully!']);
        }
    }

    public function delete(Request $request)
    {
        $agent = TicketAgentGroup::find($request->id);
        $agent->delete();
        return response()->json(['success' => 'Agent Deleted Successfully!']);
    }
}
