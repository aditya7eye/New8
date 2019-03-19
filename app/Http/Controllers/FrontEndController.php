<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicpageModel;
use App\HappyclientModel;

class FrontEndController extends Controller
{
    function home()
    {
    $homepage = DynamicpageModel::wherehome(1)->wherestatus(1)->get();
    $clients = HappyclientModel::whereis_del(0)->get();
     return view('frontend.home')->with(['homepage' => $homepage , 'clients'=> $clients]);
    }
    function whatwedo()
    {
        return view('frontend.whatwedo');
    }
    function whoweare()
    {
        return view('frontend.whoweare');
    }
    function career()
    {
        return view('frontend.career');
    }
    function contactus()
    {
        return view('frontend.contactus');
    }
}
