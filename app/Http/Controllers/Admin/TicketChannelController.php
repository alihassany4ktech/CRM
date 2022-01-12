<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TicketChannel;
use Illuminate\Http\Request;

class TicketChannelController extends Controller
{

    public function channels()
    {
        $channels = TicketChannel::all();
        return view('dashboard.admin.ticket.channel.all', compact('channels'));
    }

    public function store(Request $request)
    {
        $channel = new TicketChannel();
        $channel->channel_name = $request->channel_name;
        $channel->save();
        return response()->json(['success' => 'Ticket Channel Added Successfully!']);
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            $channel = TicketChannel::find($request->id);
            $channel->channel_name = $request->channel_name;
            $channel->update();
            return response()->json(['success' => 'Ticket Channel Updated Successfully!']);
        }
    }

    public function delete(Request $request)
    {
        $channel = TicketChannel::find($request->id);
        $channel->delete();
        return response()->json(['success' => 'Channel Deleted Successfully!']);
    }
}
