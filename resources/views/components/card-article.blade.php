<div class="card my-5 shadow" data-aos="fade-up">
    <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <p class="card-text">{{ $article->subtitle }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <a class="btn mybtn1"
                href="{{ route('article.byCategory', ['category' => $article->category->id]) }}">{{ $article->category->name }}</a>
            <a href="{{ route('article.show', compact('article')) }}"><button class="btn mybtn">Dettaglio</button></a>
        </div>
    </div>
    <div class="card-footer text-muted d-flex align-items-center justify-content-center mt-2 ">
        <p>Articolo creato il {{ $article->created_at->format('d/m/Y') }}</p>
     </div>
        <div class="card-footer text-muted d-flex align-items-center justify-content-center ">
            <p>Scrittore: <a href="{{ route('article.byUser', ['user' => $article->user->id]) }}">{{ $article->user->name }}</a>
            </p>
        </div>
</div>
