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
        return view('pagecreate.pageedit')->with(['data'=>$data]);
        return $data;

// return 'done';
    }

    function updatepagebody()
    {
        $data = request('myimage');
        $data1 = DynamicpageModel::find(request('uid'));
        if(request('myimage')!="")
        {
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = time() . '.png';
            $path = "dynamic_page_image/" . $image_name;
            file_put_contents($path, $data);
            $data1->image = $image_name ;
    
        }
      
       
        // $data->page_id = request('page');
        $data1->title = request('title');
        $data1->description = request('des');
        $data1->date = request('date');
        $data1->status = request('status');
        $data1->home = request('home');
        
        $data1->save();

        return redirect('admin/all-dynamic-pages')->with('message', 'Page has been Updated');
    }

    function pagecreate()
    {
        return view('pagecreate.pagecreate');
    }

    function createpagebody()
    {
        // return $_REQUEST;
        $data = request('myimage');
        $data1 = new DynamicpageModel();
        if(request('myimage')!="")
        {
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);
            $image_name = time() . '.png';
            $path = "dynamic_page_image/" . $image_name;
            file_put_contents($path, $data);
            $data1->image = $image_name ;
    
        }

        // $data->page_id = request('page');
        $data1->title = request('title');
        $data1->description = request('des');
        $data1->date = request('date');
        $data1->status = request('status');
        $data1->home = request('home');
        $data1->save();

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
