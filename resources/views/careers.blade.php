
<x-layout title="Lavora con noi">
  <header class="header pt-5 articleCont">
      <div class="container-fluid mt-5 ">
          <div class="row justify-content-center align-content-center h-100 ">
              <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                  <h1 class="text-center text-bg-light p-2">Lavora con noi</h1>
              </div>
          </div>
      </div>
  </header>

 

<div class="container mt-5">
    <div class="row text-center justify-content-center text-black">
        <div class="col-12 col-md-6">
            <h2>Lavora come amministratore</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cupiditate reprehenderit, numquam voluptas quo delectus placeat vero facilis illum repudiandae, eius atque, explicabo ab quaerat iure dolor quas perspiciatis tenetur?</p>
            <h2>Lavora come revisore</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cupiditate reprehenderit, numquam voluptas quo delectus placeat vero facilis illum repudiandae, eius atque, explicabo ab quaerat iure dolor quas perspiciatis tenetur?</p>
            <h2>Lavora come reddatore</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cupiditate reprehenderit, numquam voluptas quo delectus placeat vero facilis illum repudiandae, eius atque, explicabo ab quaerat iure dolor quas perspiciatis tenetur?</p>
        </div>
        <x-display-errors/>
        <form action="{{route('careers.submit')}}" method="POST" class="p-5">
            @csrf
            <div class="mb-3">
                <label for="role" class="form-label">
                    Per quale ruolo ti stai candidando?
                </label>
                <select name="role" id="role" class="form-label">
                    <option value="">scegli qui</option>
                    <option value="admin">amministratore</option>
                    <option value="revisor">revisore</option>
                    <option value="writer">redattore</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control text-center " id="email" value="{{old('email') ?? Auth::user()->email}}">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Parlaci di te</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{old('message')}}</textarea>
            </div>
            <div class="mt-2">
                <button class="btn btn-light text-dark">Invia la tua candidatura</button>
            </div>
        </form>
    </div>
</div>




</x-layout>