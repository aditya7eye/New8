<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicpageModel;

class DynamicController extends Controller
{
    function lending_page($link ,$id)
    {
        $id = base64_decode($id);
        $data = DynamicpageModel::where(['id' => $id])->first();
        return view('frontend.dynamic')->with(['data' => $data]);
    }
    
}
