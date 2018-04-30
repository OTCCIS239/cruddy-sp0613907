
@extends('layouts.app')

@section('content')

<div class="container">
  <div class="container">
    <h3 class="col-2">Item {{$merch->id}}</h3>
    <form action="/merch/{{$merch->id}}" method="post">
      <input type="hidden" name="_method" value="delete"></input>
      {{csrf_field() }}
      <button class="btn btn-danger">Delete</button>
    </form>
  </div>
  <table class="table table-striped">
  <thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Description</th>
    <th scope="col">Price</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $merch->id }}</td>
      <td>{{ $merch->name }}</td>
      <td>{{ $merch->description }}</td>
      <td>{{ $merch->price }}</td>
      <td>
        <a href="/merch/{{$merch->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
      </td>
    </tr>


  </tbody>
  </table>
</div>
@stop
