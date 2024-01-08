<?php

namespace App\Http\Controllers\userUi;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\City;

class userPagesController extends Controller
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
    // Go to index page
    public function index()
    {
        $status = DB::table("apply_status")->first();
        // return 'asdfsd';
        $this->lockAuto();

        return view("userPages.index", compact('status'));
    }
    // Got To apply personal Page
    public function applyPage()
    {
        $city  = City::all();
        $area = Area::all();
        return view("userPages.personalform", compact('city', 'area'));
    }
    // Go to Seatch Page
    public function find()
    {
        return view("userPages.findRequest");
    }
    // Go to page find old Request
    public function ifFindRequest()
    {
        return view("userPages.ifFindRequest");
    }
}
