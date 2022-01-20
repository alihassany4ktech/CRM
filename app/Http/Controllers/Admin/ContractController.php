<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Contract;
use Carbon\Carbon;
use App\ContractType;
use App\ContractRenew;
use Illuminate\Http\Request;
use App\Exports\ContractExport;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ContractController extends Controller
{
    public function allContracts()
    {
        $contracts = Contract::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $expiredCounts = Contract::where(DB::raw('DATE(`end_date`)'), '<', Carbon::now()->format('Y-m-d'))->count();
        $aboutToExpireCounts = Contract::where(DB::raw('DATE(`end_date`)'), '>', Carbon::now()->format('Y-m-d'))
            ->where(DB::raw('DATE(`end_date`)'), '<', Carbon::now()->addDays(7)->format('Y-m-d'))
            ->count();
        return view('dashboard.admin.contract.all', compact('contracts', 'expiredCounts', 'aboutToExpireCounts'));
    }

    public function create()
    {
        $clients = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Customer')->get();
        $contractTypes = ContractType::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('dashboard.admin.contract.create', compact('clients', 'contractTypes'));
    }

    public function contractStore(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'subject' => 'required',
            'contract_type' => 'required',
            'start_date' => 'required',
            'amount' => 'required',
            'contract_name' => 'required',
            'alternate_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'cell' => 'required',
            'office_number' => 'required',
            'summary' => 'required',
            'note' => 'required',
        ]);
        $contract = new Contract();
        $contract->auth_id = Auth::guard('admin')->user()->id;
        $contract->user_id = $request->client;
        $contract->subject = $request->subject;
        $contract->contract_type_id = $request->contract_type;

        $contract->start_date = $request->start_date;
        $contract->orignal_start_date = $request->start_date;

        $contract->end_date = $request->end_date;
        $contract->orignal_end_date = $request->end_date;

        $contract->amount = $request->amount;
        $contract->original_amount = $request->amount;

        $contract->contract_name = $request->contract_name;
        $contract->alternate_address = $request->alternate_address;
        $contract->city = $request->city;
        $contract->state = $request->state;
        $contract->country = $request->country;
        $contract->postal_code = $request->postal_code;
        $contract->cell = $request->cell;
        $contract->office_number = $request->office_number;
        $contract->summary = $request->summary;
        $contract->note = $request->note;

        if ($request->hasFile('company_logo')) {
            $logo = $request->file('company_logo');
            $name = time() . 'logo' . '.' . $logo->getClientOriginalExtension();
            $destinationPath = 'company_logo/';
            $logo->move($destinationPath, $name);
            $contract->company_logo = 'company_logo/' . $name;
        }
        $contract->save();
        $notification = array(
            'messege' => 'Contract Save Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function contractDelete($id)
    {
        $contract = Contract::find($id);
        $contract->delete();
        $notification = array(
            'messege' => 'Contract Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function contractEdit($id)
    {
        $contract = Contract::find($id);
        $clients = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Customer')->get();
        $contractTypes = ContractType::all();
        return view('dashboard.admin.contract.edit', compact('contract', 'clients', 'contractTypes'));
    }

    public function contractUpdate(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'subject' => 'required',
            'contract_type' => 'required',
            'start_date' => 'required',
            'amount' => 'required',
            'contract_name' => 'required',
            'alternate_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'cell' => 'required',
            'office_number' => 'required',
            'summary' => 'required',
            'note' => 'required',
        ]);
        $contract = Contract::find($request->contract_id);
        $contract->user_id = $request->client;
        $contract->subject = $request->subject;
        $contract->contract_type_id = $request->contract_type;

        $contract->start_date = $request->start_date;
        $contract->orignal_start_date = $request->start_date;

        $contract->end_date = $request->end_date;
        $contract->orignal_end_date = $request->end_date;

        $contract->amount = $request->amount;
        $contract->original_amount = $request->amount;

        $contract->contract_name = $request->contract_name;
        $contract->alternate_address = $request->alternate_address;
        $contract->city = $request->city;
        $contract->state = $request->state;
        $contract->country = $request->country;
        $contract->postal_code = $request->postal_code;
        $contract->cell = $request->cell;
        $contract->office_number = $request->office_number;
        $contract->summary = $request->summary;
        $contract->note = $request->note;
        if ($request->hasFile('company_logo')) {
            if (!empty($contract->company_logo)) {
                $logo_path = $contract->company_logo;
                unlink($logo_path);
            }
            $logo = $request->file('company_logo');
            $name = time() . 'logo' . '.' . $logo->getClientOriginalExtension();
            $destinationPath = 'company_logo/';
            $logo->move($destinationPath, $name);
            $contract->company_logo = 'company_logo/' . $name;
        }
        $contract->update();
        $notification = array(
            'messege' => 'Contract Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function contractShow($id)
    {
        $contract = Contract::find($id);
        return view('dashboard.admin.contract.show', compact('contract'));
    }

    public function contractRenew(Request $request)
    {
        if ($request->ajax()) {
            $contractRenew = new ContractRenew();
            $contractRenew->contract_id = $request->contract_id;
            $contractRenew->start_date = $request->start_date;
            $contractRenew->end_date = $request->end_date;
            $contractRenew->amount = $request->amount;
            $contractRenew->save();
            $contract = Contract::find($request->contract_id);
            $contract->start_date = $contractRenew->start_date;
            $contract->end_date = $contractRenew->end_date;
            $contract->amount = $contractRenew->amount;
            $contract->update();
            return response()->json(['success' => 'Successfully Renewed']);
        }
    }

    public function deleteRenewContract(Request $request)
    {
        $contractRenew = ContractRenew::find($request->renew_contract_id);
        $contractRenew->delete();
        return response()->json(['success' => 'Deleted Successfully!']);
    }

    public function typeStore(Request $request)
    {
        if ($request->ajax()) {
            $type = new ContractType();
            $type->auth_id = Auth::guard('admin')->user()->id;
            $type->name = $request->name;
            $type->save();
            return response()->json(['success' => 'Type Save Succseefully!']);
        }
    }

    public function deleteType(Request $request)
    {
        if ($request->ajax()) {
            $type = ContractType::find($request->type_id);
            $type->delete();
            return response()->json(['success' => 'Type Deleted Successfully!']);
        }
    }

    public function contractDownload($id)
    {
        $contract = Contract::find($id);
        $pdf = app('dompdf.wrapper');

        $pdf->getDomPDF()->set_option("enable_php", true);
        // // App::setLocale($this->invoiceSetting->locale);
        // // Carbon::setLocale($this->invoiceSetting->locale);
        $pdf->loadView('dashboard.admin.contract.contract-pdf', compact('contract'));

        $dom_pdf = $pdf->getDomPDF();
        $canvas = $dom_pdf->get_canvas();
        $canvas->page_text(530, 820, "Page {PAGE_NUM} of {PAGE_COUNT}", null, 10, array(0, 0, 0));
        $filename = 'contract-' . $contract->id;

        return $pdf->download($filename . '.pdf');
    }

    public function exportInToExcel()
    {
        return Excel::download(new ContractExport, 'contractList.xlsx');
    }

    public function exportInToCSV()
    {
        return Excel::download(new ContractExport, 'contractList.csv');
    }
}
