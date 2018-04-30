@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container">
    <div class="row">
      <div class="col">
        <h3 class="align-bottom">All Media</h3>
      </div>
      <div class="col">
        <video width="320" height="240" controls>
        <source src="rko.mp4" type="video/mp4">
      </div>
      <div class="col">
        <a href="/media/create" class="btn btn-sm btn-danger pull-right">Create</a>
      </div>
    </div>
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
  <?php foreach ($medias as $media):?>
    <tr>
      <td><a href="/media/{{$media->id}}">{{ $media->id }}</a></td>
      <td>{{ $media->name }}</td>
      <td>{{ $media->description }}</td>
      <td>
        <a href="/media/{{$media->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
      </td>
    </tr>
  <?php endforeach; ?>


  </tbody>
  </table>
</div>
@stop
