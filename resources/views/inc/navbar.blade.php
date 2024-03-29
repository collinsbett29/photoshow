<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="./">Home</a>
      </li>
      <li class="nav-item {{ Request::is('albums/create') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('album-create') }}">Create Album</a>
      </li>
    </ul>
  </div>
</nav>