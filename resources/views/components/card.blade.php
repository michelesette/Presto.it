<div class="card" style="width: 18rem;">
    <img src="@if($product->img) {{Storage::url($product->img)}} @else {{Storage::url('public/img/no-image_1.jpg')}}@endif"class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p class="card-text">Creato dall'utente{{$product->user->name}}</p>
      <p class="card-text">{{$product->price}}€</p>
      <a href="#" class="btn btn-primary">Visualizza dettaglio</a>
    </div>
  </div>