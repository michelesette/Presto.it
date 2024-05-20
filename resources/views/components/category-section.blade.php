
<div class="container">
    @foreach ($categories as $category)
        <div class="row text-center my-5">
        <div class="col-12 my-3 border py-5">
           <a class=" text-decoration-none " href="{{route('article.byCategory', ['category' => $article->category->id])}}">
            <h3 class=" text-black ">{{$category->name}}</h3>
           </a> 
           <!-- <a href="{{ route('article.index', compact('article')) }}">{{$category->name}}</a> -->
        </div>
        </div>
    @endforeach
</div>

