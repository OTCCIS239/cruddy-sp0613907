
@extends('layouts.app')

@section('content')

    <table class="table table-striped">
    <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Source</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <th scope="row">{{ $id }}</th>
      <td>OvS: Dawn of RKO</td>
      <td>It's been nearly two years since Superman's (Henry Cavill) colossal battle with Zod (Michael Shannon) devastated the city of Metropolis. The loss of life and collateral damage left many feeling angry and helpless, including the apex preditor Rady Orton. Convinced that Superman is now a threat to humanity, Orton embarks on a personal vendetta to end his reign on Earth, while the conniving Lex Luthor (Jesse Eisenberg) launches his own crusade against the Man of Steel.</td>
      <td>rko.mp4</td>
    </tr>


    </tbody>
    </table>
@stop
