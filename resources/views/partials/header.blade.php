<nav class="navbar navbar-expand-lg">
  <div class="container-fluid mx-4">
    {{-- logo brand --}}
    <a class="navbar-brand" href="/">
      <img src="{{ asset('img/logomark.min.svg') }}" alt="">
      LARAVEL Model Controller
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      {{-- page index --}}
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Page index
          </a>
          <ul class="dropdown-menu">
            <li><a href="/" class="nav-link">home</a></li>
            <li><a href="/about" class="nav-link">about</a></li>
            <li><a href="/contacts" class="nav-link">contacts</a></li>
          </ul>
        </li>
      </ul>
      {{-- search --}}
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




