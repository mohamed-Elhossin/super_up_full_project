<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportOneRequest;
use App\Models\User;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Models\Personal_form;
use App\Exports\RequestExportData;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class RequestFunctionController extends Controller
{

    // All Request
    public function all()
    {
        $data = Personal_form::where('request_status', 'لم يتم عليه شئ')->get();
        return view('adminpages.request.all', compact('data'));
    }
    public function view($id)
    {
        $data = Personal_form::find($id);
        $userId =  $data->admin_id;
        if ($userId != null) {
            $user = User::where('id', '=', $userId)->first();
            $userName = $user->name;
        } else {
            $userName = null;
        }

        return view('adminpages.request.view', compact('data', 'userName'));
    }

    public function revasion()
    {
        $data = Personal_form::where('request_status', 'المراجعه')->get();
        return view('adminpages.request.revasion', compact('data'));
    }
    public function approve()
    {
        $data = Personal_form::where('request_status', 'الموافقه')->get();
        return view('adminpages.request.approve', compact('data'));
    }
    public function done()
    {
        $data = Personal_form::where('request_status', 'الاعتماد')->get();

        return view('adminpages.request.done', compact('data'));
    }


    public function changeStatus($id, Request $request)
    {
        // dd($request);
        $data = Personal_form::find($id);
        $data->request_status = $request->request_status;
        $data->admin_id  = auth()->user()->id;
        $data->change_statusDate = now();
        $data->save();

        $messageAction = "
        تم تغير حالة طلب رقم : $data->request_number
        الي : $data->request_status
        ";
        $admin_name = auth()->user()->name;
        Tracking::create([
            "action" => $messageAction,
            'admin_name' => $admin_name
        ]);
        return redirect()->back()->with("done", "تم تغير حاله الطلب بنجاح");

    }


    public function allAllRequest()
    {
        $data = Personal_form::all();
        return view('adminpages.request.allRequests', compact('data'));
    }
    public function refuse()
    {
        $data = Personal_form::where('request_status', 'رفض')->get();

        return view('adminpages.request.refuse', compact('data'));
    }

    public function export()
    {
        return Excel::download(new RequestExportData, 'data.xlsx');
    }
    public function  exportOne($id){
        return Excel::download(new ExportOneRequest($id), 'data.xlsx');

    }
}
