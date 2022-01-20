<?php

namespace App\Http\Controllers\Admin;

use App\Tax;
use App\User;
use App\Ticket;
use App\Country;
use App\TicketTag;
use App\TicketType;
use App\TicketGroup;
use App\TicketReply;
use App\TicketChannel;
use App\TicketTagList;
use App\ProductCategory;
use App\ProductSubCategory;
use Illuminate\Http\Request;
use App\Exports\TicketExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function tickets()
    {
        $tickets = Ticket::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $openTickets = Ticket::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('status', '=', 'Open')->get();
        $pendingTickets = Ticket::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('status', '=', 'Pending')->get();
        $resolvedTickets = Ticket::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('status', '=', 'Resolved')->get();
        $closedTickets = Ticket::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('status', '=', 'Closed')->get();
        return view('dashboard.admin.ticket.all', compact('tickets', 'openTickets', 'pendingTickets', 'resolvedTickets', 'closedTickets'));
    }

    public function create()
    {
        $ticketTypes = TicketType::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $users = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $employees = User::doesntHave('agent')->where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Employee')->get();
        $ticketChannels = TicketChannel::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $groups = TicketGroup::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $countries = Country::all();
        return view('dashboard.admin.ticket.create', compact('users', 'groups', 'employees', 'countries', 'ticketTypes', 'ticketChannels'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'subject' => 'required',
            'mobile' => 'required',
            'agent' => 'required',
            'type' => 'required',
            'channel_name' => 'required',
            'requester_name' => 'required',
            'tags' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);
        $ticket = new Ticket();
        $ticket->auth_id = Auth::guard('admin')->user()->id;
        $ticket->subject = $request->subject;
        $ticket->country_id  = $request->phone_code;
        $ticket->mobile = $request->mobile;
        $ticket->status = $request->status;
        $ticket->user_id = $request->requester_name;
        $ticket->agent_id = $request->agent;
        $ticket->type_id = $request->type;
        $ticket->priority = $request->priority;
        $ticket->channel_id = $request->channel_name;
        $ticket->save();
        //save first message
        $reply = new TicketReply();
        $reply->message = $request->description;
        $reply->ticket_id = $ticket->id;
        $reply->user_id = Auth::user()->id; //current logged in user
        $reply->save();

        // save tags
        $tags = explode(',', $request->tags);

        if ($tags) {
            TicketTag::where('ticket_id', $ticket->id)->delete();
            foreach ($tags as $tag) {
                $tag = TicketTagList::firstOrCreate([
                    'tag_name' => $tag
                ]);


                TicketTag::create([
                    'tag_id' => $tag->id,
                    'ticket_id' => $ticket->id
                ]);
            }
        }
        $notification = array(
            'messege' => 'Ticket Saved Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function update(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'mobile' => 'required',
            'agent' => 'required',
            'type' => 'required',
            'channel_name' => 'required',
            'status' => 'required',
        ]);
        $ticket = Ticket::find($request->id);
        $ticket->subject = $request->subject;
        $ticket->country_id  = $request->phone_code;
        $ticket->mobile = $request->mobile;
        $ticket->status = $request->status;
        $ticket->agent_id = $request->agent;
        $ticket->type_id = $request->type;
        $ticket->priority = $request->priority;
        $ticket->channel_id = $request->channel_name;
        $ticket->update();
        if ($request->tags != null) {
            $tags = explode(',', $request->tags);

            if ($tags) {
                TicketTag::where('ticket_id', $ticket->id)->delete();
                foreach ($tags as $tag) {
                    $tag = TicketTagList::firstOrCreate([
                        'tag_name' => $tag
                    ]);


                    TicketTag::create([
                        'tag_id' => $tag->id,
                        'ticket_id' => $ticket->id
                    ]);
                }
            }
        }
        $notification = array(
            'messege' => 'Ticket Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function view($id)
    {
        $ticket = Ticket::find($id);
        $ticketTypes = TicketType::all();
        $users = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $employees = User::doesntHave('agent')->where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Employee')->get();
        $ticketChannels = TicketChannel::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $groups = TicketGroup::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $countries = Country::all();
        return view('dashboard.admin.ticket.show', compact('ticket', 'users', 'groups', 'employees', 'countries', 'ticketTypes', 'ticketChannels'));
    }

    public function delete($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        $notification = array(
            'messege' => 'Ticket Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function exportInToExcel()
    {
        return Excel::download(new TicketExport, 'ticketList.xlsx');
    }

    public function exportInToCSV()
    {
        return Excel::download(new TicketExport, 'ticketList.csv');
    }
}
