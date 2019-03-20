<?php

namespace App\Http\Controllers;

use App\HappyclientModel;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function happyclient()
    {
        return view('client.clientlist');
    }

    public function addclient()
    {
        //    return $_REQUEST;
        $data = request('myimage');
        $data1 = new HappyclientModel();
        if (request('myimage') != "") {
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = time() . '.png';
            $path = "client_image/" . $image_name;
            file_put_contents($path, $data);
            $data1->image = $image_name;
            $data1->name = request('name');
            $data1->designation = request('designation');
            $data1->message = request('msg');
            $data1->save();
            return back()->with('message', 'Client Has Been Added');
        } else {

            return back()->with('message', 'Please upload Image');
        }

    }

    public function clientlist()
    {
        return view('client.client');
    }
}
