@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Send us your feedback.</h1>
    <p class="lead">We love to hear from you! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <a class="btn btn-danger" href="/contact/create" role="button">Send an Email</a>
  </div>
</div>
<div class="container-fluid">
  <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-danger" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          All Emails
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Customer Feedback</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($contact as $aContact):?>
          <tr>
            <td><a class="text-danger" href="/contact/{{$aContact->id}}">{{ $aContact->id }}</a></td>
            <td>{{ $aContact->message }}</td>
            <td>
              <a href="/contact/{{$aContact->id}}/edit" class="btn btn-sm btn-danger">Edit</a>
            </td>
          </tr>
        <?php endforeach; ?>


        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@stop
