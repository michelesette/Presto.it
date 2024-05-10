<x-layout>


   
    <x-masthead title="I miei articoli"></x-masthead>


    <x-display-message/>


    

    <div class="container">
        <div class="row my-5 ">
            @foreach ($articles as $article )  
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src={{Storage::url($article->img)}} class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-subtitle ">{{$article->subtitle}}</p>
                      <p class="card-text">{{$article->body}}</p>
                      {{-- @if ($article->categories>isNotEmpty()) --}}
                      <div class="mb-2">
                        {{-- @foreach ($article->categories as $category) --}}
                        {{-- <span class="badge bg-info-subtle ">#{{$categories->name}}</span> --}}
                        {{-- @endforeach --}}
                      </div>
                      {{-- @endif --}}
                      <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">Dettaglio articolo</a>
                      @auth
                      <a href="{{route('article.edit', compact('article'))}}" class="btn btn-success my-3 ">Modifica articolo</a>
                      <form 
                      action="{{route('article.destroy', compact('article'))}}"
                      method="POST">
                      @method('DELETE')
                      @csrf
                   <button class="btn btn-danger" type="submit" >Elimina articolo</button>
                    </form>  
                      @endauth
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>