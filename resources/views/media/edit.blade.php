@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Edit Media Items</h3>
  <form action="/media/{{ $media->id }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}


    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Item Name</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="name" value="{{ @$media ?$media->name : ''}}" placeholder="Name">
    </div>
    </div>
  <div class="form-group row">
  <label for="description" class="col-sm-2 col-form-label">Description</label>
  <div class="col-sm-10">
    <input name="description" type="text" class="form-control" id="description" value="{{ @$media ?$media->description : ''}}" placeholder="Description">
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
