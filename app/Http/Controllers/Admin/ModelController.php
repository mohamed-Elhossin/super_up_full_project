<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ModelController extends Controller
{
    public function index()
    {
        $apply_status = DB::table("apply_status")->first();

        $userId =  $apply_status->admin_id;
        if ($userId != null) {
            $user = User::where('id', '=', $userId)->first();
            $userName = $user->name;
        } else {
            $userName = null;
        }
        return view('adminpages.pages.models.control', compact('apply_status', 'userName'));
    }

    public function update($id, Request $request)
    {
        $changeStatus = DB::table("apply_status")
            ->where("id", "=", $id)
            ->update([
                'message' => $request->message,
                'status' => $request->status,
                'admin_id' => auth()->user()->id
            ]);

        return redirect()->back()->with("done", "تم تغير الحاله بنجاح");
    }
}
