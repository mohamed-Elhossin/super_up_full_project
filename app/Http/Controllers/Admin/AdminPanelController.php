<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminPanelController extends Controller
{

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
    public function index()
    {
        $this->lockAuto();
        return view('adminpages.index');
    }
}
