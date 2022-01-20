<?php

namespace App\Http\Controllers\User\Employee;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EmployeeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.user.employee.home');
    }
}
