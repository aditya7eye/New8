<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function home()
    {
     return view('frontend.home');
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
