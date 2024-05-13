


<div class="card my-5 shadow " style="width: 18rem;">
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">{{$article->title}}</h4>
      <p class="card-text">{{$article->subtitle}}</p>

      <a href="{{route('article.show', compact('article'))}}"><button  class="btn mybtn mt-3 ">Dettaglio</button></a>
    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">

      Articolo creato il {{$article->created_at->format('d/m/Y')}}  da {{$article->user->name}}

    </div>
  </div>
