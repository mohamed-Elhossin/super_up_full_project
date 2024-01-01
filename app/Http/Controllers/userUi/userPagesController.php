<?php

namespace App\Http\Controllers\userUi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userPagesController extends Controller
{
    // Go to index page
    public function index()
    {
        return view("userPages.index");
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
