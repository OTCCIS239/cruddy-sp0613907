@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container">
    <a href="/merch/create" class="btn btn-sm btn-danger pull-right">Create</a>
    <h3 class="col-2">All Merchandise</h3>

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
  <?php foreach ($merches as $merch):?>
    <tr>
      <td><a href="/merch/{{$merch->id}}">{{ $merch->id }}</a></td>
      <td>{{ $merch->name }}</td>
      <td>{{ $merch->description }}</td>
      <td>{{ $merch->price }}</td>
      <td>
        <a href="/merch/{{$merch->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
      </td>
    </tr>
  <?php endforeach; ?>


  </tbody>
  </table>
</div>
@stop
