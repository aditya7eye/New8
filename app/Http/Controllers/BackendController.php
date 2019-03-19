<?php

namespace App\Http\Controllers;

use App\SliderModel;
use App\SuccessStory;
use App\SuccessYears;
use App\Team;
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
        $data->is_del = 1;
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
        $data->is_del = 1;
        $data->save();
        return 'done';

    }

    /****************************Who We are****************************/
    /************Success Story*******************/
    function success_story_create()
    {
        return view('success_story.success_story_create');
    }

    function store_success_story()
    {
        // return $_REQUEST;
        $data1 = new SuccessStory();
        $data1->title = request('title');
        $data1->description = request('des');
        $data1->save();
        return redirect('admin/success_story')->with('message', 'Story has been Created');
    }

    function success_stories()
    {
        return view('success_story.success_list');
    }


    function success_story_edit($id)
    {
        $id = base64_decode($id);
        $data = SuccessStory::find($id);
        return view('success_story.success_story_edit')->with(['data'=>$data]);

// return 'done';
    }

    function storyupdate()
    {
        $data1 = SuccessStory::find(request('uid'));
        $data1->title = request('title');
        $data1->description = request('des');
        $data1->save();
        return redirect('admin/success_story')->with('message', 'Success Story has been Updated');
    }

    function deactivatestory()
    {
        $id = request('did');
        $data = SuccessStory::find($id);
        $data->is_active = 0;
        $data->save();
        return 'done';
    }

    function activatestory()
    {
        $id = request('did');
        $data = SuccessStory::find($id);
        $data->is_active = 1;
        $data->save();
        return 'done';
    }
    /************Success Story*******************/
    
    /************Success Years*******************/
    function success_year_create()
    {
        return view('success_year.success_year_create');
    }

    function store_success_year()
    {
        // return $_REQUEST;
        $data1 = new SuccessYears();
        $data1->year = request('year');
        $data1->title = request('title');
        $data1->description = request('des');
        $data1->save();
        return redirect('admin/success_year')->with('message', 'Success Year has been Created');
    }

    function success_years()
    {
        return view('success_year.success_year_list');
    }


    function success_year_edit($id)
    {
        $id = base64_decode($id);
        $data = SuccessYears::find($id);
        return view('success_year.success_year_edit')->with(['data'=>$data]);

// return 'done';
    }

    function yearupdate()
    {
        $data1 = SuccessYears::find(request('uid'));
        $data1->year = request('year');
        $data1->title = request('title');
        $data1->description = request('des');
        $data1->save();
        return redirect('admin/success_year')->with('message', 'Success Year has been Updated');
    }

    function deactivateyear()
    {
        $id = request('did');
        $data = SuccessYears::find($id);
        $data->is_active = 0;
        $data->save();
        return 'done';
    }

    function activateyear()
    {
        $id = request('did');
        $data = SuccessYears::find($id);
        $data->is_active = 1;
        $data->save();
        return 'done';
    }
    /************Success Years*******************/




    /************Team*******************/
    function team()
    {
        return view('team.allteam');
    }

    function teamedit($id)
    {
        $id = base64_decode($id);
        $data = Team::find($id);
        return view('team.teamedit')->with(['data'=>$data]);

// return 'done';
    }

    function updateteam()
    {
        $data = request('myimage');
        $data1 = Team::find(request('uid'));
        if(request('myimage')!="")
        {
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = time() . '.png';
            $path = "teams/" . $image_name;
            file_put_contents($path, $data);
            $data1->image = $path ;

        }
        // $data->page_id = request('page');
        $data1->name = request('name');
        $data1->designation = request('designation');
        $data1->about = request('about');
        $data1->type = request('type');
        $data1->save();

        return redirect('admin/team')->with('message', 'Team has been Updated');
    }

    function teamcreate()
    {
        return view('team.teamcreate');
    }

    function storeteam()
    {
        // return $_REQUEST;
        $data = request('myimage');
        $data1 = new Team();
        if(request('myimage')!="")
        {
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = time() . '.png';
            $path = "teams/" . $image_name;
            file_put_contents($path, $data);
            $data1->image = $path ;

        }
        $data1->name = request('name');
        $data1->designation = request('designation');
        $data1->about = request('about');
        $data1->type = request('type');
        $data1->save();

        return redirect('admin/team')->with('message', 'Team has been Created');
    }
    /************Team*******************/


    /****************************Who We are****************************/

}
