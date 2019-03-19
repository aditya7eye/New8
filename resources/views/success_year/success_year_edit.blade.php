@extends('backendmaster.master')
@section('title','Alliance | Success Year')
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

    <h4>Edit Success Story</h4>

    <hr>
    <div class="mycard">
        <form action="{{ url('admin/update-success_year') }}" method="post" id="createpost" enctype="multipart/form-data">
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
                <input type="hidden" name="uid" value="{{ $data->id }}">
                <div class="col-sm-12 row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail3">Year</label>
                            @php
                                $already_selected_value = isset($data->year)?$data->year:"2019";
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
                            <input type="text" name="title" id="title" placeholder="Enter Title" value="{{ $data->title }}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea id="editor1" name="des" class="form-control"
                                  rows="5">{{ $data->description }}</textarea>
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
            <button onclick="enterthis();" class="btn btn-primary btn-sm">Update</button>
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