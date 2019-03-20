@extends('backendmaster.master')
@section('title','Alliance | Client ')
@section('content')
    <style>
        .mycard {
            background: white;
            padding: 10px 10px;
        }

        .imgtab {
            height: 100px;
            width: auto;

        }

        a:-webkit-any-link {
            text-decoration: none !important;
        }
    </style>
    @php
        $msg = \App\HappyclientModel::whereis_del(0)->get();
    @endphp
    <div class="container">
        <h4>Happy Client List | <a class="btn btn-sm btn-success pull-left" href="{{url('admin/client-list')}}">Create Client</a></h4>
        <div class="mycard">
            <table class="table table-striped">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Msg</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($msg as $index =>  $item)
                    <tr>
                        <td scope="row">{{ $index+1 }}</td>
                        <td scope="row"><img style="height:150px; width:auto;"
                                             src="{{ url('client_image').'/'.$item->image }}" alt="" srcset=""></td>
                        <td scope="row">{{ $item->name }}</td>
                        <td>{{ $item->designation }}</td>
                        <td>{{ $item->message }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop