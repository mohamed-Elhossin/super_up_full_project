<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = User::where("rule", "employee")->get();
        return view('adminpages.pages.employees.index', compact('employees'));
    }
    public function create()
    {
        return view('adminpages.pages.employees.add');
    }
}
