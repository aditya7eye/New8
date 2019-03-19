@extends('backendmaster.master') 
@section('title','Alliance | Team List')
@section('content') @php 
$page = \App\Team::get();
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

    <h4>Team List<a class="btn btn-success pull-left" href="{{url('admin/team-create')}}">Create
            Year</a></h4>
    <div class="mycard">
    <table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Type</th>
                <th>Name</th>
                <th>Designation</th>
                <th>About</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($page as $index =>  $item)
                <tr>
                        <td scope="row">{{ $index+1 }}</td>
                        <td><b>{{ $item->type == 'senior_management'?'Senior Management':'Board Of Managers' }}</b></td>
                        <td><b>{{ $item->name }}</b></td>
                        <td><b>{{ $item->designation }}</b></td>
                        <td><b>{{ $item->about }}</b></td>
                        <td><a href="{{ url('admin/team-edit').'/'.base64_encode($item->id)}}"><button class="btn btn-success btn-sm">Edit</button></a></td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    </div>
    
</div>

@stop