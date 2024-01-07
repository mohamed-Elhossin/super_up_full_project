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

    public function edit($id)
    {
        $employees = User::where('id', $id)
            ->first();
        // dd($employees->name);
        return view('adminpages.pages.employees.edit', compact('employees'));
    }

    public function update($id, Request  $request)
    {
        $employees = User::find($id);

        $employees->name = $request->name;
        $employees->email = $request->email;
        $employees->phone = $request->phone;
        $employees->save();
        return redirect()->route("employee.index")->with("done", "تم تعديل الموظف بنجاح");
    }

    public function delete($id)
    {
        $employees = User::find($id);
        $employees->delete();
        return redirect()->route("employee.index")->with("done", "تم الحذف الموظف بنجاح");
    }
}
