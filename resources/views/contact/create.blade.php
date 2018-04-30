@extends('layouts.app')

@section('content')
<form action="/contact" method="post">
  {{csrf_field() }}

<div class="form-group">
<label for="exampleFormControlTextarea1">Send Feedback</label>
<textarea name="message" class="form-control col-md-6" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button class="btn btn-danger">Send Email</button>
</form>
@stop
