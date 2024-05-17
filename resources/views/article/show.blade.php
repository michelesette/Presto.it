<x-layout title="Articolo - {{ $article->title }}">
    <header class="header pt-1 articleCont">
        <div class="container-fluid mt-5 py-5 px-lg-5 mb-lg-5 rounded-3">
            <div class="row justify-content-center align-content-center">
                <div class="col-12 text-bg-light  d-flex justify-content-center align-items-center">
                    <h1 class="text-center">{{ $article->title }}</h1>
                </div>
            </div>
        </div>
    </header>

    {{-- Snippet per feedback positivo --}}
    <x-display-message />

    {{-- Snippet per verificare errori --}}
    <x-display-errors />

    <div class="container my-lg-5 pt-lg-5 pb-5 ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class=" justify-content-center fotoShow ">
                    <img src="{{ Storage::url($article->img) }}" class="img-fluid rounded-3 mt-lg-5" alt="...">
                    <div class="justify-content-center text-black mt-4 text-center">
                        <h3 class="card-title">{{ $article->title }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 order-md-last text-black text-center mt-4">
                <h5 class="card-title p-2">{{ $article->subtitle }}</h5>
                <p class="card-text">{{ $article->body }}</p>
                @if ($article->category)
                    <div>
                        <span class="badge text-bg-primary">{{ $article->category->name }}</span>
                    </div>
                    
                @endif
                <div class=" d-flex justify-content-center">
                    @auth
                    <a href="{{ route('article.edit', compact('article')) }}" class="btn mybtn mt-3 ">Modifica</a>
                    <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="mx-3">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger  mt-3 ">Elimina</button>
                    </form>
                    @endauth
                </div>

                @if (Auth::user() && Auth::user()->is_revisor)
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex mt-3 justify-content-center">
                            <form action="{{route('revisor.acceptArticle',$article)}}" method="POST">
                            @csrf    
                            <button type="submit" class="btn mybtn mx-5 ">Accetta articolo</button>
                            </form>
        
                            <form action="{{route('revisor.rejectArticle', $article)}}" method="POST">
                            @csrf    
                            <button type="submit" class="btn mybtn mx-5 ">Rifiuta articolo</button>
                            </form>
                        @endif
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</x-layout>
