<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <a class="navbar-brand" href="#">3wa Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('client.index') }}">Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('services') }}">Services</a>
        </li>
      </ul>

    </div>
</nav>