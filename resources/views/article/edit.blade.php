<x-layout>


    

    <x-masthead title="Modifica articolo: {{$article->title}}"></x-masthead>
   <x-display-message/>
    


    {{--codice per mostrare errori--}}
    <x-display-errors/>



    <div class="container">
        <div class="row mt-5 justify-content-center my-5">
            <div class="div col-12 col-md-6 justify-content-center ">
                <form class=" rounded-5 shadow p-3 bg-gradient-subtle" 
                action="{{route('article.update', compact('article'))}}"
                method="POST"
                enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
 
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo del articolo</label>
                      <input name="title" value="{{$article->title}}" type="text" class="form-control" id="title" >
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
                         <input name="subtitle" type="text" value="{{$article->subtitle}}" class="form-control" id="subtitle">
                      </div>
                      <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                         <textarea name="body" class="form-control" id="body" cols="30" rows="10">{{$article->body}}</textarea>
                      </div>
                      <div class="mb-3">
                        @foreach ($categories as $category )
                        <div class="form-check">
                          <input class="form-check-input" name="categories[]" type="checkbox" value="{{$category->id}}" id="flexCheckDefault" 
                          @if($article->categories) checked @endif >
                          <label class="form-check-label" for="flexCheckDefault">
                            {{$category->name}}
                          </label>
                        </div>  
                        @endforeach
                      </div>
                      <div class="mb-3">
                        <span class="form-label">Immagine attuale</span>
                        <img src="{{Storage::url($article->img)}}" alt="{{$article->title}}" width="400" height="300" srcset="">
                      </div>
                      <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name="img" type="file" class="form-control d-flex me-3" id="img">
                      </div>
                    <button type="submit" class="btn btn-primary">Modifica articolo</button>
                  </form>
            </div>
        </div>
    </div>
    
</x-layout>