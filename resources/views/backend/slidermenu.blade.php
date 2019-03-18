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
    <h4>Slider Manage</h4>
    <hr>
    <div class="mycard">
        <form action="{{ url('admin/addslider') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Heading</label>
                <input type="text" name="heading" placeholder="Enter Heading" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="description" placeholder="Enter Description" class="form-control" cols="5" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="">Image Upload</label>
               <input type="file" class="form-control" name="image" required>
            </div>
            <div class="form-group">
             &nbsp; <button class="btn btn-primary btn-sm">Upload</button>
            </div>

        </form>
    </div>
    <h4>Slider List</h4>
    <hr>
    <div class="mycard">
       <table class="table table-striped">
           <thead class="thead-inverse">
               <tr>
                   <th width="5%">#</th>
                   <th width="10%">Image</th>
                   <th width="5%">Download</th>
                   <th width="75%">Description</th>
                   <th width="5%">Action</th>
               </tr>
               </thead>
               <tbody>
                   @foreach ($slider as $index =>  $item)
                   <tr>
                        <td scope="row">{{ $index+1 }}</td>
                        <td><img class="imgtab" src="{{ url('slider').'/'.$item->image }}" alt="No Image Found" srcset=""></td>
                        <td><a href="{{ url('slider').'/'.$item->image }}"><button type="button" class="btn btn-success btn-sm">{{ $item->image}}</button></a></td>
                        <td>
                           <b>{{ $item->heading}}</b> 
                            <hr>
                            {{ $item->description}}</td>
                        <td><div class="btn-group">
                                <a href="{{ url('admin/edit_slider').'/'.base64_encode($item->id) }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                <button type="button" onclick="sliderdel({{ $item->id }});" class="btn btn-danger btn-sm">Delete</button>
                            
                              </div></td>
                    </tr>
                   @endforeach
               </tbody>
       </table>
    </div>
</div>
<script>
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
    $.get('{{ url('admin/sliderdel') }}', {
                    did: id
                }, function (data) {
                  
                });
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
    location.reload();
  }
})
}
</script>
@stop