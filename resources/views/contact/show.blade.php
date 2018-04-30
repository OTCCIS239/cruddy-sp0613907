@extends('layouts.app')

@section('content')
<div class="container">
  <div class="container">
    <h3 class="col-2">Email {{$contact->id}}</h3>
    <form action="/contact/{{$contact->id}}" method="post">
      <input type="hidden" name="_method" value="delete"></input>
      {{csrf_field() }}
      <button class="btn btn-danger">Delete</button>
    </form>
  </div>
  <table class="table table-striped">
  <thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Customer Feedback</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $contact->id }}</td>
      <td>{{ $contact->message }}</td>
      <td>
        <a href="/contact/{{$contact->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
      </td>
    </tr>


  </tbody>
  </table>
</div>
@stop
