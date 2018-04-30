@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Add New Item</h3>


  <form action="/merch" method="post">
    {{csrf_field() }}

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Merchandise Item</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="name" placeholder="Name">
    </div>
    </div>
  <div class="form-group row">
  <label for="description" class="col-sm-2 col-form-label">Description</label>
  <div class="col-sm-10">
    <input name="description" type="text" class="form-control" id="description" placeholder="Description">
  </div>
  </div>
  <div class="form-group row">
  <label for="price" class="col-sm-2 col-form-label">Price</label>
  <div class="col-sm-10">
    <input name="price" type="text" class="form-control" id="price" placeholder="$9.99">
  </div>
</div>


  <div class="form-group row">
  <div class="col-sm-10">
    <button class="btn btn-danger">Create</button>
  </div>
  </div>
  </form>
</div>
@stop
