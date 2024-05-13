<nav class="navbar navbar-expand-lg bg-body-secondary  shadow">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item px-3 ">
          <a class="nav-link" aria-current="page" href="{{route('homepage')}}"><i class="fa-solid fa-house"></i> Home</a>
        </li>
        <li class="nav-item px-3 ">
          <a class="nav-link" href="{{route('article.index')}}"><i class="fa-solid fa-newspaper"></i> Articoli</a>
        </li>
        @guest
        <div>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <button class="btn dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-lock"></i> Area Riservata
              </button>
              <ul class="dropdown-menu dropdown-menu-dark mt-2 text-center ">
                <li class="nav-item px-3 ">
                  <a class="nav-link" href="{{route('register')}}"> <i class="fa-solid fa-right-to-bracket"></i> Registrati</a>
                </li>
                <li class="nav-item px-3 ">
                  <a class="nav-link" href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket"></i> Accedi</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        @endguest
        @auth
        <li>
          <div>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle"></i> {{Auth::user()->name}}
                </button>
                <ul class="dropdown-menu dropdown-menu-dark mt-2 px-2 text-center ">
                  <li><a class="dropdown-item nav-link px-4 my-3" href=""><i class="fa-solid fa-user-lock"></i> Profilo</a></li>
                  
                  @if (Auth::user()->is_admin)
                  <li><a class="dropdown-item nav-link  my-3" href="{{route('dashboard')}}"><i class="fa-solid fa-user-tie"></i> Dashboard Admin</a></li>
                  @elseif(!Auth::user()->is_lessor)
                  
                  @endif
                  <li>
                    <a class="dropdown-item nav-link  my-3" href="{{route('article.create')}}"><i class="bi bi-plus-lg"></i>Articolo</a>
                  </li>
                  @if (Auth::user()->is_lessor)
                  <li>
                    <a class="dropdown-item nav-link  my-3" href="{{route('announcements.create')}}"><i class="bi bi-plus-lg"></i>Annuncio</a>
                  </li>
                  @endif
                  <li>
                    <form action="{{route('logout')}}" method="POST" class="d-flex justify-content-center ">
                      @csrf
                      <button type="submit" class="btn btn-danger text-center mb-2 ">Logout<i class="bi bi-box-arrow-right px-2"></i></button>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>