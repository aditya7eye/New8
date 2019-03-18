@php
    $data = \App\DynamicpageModel::orderBy('id','desc')->get();
@endphp

@if(request('value')==0)
<select name="link" id="link" class="form-control">
    <option value="">Select Page</option>
    @foreach($data as $obj)
    <option value="{{ $obj->id }}">{{ $obj->title }}</option>
    @endforeach
</select>
@else
<input type="url" name="link" id="link" placeholder="Enter Link" class="form-control" required>
@endif