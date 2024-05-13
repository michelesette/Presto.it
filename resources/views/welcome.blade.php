<x-layout title="Homepage">
    <header class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 colHome d-flex justify-content-center align-content-center flex-column ">
                    @guest
                    <h1 class="text-dark align-content-center text-center">HOMEPAGE</h1>
                    <h5 class="text-dark align-content-center text-center">Dream Team</h5>
                    @endguest
                    @auth
                    <h1 class="text-dark align-content-center text-center">Ciao {{ Auth::user()->name }}!</h1>
                    <h5 class="text-dark align-content-center text-center">Welcome back :)</h5>
                    @endauth
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card-article
                
                :article="$article"
                
                />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
