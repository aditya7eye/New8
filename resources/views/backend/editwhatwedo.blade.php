@extends('backendmaster.master') 
@section('title','Alliance | Slider Menu') 
@section('content')
@php
    $slider = \App\SliderModel::whereis_del(0)->get();
@endphp
<style>
    .mycard {
        background: white;
        padding: 10px 10px;
    }
    .imgtab{
        height: 100px;
        width:auto;

    }
</style>
<div class="container">
    <h4>Edit What We Do</h4>
    <hr>
    <div class="mycard">
        <form action="{{ url('admin/editwhatwedo') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Heading</label>
                <input type="text" name="heading" value="{{  $data->heading }}" placeholder="Enter Heading" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="description" placeholder="Enter Description" class="form-control" cols="5" rows="5" required>{{ $data->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Image Upload</label>
               <input type="file" class="form-control" name="image">
            </div>
            <input type="hidden" value="{{ $data->id }}" name="uid">
            <div class="form-group">
             &nbsp; <button class="btn btn-primary btn-sm">Update</button>
            </div>

        </form>
    </div>
</div>
@stop