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
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
          @endguest
          @auth
          <li class="nav-item">
           <a class="nav-link" href="#">Ciao {{Auth::user()->name}}</a>
         </li>
           <li class="nav-item">
             <form          
             action="{{route('logout')}}" 
             method="POST">
             @csrf
             <button
             class="nav-link"
             type="submit">Logout</button>      
             </form>
           </li>
           @endauth
        </div>
      </div>
    </div>
  </nav>