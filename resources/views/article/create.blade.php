<x-layout>

<x-masthead/>
    <x-display-errors/>
    <x-display-message/> 

    <div class="container py-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-6">
                <form class=" bg-secondary-subtle p-4 rounded-3" enctype="multipart/form-data" method="POST" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo Articolo:</label>
                      <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input type="text" name="subtitle" value="{{old('subtitle')}}" class="form-control" id="subtitle">
                      </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Descrizione articolo</label>
                        <textarea class="form-control" value="{{old('body')}}" name="body" id="body" rows="5"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="img" class="form-label">Inserisci un'immagine</label>
                        <input class="form-control"  name="img" type="file" id="img">
                      </div>
                    <button type="submit" class="btn btn-primary">Carica articolo</button>
                  </form>
            </div>
        </div>
      </div>

</x-layout>