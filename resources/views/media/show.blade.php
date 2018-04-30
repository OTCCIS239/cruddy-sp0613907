
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container">
    <h3 class="col-2">Item {{$media->id}}</h3>
    <form action="/media/{{$media->id}}" method="post">
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
    <th></th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $media->id }}</td>
      <td>{{ $media->name }}</td>
      <td>{{ $media->description }}</td>
      <td>
        <a href="/media/{{$media->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
      </td>
    </tr>


  </tbody>
  </table>
</div>
@stop
