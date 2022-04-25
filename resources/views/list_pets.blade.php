@extends("layouts.master")
@section("content")

<div class="container">
  <div class="mt-3 col-lg-3 offset-lg-4">
    <form action="search-pet">
      <select name="type" id="" class="form-select">
        <option selected>Válasszon egy opciót</option>
        <option value="kutya">kutya</option>
        <option value="macska">macska</option>
        <option value="hal">hal</option>
      </select>
      <button class=" btn btn-outline-info mt-2" type="submit">Keresés</button>
  </div>
  </form>
  <div class="mt-2">
    <a class="btn btn-outline-danger" href="/register">Regisztráció</a>
    <a class="btn btn-outline-danger" href="/login">Bejelentkezés</a>
    <a class="btn btn-outline-danger" href="/logout">Kijelentkezés</a>
    <a class="btn btn-outline-primary" href="/new">Új felvétele</a>
    <a class="btn btn-outline-primary" href="/">Főoldal</a>
  </div>
    <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Név</th>
            <th>Típus</th>
            <th>Ár</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $pets as $pet )
             <tr>
               <td>{{ $pet->id }}</td>
               <td>{{ $pet->pet }}</td>
               <td>{{ $pet->type }}</td>
               <td>{{ $pet->price }}</td>
               <td>
                    <a class="btn btn-info" href="/update/{{ $pet->id }}">Szerkesztés</a>
                    <a class="btn btn-outline-primary" href="/delete/{{ $pet->id }}">Törlés</a>
                </td>
             </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection