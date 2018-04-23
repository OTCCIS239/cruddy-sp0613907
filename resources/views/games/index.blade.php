@extends('layouts.app')

@section('content')
<table class="table table-striped">
<thead class="thead-dark">
<tr>
  <th scope="col">#</th>
  <th scope="col">Name</th>
  <th scope="col">Description</th>
  <th scope="col">Price</th>
  <th scope="col">Cover Photo</th>
  <th scope="col">Systems</th>
</tr>
</thead>
<tbody>
<?php foreach ($games as $game):
  $systems = ""?>
  <tr>
    <td>{{ $game->id }}</td>
    <td>{{ $game->name }}</td>
    <td>{{ $game->description }}</td>
    <td>{{ $game->price }}</td>
    <td>{{ $game->cover_photo }}</td>
    <td>{{ $systems }}</td>
  </tr>
<?php endforeach; ?>


</tbody>
</table>
@stop
