<?php

namespace App\Http\Controllers;

use App\Enquiry;
use Illuminate\Http\Request;
use App\DynamicpageModel;
use App\HappyclientModel;

class FrontEndController extends Controller
{
    function home()
    {
        $homepage = DynamicpageModel::wherehome(1)->wherestatus(1)->get();
        return view('frontend.home')->with(['homepage' => $homepage]);
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

    function store_enq(Request $request)
    {
        $data = new Enquiry();
        $data->fname = request('fname');
        $data->lname = request('lname');
        $data->email = request('email');
        $data->contact = request('contact');
        $data->city = request('city');
        $data->state = request('state');
        $data->hear_about = request('hear_about');
        $data->other = request('other');
        $data->message = request('message');
        $uploaded_file = $request->file('resume');
        if (isset($uploaded_file)) {
            $destinationPath = 'resume/';
            $temp = time() . '.' . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move($destinationPath, $temp);
            $data->resume = $temp;
            $data->save();
        }
        return redirect('contact-us')->with('message', 'Enquiry has been registered with us we will get back to you soon');
    }
}
