<?php

namespace App\Http\Controllers;

use App\PagemenuModel;
use Illuminate\Http\Request;
use App\DynamicpageModel;

class PageController extends Controller
{

    function alldynamicpages()
    {
     return view('pagecreate.allpage');
    }

    function pageedit($id)
    {
        $id = base64_decode($id);
        $data = DynamicpageModel::find($id);
        return view('pagecreate.pageedit');
        return $data;

// return 'done';
    }

    function pagecreate()
    {
        return view('pagecreate.pagecreate');
    }

    function createpagebody()
    {
        // return $_REQUEST;
        $data = request('myimage');
        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);
        $image_name = time() . '.png';
        $path = "dynamic_page_image/" . $image_name;
        file_put_contents($path, $data);

        $data = new DynamicpageModel();
        // $data->page_id = request('page');
        $data->title = request('title');
        $data->description = request('des');
        $data->date = request('date');
        $data->status = request('status');
        $data->home = request('home');
        $data->image = $image_name;
        $data->save();

        return back()->with('message', 'Page has been Created');

        // $pic = new picmodel();
        // $pic->user_master_id = $_SESSION['user_master']['id'];
        // $pic->image = $image_name;
        // $pic->save();
    }


    ////////////////////////////////////////////////////////////////////////////////////

    public function pagemenu()
    {
       $data = DynamicpageModel::wherestatus(1)->get();
        return view('pagemenu.pagemenu')->with(['data' => $data]);
    }

    public function addpage()
    {
        // return $_REQUEST;
        // //    return str_slug($str);
        // $dynamic = \App\DynamicpageModel::find(request('name'));
        $data = new PagemenuModel();
        $data->page_name = request('name');
        $data->type = request('type');
        $data->page_id = request('type')== 0 ? request('link') : null;
        $data->link = request('type')== 0 ? str_slug(request('name')) : request('link');
        $data->save();
        return back()->with('message', 'Page has been Added');
    }

    public function updatename()
    {
        $name = request('name');
        $id = request('my');
        $data = PagemenuModel::find($id);
        $data->page_name = $name;
        $data->save();
        return 'done';
// return $name .'---'.$id;
    }

    function activatepage()
    {
        $id = request('did');
        $data = PagemenuModel::find($id);
        $data->is_active = 1;
        $data->save();
        return 'done';
    }
    function deactivatepage()
    {
        $id = request('did');
        $data = PagemenuModel::find($id);
        $data->is_active = 0;
        $data->save();
        return 'done';
    }
    function deletepage()
    {
        $id = request('did');
        $data = PagemenuModel::find($id);
        $data->is_del = 1;
        $data->save();
        return 'done';
    }

    function editmenu($id)
    {
        $id = base64_decode($id);
        $data = PagemenuModel::find($id);
        return view('pagemenu.editmenu')->with(['data' => $data]);
    }

    function pageupdate()
    {
        $data = PagemenuModel::find(request('uid'));
        $data->page_name = request('name');
        $data->type = request('type');
        $data->link = request('link') == "" ? str_slug(request('name')) : request('link');
        $data->save();
        return redirect('admin/page-menu')->with('message', 'Page has been Updated');
    }
    function pagedd()
    {
        return view('pagedd');
    }
}
