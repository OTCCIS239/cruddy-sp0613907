@extends('layouts.app')

@section('content')
<table class="table table-striped">
<thead class="thead-dark">
<tr>
  <th scope="col">#</th>
  <th scope="col">Customer Feedback</th>
</tr>
</thead>
<tbody>
<tr>
  <th scope="row">{{ $id }}</th>
  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
</tr>
</tbody>
</table>
@stop
