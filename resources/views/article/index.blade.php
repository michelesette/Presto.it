<x-layout title="Lista Articoli">
  <header class="header pt-5 articleCont">
      <div class="container-fluid">
          <div class="row justify-content-center align-content-center h-100 ">
              <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                  <h1 class="text-center text-bg-light p-2">Lista Articoli</h1>
              </div>
          </div>
      </div>
  </header>

  {{-- Snippet per feedback positivo --}}
  <x-display-message/>

  {{-- Snippet per verificare errori --}}
 <x-display-errors/>

  <div class="container mt-5 newArt">
      <div class="row mt-5 justify-content-center my-5">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card-article
                  :article="$article"
                  />
                </div>
                @endforeach
            </div>
        </div>
      </div>
  </div>
</x-layout>