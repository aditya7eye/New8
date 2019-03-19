@extends('backendmaster.master') 
@section('title','Alliance | Page Create') 
@section('content') @php 
$page = \App\DynamicpageModel::get();
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

    <h4>Page List</h4>
    <div class="mycard">
    <table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Page Title</th>
                <th>Show On Home</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($page as $index =>  $item)
                <tr>
                        <td scope="row">{{ $index+1 }}</td>
                        <td><b>{{ $item->title }}</b></td>
                        <td>{{  $item->home=="1" ? 'Show' : 'Not Show' }}</td>
                        <td><a href="{{ url('admin/page-edit').'/'.base64_encode($item->id)}}"><button class="btn btn-success btn-sm">Edit</button></a></td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    </div>
    
</div>

@stop