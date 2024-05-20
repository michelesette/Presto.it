
<div class="container">
    @foreach ($categories as $category)
        <div class="row text-center my-5">
        <div class="col-12 my-3 border py-5">
           <a class=" text-decoration-none " href="{{route('article.byCategory', ['category' => $category])}}">
            <h3 class="text-black">{{$category->name}}</h3>
           </a> 
        </div>
        </div>
    @endforeach
</div>

