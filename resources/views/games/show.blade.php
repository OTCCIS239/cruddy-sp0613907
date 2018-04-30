
@extends('layouts.app')

@section('content')

<div class="container">
  <div class="container">
    <h3 class="col-2">Game {{$game->id}}</h3>
    <form action="/games/{{$game->id}}" method="post">
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
      <td>{{ $game->id }}</td>
      <td>{{ $game->name }}</td>
      <td>{{ $game->description }}</td>
      <td>{{ $game->price }}</td>
      <td>
        <a href="/games/{{$game->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
      </td>
    </tr>


  </tbody>
  </table>
</div>
@stop
