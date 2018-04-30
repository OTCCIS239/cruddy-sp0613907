@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Edit Merchandise Items</h3>
  <form action="/merch/{{ $merch->id }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}


    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Item Name</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="name" value="{{ @$merch ?$merch->name : ''}}" placeholder="Name">
    </div>
    </div>
  <div class="form-group row">
  <label for="description" class="col-sm-2 col-form-label">Description</label>
  <div class="col-sm-10">
    <input name="description" type="text" class="form-control" id="description" value="{{ @$merch ?$merch->description : ''}}" placeholder="Description">
  </div>
  </div>
  <div class="form-group row">
  <label for="price" class="col-sm-2 col-form-label">Price</label>
  <div class="col-sm-10">
    <input name="price" type="text" class="form-control" id="price" value="{{ @$merch ?$merch->price : ''}}" placeholder="$9.99">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-danger">Save Changes</button>
  </div>
  </div>
  </form>
</div>
@stop
