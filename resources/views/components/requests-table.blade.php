<table class=" table table-striped table-hover border ">
  <thead>
    <tr>
       <th scope="col" >#</th>
       <th scope="col" >Nome</th>
       <th scope="col" >Email</th>
       <th scope="col" >Azioni</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($roleRequest as $user)
          <tr>
            <th scope="row" class="py-1">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              @switch($role)
              @case('amministratore')
                  <a href="{{ route('admin.setAdmin', compact('user')) }}"
                      class="btn mybtn">Attiva: {{ $role }} </a>
              @break

              @case('revisore')
                  <a href="{{ route('admin.setRevisor', compact('user')) }}"
                      class="btn mybtn">Attiva: {{ $role }} </a>
              @break

              @case('redattore')
                  <a href="{{ route('admin.setWriter', compact('user')) }}"
                      class="btn mybtn">Attiva: {{ $role }} </a>
              @break
          @endswitch
                {{-- <button type="submit" class=" btn mybtn">Attiva{{$role}}</button> --}}
            </td>
          </tr>
      @endforeach
  </tbody>
</table>