@extends('backendmaster.master') 
@section('title','Alliance | Page Menu') 
@section('content') 
@php $pageheader = \App\HeaderModel::get();
@endphp
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

    <h4>Header List</h4>
 
    <div class="mycard" id="pagetable">
        <table class="table table-striped">
            <thead class="thead-inverse">
                <tr>
                    <th width="2%">#</th>
                    <th width="20%">Page Name</th>
                    <th width="30%">Heading</th>
                    <th width="35%">Description</th>
                    <th width="13%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pageheader as $index =>  $object)
                <tr>
                    <form action="{{ url('admin/updateheaders') }}" method="get">
                        <input type="hidden" name="uid" value="{{ $object->id }}">
                    <td>{{ $index+1 }}</td>
                    <td><b>{{ $object->pagename->page_name }}</b></td>
                    {{-- <td> <input type="text" name="heading" class="form-control" placeholder="Heading" value=" {{ $object->heading }}"></td> --}}
                    <td><textarea name="heading" id="heading" class="form-control" cols="5" rows="5">{{ $object->heading }}</textarea></td>
                    <td><textarea name="description" id="description" class="form-control" cols="5" rows="5">{{ $object->description }}</textarea></td>
 
                    <td><button class="btn btn-primary btn-sm" type="submit">Update</button></td>
                    </form>
                </tr> 
                @endforeach
              
            </tbody>
        </table>
    </div>
</div>



@stop