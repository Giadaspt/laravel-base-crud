<header class="container mt-3">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" href="{{ route('home') }}">Home Comics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'comics.index') ? 'active' : '' }}" href="{{ route('comics.index') }}">Fumetti</a>
    </li>

  </ul>
</header>