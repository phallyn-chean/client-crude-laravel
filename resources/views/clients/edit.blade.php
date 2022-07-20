@extends('clients.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Client Page</div>
  <div class="card-body">
      
      <form action="{{ url('client/' .$clients->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$clients->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$clients->name}}" class="form-control"></br>
        <label>Member</label></br>
        <input type="text" name="member" id="member" value="{{$clients->member}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$clients->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop