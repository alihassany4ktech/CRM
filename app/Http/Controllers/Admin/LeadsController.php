<?php

namespace App\Http\Controllers\Admin;

use App\Lead;
use App\User;
use App\LeadAgent;
use App\LeadSource;
use App\LeadStatus;
use App\LeadCategory;
use App\LeadFollowUp;
use App\Exports\LeadExport;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class LeadsController extends Controller
{
    public function leads()
    {
        $leads = Lead::where('auth_id', '=', Auth::guard('admin')->user()->id)->orderBy('id', 'desc')->get();
        return view('dashboard.admin.leads.all', compact('leads'));
    }

    public function createLead()
    {
        $categories = LeadCategory::all();
        $agents = LeadAgent::all();
        $users = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Customer')->get();
        $sources = LeadSource::all();
        return view('dashboard.admin.leads.create', compact('categories', 'sources', 'agents', 'users'));
    }

    // store lead

    public function storeLead(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:leads,client_email',
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $leadStatus = LeadStatus::where('default', '1')->first();
            $lead = new Lead();
            $lead->auth_id = Auth::guard('admin')->user()->id;
            $lead->company_name = $request->company_name;
            $lead->website = $request->website;
            $lead->address = $request->address;
            $lead->cell = $request->cell;
            $lead->office = $request->office;
            $lead->city = $request->city;
            $lead->state = $request->state;
            $lead->country = $request->country;
            $lead->postal_code = $request->postal_code;
            $lead->client_name = $request->salutation . " " . $request->name;
            $lead->client_email = $request->email;
            $lead->note = $request->note;
            $lead->next_follow_up = $request->next_follow_up;
            $lead->agent_id = $request->agent_id;
            $lead->status = $leadStatus->type;
            $lead->status_id = $leadStatus->id;
            $lead->source_id = $request->source;
            $lead->category_id = $request->category_id;
            $lead->value = ($request->value) ? $request->value : 0;
            $lead->save();
            return response()->json(['success' => 'Lead Save Successfully']);
        }
    }

    public function updateLead(Request $request)
    {
        if ($request->ajax()) {

            $leadStatus = LeadStatus::where('type', $request->status)->first();
            $lead =  Lead::find($request->lead_id);
            $lead->company_name = $request->company_name;
            $lead->website = $request->website;
            $lead->address = $request->address;
            $lead->cell = $request->cell;
            $lead->office = $request->office;
            $lead->city = $request->city;
            $lead->state = $request->state;
            $lead->country = $request->country;
            $lead->postal_code = $request->postal_code;
            $lead->client_name =  $request->client_name;
            $lead->client_email = $request->client_email;
            $lead->note = $request->note;
            $lead->next_follow_up = $request->next_follow_up;
            $lead->agent_id = $request->agent_id;
            $lead->status_id = $leadStatus->id;
            $lead->status = $leadStatus->type;
            $lead->source_id = $request->source;
            $lead->category_id = $request->category_id;
            $lead->value = ($request->value) ? $request->value : 0;
            $lead->save();
            return response()->json(['success' => 'Lead Update Successfully']);
        }
    }

    public function showLead($id)
    {
        $lead = Lead::find($id);
        $categories = LeadCategory::all();
        $agents = LeadAgent::all();
        $users = User::where('type', '=', 'Customer')->get();
        $sources = LeadSource::all();
        return view('dashboard.admin.leads.show', compact('lead', 'categories', 'sources', 'agents', 'users'));
    }

    // store Lead Category 

    public function storeCategory(Request $request)
    {
        if ($request->ajax()) {
            $leadCategory = new LeadCategory();
            $leadCategory->name = $request->name;
            $leadCategory->save();
            return response()->json(['success' => 'Category Save Successfully']);
        }
    }

    // store lead Source

    public function storeSource(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'type' => ['required', 'unique:lead_sources'],
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $leadSource = new LeadSource();
            $leadSource->type = $request->type;
            $leadSource->save();
            return response()->json(['success' => 'Source Save Successfully']);
        }
    }

    // deleteCategory

    public function deleteCategory(Request $request)
    {
        if ($request->ajax()) {
            $leadCategory = LeadCategory::find($request->category_id);
            $leadCategory->delete();
            return response()->json(['success' => 'Category Deleted Successfully']);
        }
    }

    public function deleteAgent(Request $request)
    {
        if ($request->ajax()) {
            $leadAgent = LeadAgent::find($request->agent_id);
            $leadAgent->delete();
            return response()->json(['success' => 'Agent Deleted Successfully']);
        }
    }

    public function storeAgent(Request $request)
    {
        if ($request->ajax()) {
            $leadAgent = new LeadAgent();
            $leadAgent->user_id = $request->user_id;
            $leadAgent->save();
            return response()->json(['success' => 'Agent Save Successfully']);
        }
    }

    // lead change Status

    public function changeStatus(Request $request)
    {
        if ($request->ajax()) {
            $lead = Lead::find($request->leadId);
            $status = LeadStatus::find($request->leadStatusId);
            $lead->status = $status->type;
            $lead->status_id = $request->leadStatusId;
            $lead->update();
            return response()->json(['success' => 'Status Change Successfully']);
        }
    }


    // delete Lead

    public function deleteLead($id)
    {
        $lead = Lead::find($id);
        $lead->delete();
        $notification = array(
            'messege' => 'Lead Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }


    // store storeFollowUp

    public function storeFollowUp(Request $request)
    {
        if ($request->ajax()) {
            $followUp = new LeadFollowUp();
            $followUp->lead_id = $request->leadId;
            $followUp->next_follow_up_date = $request->next_follow_up_date;
            $followUp->remark = $request->remark;
            $followUp->save();
            return response()->json(['success' => 'Follow Up Add Successfully!']);
        }
    }

    // download leads in excel file

    public function exportInToExcel()
    {
        return Excel::download(new LeadExport, 'leadList.xlsx');
    }

    // download leads in csv file

    public function exportInToCSV()
    {
        return Excel::download(new LeadExport, 'leadList.csv');
    }

    // kanbanBoard

    public function kanbanBoard()
    {
        $pendingLeads = Lead::where('status', '=', 'pending')->get();
        $inprocessLeads = Lead::where('status', '=', 'inprocess')->get();
        $convertedLeads = Lead::where('status', '=', 'converted')->get();

        return view('dashboard.admin.leads.kanbanBoard', compact('pendingLeads', 'inprocessLeads', 'convertedLeads'));
    }


    // change lead to client 

    public function changeLeadToClient($id)
    {
        $lead = Lead::find($id);
        $roles = Role::orderBy('id', 'desc')->get();
        $permissions = Permission::all();
        return view('dashboard.admin.leads.leadToClient', compact('lead', 'roles', 'permissions'));
    }
}
