@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Edit Emails</h3>
  <form action="/contact/{{ $contact->id }}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}


    <div class="form-group">
    <label for="exampleFormControlTextarea1">Send Feedback</label>
    <textarea name="message" class="form-control col-md-6" id="exampleFormControlTextarea1" rows="3">{{ @$contact ?$contact->message : ''}}</textarea>
    </div>
    <button class="btn btn-danger">Save Changes</button>
    </form>
  </div>
  </form>
</div>
@stop
