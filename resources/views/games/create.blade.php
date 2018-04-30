@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Add New Game</h3>


  <form action="/games" method="post">
    {{csrf_field() }}

    <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Game Name</label>
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

  <!-- <div class="form-group row">
  <div class="col-sm-2">Available Systems</div>
  <div class="col-sm-10">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck1">
      <label class="form-check-label" for="gridCheck1">
        Xbox One
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck2">
      <label class="form-check-label" for="gridCheck2">
        PS4
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck3">
      <label class="form-check-label" for="gridCheck3">
        Nentendo Switch
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck4">
      <label class="form-check-label" for="gridCheck4">
        PC
      </label>
    </div>
  </div>
  </div> -->


  <div class="form-group row">
  <div class="col-sm-10">
    <button class="btn btn-danger">Create</button>
  </div>
  </div>
  </form>
</div>
@stop
