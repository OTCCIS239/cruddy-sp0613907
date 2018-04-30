@extends('layouts.app')

@section('content')


<div class="container">
  <div class="container">
    <a href="/customers/create" class="btn btn-sm btn-danger pull-right">Create</a>
    <h3 class="col-2">All Customers</h3>

  </div>
  <table class="table table-striped">
  <thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">address</th>
    <th scope="col">email</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($customers as $customer):?>
    <tr>
      <td><a href="/customers/{{$customer->id}}">{{ $customer->id }}</a></td>
      <td>{{ $customer->fname }}</td>
      <td>{{ $customer->lname }}</td>
      <td>{{ $customer->line1 }} {{$customer->line2}}</td>
      <td>{{ $customer->email }}</td>
      <td>
        <a href="/customers/{{$customer->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
      </td>
    </tr>
  <?php endforeach; ?>


  </tbody>
  </table>
</div>
@stop
