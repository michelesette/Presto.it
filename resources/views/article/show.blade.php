<x-layout title="Articolo - {{ $article->title }}">
    <header class="header pt-5 articleCont">
        <div class="container-fluid mt-5 p-5 rounded-3">
            <div class="row justify-content-center align-content-center h-100">
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

    <div class="container mt-5 newArt">
        <div class="row mt-5 justify-content-center my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class=" container card my-5 py-5" style="max-width: 540px;">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-4">
                                    <img src="{{ Storage::url($article->img) }}" class="img-fluid rounded-start"
                                    alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $article->title }}</h5>
                                        <h5 class="card-title p-2">{{ $article->subtitle }}</h5>
                                        <p class="card-text">{{ $article->body }}</p>
                                        @if ($article->category)
                                        <div>
                                            <span
                                            class="badge text-bg-primary">#{{ $article->category->name }}</span>
                                        </div>
                                        @endif

                                        @auth
                                        <a href="{{ route('article.edit', compact('article')) }}"
                                        class="btn mybtn mt-3 ">Modifica</a>
                                        <form action="{{ route('article.destroy', compact('article')) }}"
                                        method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger  mt-3 ">Elimina</button>
                                    </form>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



</x-layout>
