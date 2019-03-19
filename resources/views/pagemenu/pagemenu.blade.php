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

    <h4> Create Menu</h4>
    <hr>
    <div class="mycard">
        <form action="{{ url('admin/addpage') }}" method="get" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Menu Name</label>
                        <input type="text" name="name" placeholder="Enter Menu Name" class="form-control" required>
                        {{-- <select name="name" id="name" class="form-control" required>
                            <option value="">select</option>
                           @foreach ($data as $item)
                           <option value="{{ $item->id }}">{{ $item->page_id }}</option>
                           @endforeach
                        </select> --}}
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Type</label>
                        <select name="type" id="type" onchange="changestatus();" class="form-control" required>
                    <option value="">Select</option>
                    <option value="0">Internal</option>
                    <option value="1">External</option>
                </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">link</label>
                        <div id="hereis">
                        <input type="text" name="link" id="link" placeholder="Enter Link" class="form-control" disabled>
                      </div>
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
    <hr>
    <h4>Page List</h4>
 
    <div class="mycard" id="pagetable">
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
                              <a href="{{ url('admin/edit-menu').'/'.base64_encode($item->id) }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
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
    </div>
</div>
<script>
function deletepage(id)
{
    Swal.fire({
  title: 'Are you sure?',
  text: "Deleted this Page!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Delete it!'
}).then((result) => {
  if (result.value) {
    $.get('{{ url('admin/deletepage') }}', {
        did: id
                }, function (data) {
                    // console.log(data);
                    $("#pagetable").load(location.href + " #pagetable");
                });
    Swal.fire(
      'Deleted!',
      'Your Page has been Deleted.',
      'success'
    )
  }
})
}

    function activatepage(id)
    {
        Swal.fire({
  title: 'Are you sure?',
  text: "Activate this Page!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Activate it!'
}).then((result) => {
  if (result.value) {
    $.get('{{ url('admin/activatepage') }}', {
        did: id
                }, function (data) {
                    // console.log(data);
                    $("#pagetable").load(location.href + " #pagetable");
                });
    Swal.fire(
      'Activated!',
      'Your Page has been Activated.',
      'success'
    )
  }
})
    }


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
            $.get('{{ url('admin/deactivatepage') }}', {
                did: id
            }, function (data) {
                // console.log(data);
                $("#pagetable").load(location.href + " #pagetable");
            });
            Swal.fire(
                    'De-Activated',
                    'Your Page has been De-Activated.',
                    'success'
            )
        }
    })
}

function editmyname(id , page_name)
{
   
   var my = id;
   var my_page = page_name;
    (async function getEmail () {
        //  alert(my_page);
const {value: name} = await Swal.fire({
  title: '<h6><b>Current Name is : '+my_page+'</b></h6>',
  input: 'text',
  inputPlaceholder: 'Enter New Name Here'
})

if (name) {
    $.get('{{ url('admin/updatename') }}', {
        name: name,
        my: my
                }, function (data) {
                    // console.log(data);
                    $("#pagetable").load(location.href + " #pagetable");
                });
//   Swal.fire('Entered Name: ' + name)
Swal.fire({
  position: 'top-end',
//   type: 'success',
  title: 'Page Name Has Been Updated',
  showConfirmButton: false,
  timer: 1500
})
}
})()
}

    function changestatus()
    {
        var value = $('#type').val();
        if(value == 1)
        {
          $.get('{{ url('admin/pagedd') }}', {value:value}, function (data) {
                  //  alert(data);
                   $('#hereis').html(data);
                });
        }
        else if(value == 0)
        {
$('#link').prop('disabled',true);
$.get('{{ url('admin/pagedd') }}', {value:value}, function (data) {
                  //  alert(data);
                   $('#hereis').html(data);
                });
        }
        
    }
function sliderdel(id)
{
   
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    $.get('{{ url('admin/whatwedodel') }}', {
                    did: id
                }, function (data) {
    location.reload();
               
                });
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
}

</script>



@stop