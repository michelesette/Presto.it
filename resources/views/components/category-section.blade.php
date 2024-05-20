
<div class="container">
    <h1 class="d-flex justify-content-center text-black mt-3 titoloCategory textOmbre">Le nostre categorie</h1>
    @foreach ($categories as $category)
        <div class="row text-center my-5 ">
        <div class="col-12 my-3 rounded-5  py-5 sectionCategory">
           <a class=" text-decoration-none " href="{{route('article.byCategory', ['category' => $category])}}">
            <h3 class="text-white">{{$category->name}}</h3>
           </a>
        </div>
        </div>
    @endforeach
</div>
