@extends('backendmaster.master') 
@section('title','Alliance | Page Menu') 
@section('content') @php $page = \App\PagemenuModel::whereis_del(0)->get();

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
    <hr>
    <div class="mycard">
        <form action="{{ url('admin/pageupdate') }}" method="get" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="uid" value="{{ $data->id }}">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Page Name</label>
                        <input type="text" name="name" value="{{ $data->page_name}}" placeholder="Enter Name" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Type</label>
                        <select name="type" id="type" onchange="changestatus();" class="form-control" required>
                    <option value="">select</option>
                    @if($data->type == 0)
                    <option value="0" selected>Internal</option>
                    <option value="1">External</option>
                    @else
                    <option value="0">Internal</option>
                    <option value="1" selected>External</option>
                    @endif

                </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">link</label>
                        <input type="text" name="link" value="{{ $data->link }}" id="link" placeholder="Enter Link" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        &nbsp; <button class="btn btn-primary btn-sm">Upload</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- <hr>
    <h4>Page List</h4> --}}
 
    {{-- <div class="mycard" id="pagetable">
        <table class="table table-striped">
            <thead class="thead-inverse">
                <tr>
                    <th width="2%">#</th>
                    <th width="20%">Name</th>
                    <th width="50%">Link</th>
                    <th width="5%">Type</th>
                    <th width="23%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($page as $index => $item)
                <tr>
                    <td scope="row">{{ $index+1 }}</td>
                    @if($item->is_active == 1)
                    <td scope="row">{{ $item->page_name }}</td>
                    <td scope="row">{{ $item->link }}</td>
                    <td scope="row">{{ $item->type=="0" ? 'Internal' : 'External' }}</td>
                    @else 
                    <td scope="row"> <strike> {{ $item->page_name }} </strike></td>
                    <td scope="row">  <strike>{{ $item->link }}  </strike></td>
                    <td scope="row">  <strike>{{ $item->type=="0" ? 'Internal' : 'External' }}  </strike></td>
                    @endif
                    @if ($item->id > 4)
                  
                          <td scope="row"><div class="btn-group" role="group" aria-label="Basic example">
                              <a href="{{ url('admin/editpage') }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                              <button type="button" onclick="deletepage({{ $item->id }});" class="btn btn-danger btn-sm">delete</button>
                              @if($item->is_active == 1)
                              <button type="button" onclick="deactivatepage({{ $item->id }});" class="btn btn-success btn-sm">De-activate</button>
                              @else
                              <button type="button" onclick="activatepage({{ $item->id }});" class="btn btn-success btn-sm">Activate</button>
                              @endif
                              </div></td>  
                              @else
                              <td scope="row">
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                    <button  type="button" class="btn btn-primary btn-sm" onclick="editmyname('{{ $item->id }}','{{ $item->page_name }}');">Edit</button>
                                  </div></td>  
                    @endif
                 
                 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(function() {
    changestatus();
});
    function changestatus()
    {
        var value = $('#type').val();
        if(value == 1)
        {
$('#link').prop('disabled',false);
        }
        else if(value == 0)
        {
$('#link').prop('disabled',true);
        }
        
    }
</script>



@stop