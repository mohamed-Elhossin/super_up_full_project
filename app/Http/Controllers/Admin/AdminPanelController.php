<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Personal_form;

class AdminPanelController extends Controller
{
    public function export(){
        
    }

    public function lockAuto()
    {
        $changeStatus = DB::table("apply_status")->first();

        $numberOfRequestsForm = $changeStatus->numberOfRequests;
        $requestNumber = Personal_form::count();




        if ($changeStatus  == null) {
            $ExpireDate = Carbon::now()->format('Y-m-d H:i:s');
        } else {
            $ExpireDate = $changeStatus->workAfter;
        }


        $dataFormatNow = Carbon::now()->format('Y-m-d H:i:s');


        $date2 = Carbon::parse($ExpireDate);

        // dd($dataFormatNow > $date2    );
        if ($dataFormatNow > $date2 || $requestNumber > $numberOfRequestsForm) {
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
        // الحصول على عدد الطلبات بحالة "مراجعة"
        $reviewCount = Personal_form::where('request_status', 'المراجعه')->count();

        // الحصول على عدد الطلبات بحالة "اعتماد"
        $doneCount = Personal_form::where('request_status', 'الاعتماد')->count();
        $empty = Personal_form::where('request_status', 'لم يتم عليه شئ')->count();
        // الحصول على عدد الطلبات بحالة "موافقة"
        $approvalCount = Personal_form::where('request_status', 'الموافقه')->count();
        return view('adminpages.index', compact('reviewCount', 'doneCount', 'empty', 'approvalCount'));
    }
}
