<header class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0 shadow">
    <a href="/"><img src="{{asset('DOKUMENPOPCORN/logo.png')}}" alt="logo" width="100px"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit">Logout <i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
      </div>
    </div>
  </header>
