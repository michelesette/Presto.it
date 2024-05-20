<x-layout title="Homepage">
    <header class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 colHome d-flex justify-content-center align-content-center flex-column ">
                    @guest
                        <h1 class="text-dark align-content-center text-center">HOMEPAGE</h1>
                        <h5 class="text-dark align-content-center text-center">Ecco i nostri ultimi annunci!</h5>
                    @endguest
                    @auth
                        <h1 class="text-dark align-content-center text-center">Ciao {{ Auth::user()->name }}!</h1>
                        <h5 class="text-dark align-content-center text-center">Ecco i nostri ultimi annunci!</h5>
                    @endauth
                    {{-- <div>
                        <x-_locale lang="it"/>
                        <x-_locale lang="en"/>
                        <x-_locale lang="es"/>
                    </div> --}}
                </div>
            </div>
        </div>
    </header>

    <!-- sezione articoli recenti -->
    <section class=" container-fluid ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 ">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($articles as $article)
                        <div class="swiper-slide">
                            <x-card-article :article="$article" :tags="$article->tags"/>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- sezione  categorie -->
    <x-category-section/>

    <!-- staff -->
    <section>
        
    </section>

<x-lostaff></x-lostaff>
</x-layout>
