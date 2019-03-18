<?php

namespace App\Http\Controllers;

use App\HeaderModel;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function headermanage()
    {
        return view('headermanage.headermanage');
    }

    public function updateheaders()
    {
        $data = HeaderModel::find(request('uid'));
        $data->heading = request('heading');
        $data->description = request('description');
        $data->save();
        return back()->with('message', 'Header has been Updated');

    }
}
