@extends('backendmaster.master')
@section('title','Alliance | Success Year Create')
@section('content') @php
    $page = \App\PagemenuModel::whereis_del(0)->wheretype(0)->get();
@endphp
<link rel="stylesheet" href="{{ url('css/cropper.min.css') }}">
<link rel="stylesheet" href="{{ url('css/main.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ url('js/cropper.min.js') }}"></script>
<script src="{{ url('js/Global.js') }}"></script>
<style>
    .mycard {
        background: white;
        padding: 10px 10px;
    }

    .imgtab {
        height: 100px;
        width: auto;

    }
</style>

<div class="container">

    <h4>Create Success Year<a class="btn btn-success pull-right" href="{{url('admin/success_year')}}">Success Year
            List</a></h4>
    <hr>
    <div class="mycard">
        <form action="{{ url('admin/store_success_year') }}" method="post" id="createpost"
              enctype="multipart/form-data">
            @csrf
            <div class="row">
                {{-- <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Page</label>
                        <select name="page" id="page" class="form-control" required>
                            <option value="">Select Page</option>
                            @foreach ($page as $index => $pageobject)
                                @if($index < 4)
                                @else
                                <option value="{{ $pageobject->id }}">{{ $pageobject->page_name }}</option>
                                @endif
                            @endforeach
                        </select>
                        
                    </div>
                </div> --}}
                {{-- <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Page</label>
                        <input type="text" name="page" id="page" placeholder="Enter Page Name" class="form-control" required>
                    </div>
                </div> --}}
                <div class="col-sm-12 row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail3">Year</label>
                            @php
                                $already_selected_value = isset($year)?$year:"2019";
                                $earliest_year = 2001;
                                print '<select name="year" class="form-control">';
                                    foreach (range(date('Y'), $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x == $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';
                            @endphp
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea id="editor1" name="des" class="form-control" rows="5"></textarea>
                        {{-- <textarea name="des" id="description"  rows="8" class="form-control" maxlength="1200"></textarea> --}}
                        {{--<input type="hidden" name="des" id="description">--}}
                    </div>
                </div>
            </div>
        </form>
    </div>

    <hr>
    <div class="col-sm-4">
        <div class="form-group">
            &nbsp;
            <button onclick="enterthis();" class="btn btn-primary btn-sm">Upload</button>
        </div>
    </div>
</div>
<div id="modal_crop" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Crop and Download your image</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <main class="page">
                    <div class="box">
                        <div class="input-group">
                            {{-- <span class="input-group-btn">
                                <span class="btn btn-default btn-btn-primary">
                                    Click Here <input type="file" id="file-input"
                                                   "/>
                                </span>
                            </span> --}}
                            <input type="file" id="file-input" name="file+"
                                   onchange="ChangeSetImage(this, image_frout, file_text_frount);">
                            <input type="text" id="file_text_frount" class="form-control" readonly="">
                        </div>
                        <p class="note_forcrop">

                        </p>
                    </div>
                    <div class="box-2">
                        <div class="result">
                            {{-- <img class="cropped" id="image_frout1" src="assets/images/NoPreview_CropImg.png" alt=""> --}}
                            <img class="cropped" id="image_frout1"
                                 src="http://lagnphere.com/assets/images/NoPreview_CropImg.png" alt="">
                        </div>
                    </div>
                    <div class="box-2 img-result hide">
                        <img class="cropped" id="image_frout" src="" alt="">
                    </div>
                    <div class="box" id="cropbtn_setting">
                        <!--<div class="options hide">
                            <label> Width</label>
                            <input type="text" class="img-w" value="300" min="100" max="1200"/>
                        </div>-->
                        <button class="btn btn-info btn-sm" disabled="disabled" id="btn_RotateLeft">
                            <i class="mdi mdi-format-rotate-90 basic_icon_margin"></i>Rotate Left
                        </button>
                        <button class="btn btn-warning btn-sm center_btnmargin" disabled="disabled"
                                id="btn_RotateRight">
                            <i class="mdi mdi-rotate-right basic_icon_margin"></i>Rotate Right
                        </button>
                        <button class="btn btn-danger btn-sm" disabled="disabled" id="btn_RotateReset">
                            <i class="mdi mdi-rotate-3d basic_icon_margin"></i>Reset
                        </button>
                        <!-- <button class="btn btn-success" id="btn_getRounded">
                             <i class="mdi mdi-rotate-3d basic_icon_margin"></i>Rounded</button>-->
                    </div>
                </main>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-default download" disabled="disabled" id="btncrop_download"
                   download="croped_image.png">
                    <i class="mdi mdi-folder-download basic_icon_margin"></i>Download</a>
                <button type="button" class="btn btn-success save" id="save" disabled="disabled"><i
                            class="mdi mdi-crop basic_icon_margin"></i>Cropped
                </button>
                <button type="button" onclick="upload_profile();" class="btn btn-primary" disabled="disabled"
                        id="save_toserver" disabled="disabled"><i
                            class="mdi mdi-account-check basic_icon_margin"></i>Set
                </button>
            </div>
        </div>

    </div>
</div>
<script src="{!! asset('resources/views/plugins/jQuery/jQuery-2.2.0.min.js') !!}"></script>

<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('editor1');
        $(".textarea").wysihtml5();

    });
    function enterthis() {

//        var all = $('#cke_1_contents').parent('body').html();
//        alert(all);
//        $('#description').val(all);

        var p_name = $('#page').val();
        var title = $('#title').val();
        if (p_name == "") {
            $('#page').focus();
            return false;
        }
        else if (title == "") {
            $('#title').focus();
            return false;
        }
        else {
            document.getElementById("createpost").submit();
        }

    }
</script>
@stop