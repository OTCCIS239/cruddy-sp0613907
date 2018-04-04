<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('home')}}">
    <img src="rocket.png" width="30" height="30" alt="a rocket">
    Astro Games</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item @if(Route::is('home')) active @endif">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item @if(Route::is('games.*')) active @endif">
        <a class="nav-link" href="{{ route('games.index') }}">Games</a>
      </li>
      <li class="nav-item @if(Route::is('customers.*')) active @endif">
        <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
      </li>
      <li class="nav-item @if(Route::is('orders.*')) active @endif">
        <a class="nav-link" href="{{ route('orders.index') }}">Orders</a>
      </li>
    </ul>
  </div>
  </nav>
