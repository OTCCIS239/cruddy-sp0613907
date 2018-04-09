<?php
$id =  filter_input(INPUT_GET, 'show/{game}');
?>
@extends('layouts.app')

@section('content')

    <h1><?php echo $id ?></h1>
@stop
