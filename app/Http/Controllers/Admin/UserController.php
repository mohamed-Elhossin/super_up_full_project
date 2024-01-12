<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('adminpages.auth.listUsers', compact('users'));
    }
    public function managers()
    {
        $users =  User::where("rule", "manager")->get();
        return view('adminpages.auth.listUsers', compact('users'));
    }
    public function viewers()
    {
        $users = User::where("rule", "viewer")->get();
        return view('adminpages.auth.listUsers', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::where('id', $id)
            ->first();

        return view('adminpages.auth.edit', compact('user'));
    }

    public function update($id, Request  $request)
    {
        $request->validate([
            'name' => "required|string",
            "email" => "required|email|unique:users,email,$id",
            "phone" => "required|unique:users,phone,$id"
        ]);
        $users = User::find($id);

        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->save();
        return redirect()->route("users.listAll")->with("done", "تم تعديل العضو بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
