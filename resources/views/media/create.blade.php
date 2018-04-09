@extends('layouts.app')
@section('content')
<form>
  <div class="form-group row">
  <label for="name" class="col-sm-2 col-form-label">Media Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="name" placeholder="Name">
  </div>
  </div>
  <div class="form-group row">
  <label for="description" class="col-sm-2 col-form-label">Description</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="description" placeholder="Description">
  </div>
  </div>
  <div class="form-group row">
  <label for="file" class="col-sm-2 col-form-label">Media File</label>
  <div class="col-sm-10">
    <input type="file" class="form-control-file" id="file">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
</form>
@stop
