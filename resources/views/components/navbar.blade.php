<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ url('/') }}">OCCU Exercise</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{ setActive('/') }}">
        <a class="nav-link" href="{{ url('/') }}">Status Values <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ setActive('index') }}">
        <a class="nav-link" href="{{ url('/index') }}">CRUD Stack Page</a>
      </li>
    </ul>
  </div>
</nav>
