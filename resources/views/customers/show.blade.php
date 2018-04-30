@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container">
    <h3 class="col-2">Customer {{$customer->id}}</h3>
    <form action="/customers/{{$customer->id}}" method="post">
      <input type="hidden" name="_method" value="delete"></input>
      {{csrf_field() }}
      <button class="btn btn-danger">Delete</button>
    </form>
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
  <tr>
    <th>{{ $customer->id }}</th>
    <td>{{ $customer->fname }}</td>
    <td>{{ $customer->lname }}</td>
    <td>{{ $customer->line1 }}{{ $customer->line2 }} {{ $customer->city }},{{ $customer->state }}. {{ $customer->zip }}</td>
    <td>{{ $customer->email }}</td>
    <td>
      <a href="/customers/{{$customer->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
    </td>
  </tr>


  </tbody>
  </table>
</div>

@stop
