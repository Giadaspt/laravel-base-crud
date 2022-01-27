<header class="container mt-3">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" href="{{ route('home') }}">Comics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled">Disabled</a>
    </li>
  </ul>
</header>