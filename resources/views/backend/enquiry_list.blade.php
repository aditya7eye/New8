@extends('backendmaster.master')
@section('title','Alliance | Enquiry List')
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
        $enquiries = \App\Enquiry::OrderBy('id','desc')->get();
    @endphp
    <div class="container">
        <h4>Enquiry List</h4>
        <div class="mycard">
            <table class="table table-striped">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Hear From</th>
                    <th>Other</th>
                    <th>Message</th>
                    <th>Resume</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($enquiries as $index =>  $item)
                    <tr>
                        <td scope="row">{{ $index+1 }}</td>
                        <td scope="row">{{ $item->fname." ".$item->lname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->contact }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->hear_about }}</td>
                        <td>{{ $item->other }}</td>
                        <td>{{ $item->message }}</td>
                        <td><a target="_blank" href="{{url('').'/resume/'.$item->resume}}">View Resume</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop