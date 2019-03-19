@extends('backendmaster.master')
@section('title','Alliance | Success Story')
@section('content') @php
    $page = \App\SuccessYears::get();
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

    <h4>Success Year List <a class="btn btn-success pull-left" href="{{url('admin/success-year-create')}}">Create
            Year</a></h4>
    <div class="mycard" id="pagetable">
        <table class="table table-bordered">
            <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Year</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($page as $index =>  $item)
                <tr>
                    <td scope="row">{{ $index+1 }}</td>


                    @if($item->is_active == 1)
                        <td>{{ $item->year }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{!! $item->description  !!}</td>
                    @else
                        <td><strike>{{ $item->year }}</strike></td>
                        <td><strike>{{ $item->title }}</strike></td>
                        <td><strike>{!!  $item->description  !!}</strike></td>
                    @endif
                    <td><a href="{{ url('admin/success_year-edit').'/'.base64_encode($item->id)}}">
                            <button class="btn btn-success btn-sm">Edit</button>
                        </a>
                        @if($item->is_active == 1)
                            <button type="button" onclick="deactivatepage({{ $item->id }});"
                                    class="btn btn-danger btn-sm">De-Activate
                            </button>
                        @else
                            <button type="button" onclick="activatepage({{ $item->id }});"
                                    class="btn btn-primary btn-sm">Activate
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
<script>
    function deactivatepage(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "De-Activate this Page!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, De-Activated it!'
        }).then((result) => {
            if (result.value) {
                $.get('{{ url('admin/deactivateyear') }}', {
                    did: id
                }, function (data) {
                    // console.log(data);
                    $("#pagetable").load(location.href + " #pagetable");
                });
                Swal.fire(
                        'De-Activated',
                        'Success Story has been De-Activated.',
                        'success'
                )
            }
        })
    }

    function activatepage(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Activate this Story!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Activate it!'
        }).then((result) => {
            if (result.value) {
                $.get('{{ url('admin/activateyear') }}', {
                    did: id
                }, function (data) {
                    // console.log(data);
                    $("#pagetable").load(location.href + " #pagetable");
                });
                Swal.fire(
                        'Activated!',
                        'Success Year has been Activated.',
                        'success'
                )
            }
        })
    }
</script>

@stop