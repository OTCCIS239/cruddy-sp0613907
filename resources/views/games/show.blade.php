<?php
$id =  filter_input(INPUT_GET, 'show/{game}');
?>
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
    <tr>
      <th scope="row"><?php echo $id ?></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>


    </tbody>
    </table>
@stop
