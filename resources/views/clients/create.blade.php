@extends('clients.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Client Page</div>
  <div class="card-body">
      
      <form action="{{ url('client') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Member</label></br>
        <input type="text" name="member" id="member" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop