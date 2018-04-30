@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container">
    <a href="/games/create" class="btn btn-sm btn-danger pull-right">Create</a>
    <h3 class="col-2">All Games</h3>

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
  <?php foreach ($games as $game):?>
    <tr>
      <td><a href="/games/{{$game->id}}">{{ $game->id }}</a></td>
      <td>{{ $game->name }}</td>
      <td>{{ $game->description }}</td>
      <td>{{ $game->price }}</td>
      <td>
        <a href="/games/{{$game->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
      </td>
    </tr>
  <?php endforeach; ?>


  </tbody>
  </table>
</div>
@stop
