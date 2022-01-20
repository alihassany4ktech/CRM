<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Expense;
use App\Product;
use App\Project;
use App\Currency;
use App\ExpensesCategory;
use App\Exports\ExpenseExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function expenses()
    {
        $expenses = Expense::where('created_by', '=', Auth::guard('admin')->user()->id)->get();
        return view('dashboard.admin.finance.expense.all', compact('expenses'));
    }


    public function create()
    {
        $currencies = Currency::all();
        $expensesCategories = ExpensesCategory::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $projects = Project::where('auth_id', '=', Auth::guard('admin')->user()->id)->get();
        $members = User::where('auth_id', '=', Auth::guard('admin')->user()->id)->where('type', '=', 'Employee')->get();
        return view('dashboard.admin.finance.expense.create', compact('projects', 'members', 'currencies', 'expensesCategories'));
    }

    public function fetchMember(Request $request)
    {
        $projects = Project::join('project_members', 'project_members.project_id', '=', 'projects.id')
            ->where('project_members.user_id', $request->id)->select('projects.id', 'projects.project_name')->get();
        return response()->json($projects);
    }

    public function store(Request $request)
    {


        if ($request->expense_or_bill == 'add_expense') {
            $request->validate([
                'itam_name' => 'required',
                'price' => 'required',
                'member' => 'required',
                'project' => 'required',
                'purchase_from' => 'required',
                'pruchase_date' => 'required',
                'expense_category' => 'required',
            ]);
            $expense = new Expense();
            $expense->created_by          = Auth::guard('admin')->user()->id;
            $expense->item_name           = $request->itam_name;
            $expense->purchase_date       = $request->pruchase_date;
            $expense->purchase_from       = $request->purchase_from;
            $expense->price               = round($request->price, 2);
            $expense->currency_id         = $request->currency;
            $expense->category_id         = $request->expense_category;
            $expense->user_id             = $request->member;
            $expense->type = 'expense';
            // $expense->status              = $request->status;

            if ($request->project > 0) {
                $expense->project_id = $request->project;
            }
        } else {
            $request->validate([
                'itam_name' => 'required',
                'price' => 'required',
                'member' => 'required'

            ]);
            $expense = new Expense();
            $expense->created_by          = Auth::guard('admin')->user()->id;
            $expense->item_name           = $request->itam_name;
            $expense->price               = round($request->price, 2);
            $expense->currency_id         = $request->currency;
            $expense->user_id             = $request->member;
            $expense->type = 'bill';
            // $expense->status              = $request->status;
        }

        if ($request->hasFile('file')) {
            $bill = $request->file('file');
            $name = time() . 'bill' . '.' . $bill->getClientOriginalExtension();
            $destinationPath = 'bill/';
            $bill->move($destinationPath, $name);
            $expense->bill = 'bill/' . $name;
        }

        $expense->status = 'Approved';
        $expense->save();
        $notification = array(
            'messege' => 'Expense Saved Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function changeStatus(Request $request)
    {
        if ($request->ajax()) {
            $expense = Expense::find($request->id);
            $expense->status = $request->status;
            $expense->update();
            return response()->json(['success' => 'Status Changed Successfully!']);
        }
    }

    public function delete($id)
    {
        $expense = Expense::find($id);
        $expense->delete();
        $notification = array(
            'messege' => 'Expense Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    public function exportInToExcel()
    {
        return Excel::download(new ExpenseExport, 'expenseList.xlsx');
    }

    public function exportInToCSV()
    {
        return Excel::download(new ExpenseExport, 'expenseList.csv');
    }
}
