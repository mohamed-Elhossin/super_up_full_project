<?php

namespace App\Http\Controllers\userUi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class userPagesController extends Controller
{
    // Go to index page
    public function index()
    {
        $status = DB::table("apply_status")->first();
        // return 'asdfsd';
        // dd($status);
        return view("userPages.index",compact('status'));
    }
    // Got To apply personal Page
    public function applyPage()
    {
        return view("userPages.personalform");
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
