@extends('layouts.app')

@section('content')
<table class="table table-striped">
<thead class="thead-dark">
<tr>
  <th scope="col">#</th>
  <th scope="col">First Name</th>
  <th scope="col">Last Name</th>
  <th scope="col">address</th>
  <th scope="col">email</th>
  <th scope="col">Phone</th>
</tr>
</thead>
<tbody>
<tr>
  <th scope="row">{{ $id }}</th>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>


</tbody>
</table>
@stop
