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

    <h4>Page Menu</h4>
    <div class="mycard">
    <table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($page as $index =>  $item)
                <tr>
                        <td scope="row">{{ $index+1 }}</td>
                        <td>{{ $item->page_id }}</td>
                        <td><a href="{{ url('admin/page-create') }}"><button class="btn btn-success btn-sm">Edit</button></a></td>
                    </tr>
                @endforeach
          
              
            </tbody>
    </table>
    </div>
    
</div>

@stop