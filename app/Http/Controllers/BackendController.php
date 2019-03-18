<?php

namespace App\Http\Controllers;

use App\SliderModel;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;
use App\WhatwedoModel;


class BackendController extends Controller
{

    function whatwedo()
    {
        return view('backend.whatwedo');
    }

    function addwhatwedo(Request $request)
    {
        $data = new WhatwedoModel();
       $data->heading = request('heading');
       $data->description = request('description');
     
       $uploaded_file = $request->file('image');
        if (isset($uploaded_file)) {
            $destinationPath = 'whatwedo/';
            $temp = time() . '.' . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move($destinationPath, $temp);
            $data->image = $temp;
            $data->save();
        }
        return redirect('admin/what-we-do')->with('message', 'Category has been added');
    }

    function whatwedodel()
    {
        $data = WhatwedoModel::find(request('did'));
        $data->is_del = 1 ;
        $data->save();
        return 'done';
    }

    function edit_whatwedo($id)
    {
        $id = base64_decode($id);
        $data = WhatwedoModel::find($id);
        return view('backend.editwhatwedo')->with(['data' => $data]);
    }

    function editwhatwedo(Request $request)
    {
       $data = WhatwedoModel::find(request('uid'));
       $data->heading = request('heading');
       $data->description = request('description');
     
       $uploaded_file = $request->file('image');
        if (isset($uploaded_file)) {
            $destinationPath = 'whatwedo/';
            $temp = time() . '.' . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move($destinationPath, $temp);
            $data->image = $temp;
        }
        $data->save();
        return redirect('admin/what-we-do')->with('message', 'Category has been Updated');
     
    }

   























    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function slidermenu()
    {
        return view('backend.slidermenu');
    }
    function addslider(Request $request)
    {
       $data = new SliderModel();
       $data->heading = request('heading');
       $data->description = request('description');
     
       $uploaded_file = $request->file('image');
        if (isset($uploaded_file)) {
            $destinationPath = 'slider/';
            $temp = time() . '.' . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move($destinationPath, $temp);
            $data->image = $temp;
            $data->save();
        }
        return redirect('admin/slider-menu')->with('message', 'Slider Banner has been added');
     
    }
   
    function edit_slider($id)
    {
        $id = base64_decode($id);
        $data = SliderModel::find($id);
        return view('backend.editslidermenu')->with(['data' => $data]);
    }

    function editslider(Request $request)
    {
       $data = SliderModel::find(request('uid'));
       $data->heading = request('heading');
       $data->description = request('description');
     
       $uploaded_file = $request->file('image');
        if (isset($uploaded_file)) {
            $destinationPath = 'slider/';
            $temp = time() . '.' . $uploaded_file->getClientOriginalExtension();
            $uploaded_file->move($destinationPath, $temp);
            $data->image = $temp;
        }
        $data->save();
        return redirect('admin/slider-menu')->with('message', 'Slider Banner has been Updated');
     
    }

    function sliderdel()
    {
        $data = SliderModel::find(request('did'));
        $data->is_del = 1 ;
        $data->save();
        return 'done';
       
    }
}
