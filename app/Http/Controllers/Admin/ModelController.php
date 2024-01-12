<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ModelController extends Controller
{
    public function index()
    {
        $apply_status = DB::table("apply_status")->first();
        if ($apply_status == null) {
            return view('adminpages.pages.models.create');
        } else {
            $userId =  $apply_status->admin_id;
            if ($userId != null) {
                $user = User::where('id', '=', $userId)->first();
                $userName = $user->name;
            } else {
                $userName = null;
            }
            return view('adminpages.pages.models.control', compact('apply_status', 'userName'));
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'message' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);
        $changeStatus = DB::table("apply_status")
            ->where("id", "=", $id)
            ->update([
                'message' => $request->message,
                'status' => $request->status,
                'workAfter' => $request->date,
                'admin_id' => auth()->user()->id,
                'numberOfRequests'=>$request->numberOfRequests
            ]);

        return redirect()->back()->with("done", "تم تغير الحاله بنجاح");
    }
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);
        $changeStatus = DB::table("apply_status")
            ->insert([
                'message' => $request->message,
                'status' => $request->status,
                'workAfter' => $request->date,
                'admin_id' => auth()->user()->id,
                'numberOfRequests'=>$request->numberOfRequests
            ]);

        return redirect()->back()->with("done", "تم تغير الحاله بنجاح");
    }


    public function lockAuto()
    {
        $changeStatus = DB::table("apply_status")->first();
        $ExpireDate = $changeStatus->workAfter;

        $dataFormatNow = Carbon::now()->format('Y-m-d H:i:s');


        $date2 = Carbon::parse($ExpireDate);

        // dd($dataFormatNow > $date2    );
        if ($dataFormatNow > $date2) {
            DB::table("apply_status")->update([
                'status' => 'مغلق'
            ]);
        } else {
            DB::table("apply_status")->update([
                'status' => 'متاح'
            ]);
        }
    }
}
