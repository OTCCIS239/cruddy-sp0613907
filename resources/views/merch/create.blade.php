@extends('layouts.app')

@section('content')
<form>
  <div class="form-group row">
  <label for="name" class="col-sm-2 col-form-label">Product Name</label>
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
<label for="price" class="col-sm-2 col-form-label">Price</label>
<div class="col-sm-10">
  <input type="text" class="form-control" id="price" placeholder="$9.99">
</div>
</div>
<div class="form-group row">
<label for="photo" class="col-sm-2 col-form-label">Product Photo</label>
<div class="col-sm-10">
  <input type="file" class="form-control-file" id="photo">
</div>
</div>

<div class="form-group row">
<div class="col-sm-2">Available Sizes</div>
<div class="col-sm-10">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck1">
    <label class="form-check-label" for="gridCheck1">
      S
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck2">
    <label class="form-check-label" for="gridCheck2">
      M
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck3">
    <label class="form-check-label" for="gridCheck3">
      L
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck4">
    <label class="form-check-label" for="gridCheck4">
      XL
    </label>
  </div>
</div>
</div>
<div class="form-group row">
<div class="col-sm-10">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@stop
