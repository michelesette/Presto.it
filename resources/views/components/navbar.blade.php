<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dream Team</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          @guest
        </li>
        <a class="nav-link" href="{{route('login')}}">Accedi</a>
        <li>
          </li>
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
          <li>
          @endguest
          @auth
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
             
              <li>
                <a class="nav-item nav-link" href="{{route('article.create')}}">inserisci articolo</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item">
                <form action="{{route('logout')}}"  method="POST">
                @csrf
              <button class="nav-link dropdown-item "type="submit">Logout</button>      
                </form>
              </li>
            </ul>
          </li>    
          @endauth
        </div>
      </div>
    </div>
  </nav>