@extends("layouts.master")
@section("content")
<div class="container">
    <form action="/store-pet" method="post">
        @csrf
        <p>
            <label for=""> Név: </label>
            <input class="form-control" type="text" name="pet">
            <br>
        </p>
        <p>
            <label for=""> Fajta: </label>
            <input class="form-control" type="text" name="type">
            <br>
        </p>
        <p>
            <label for=""> Ár: </label>
            <input class="form-control" type="text" name="price">
        </p>
        <p>
            <button class="btn btn-outline-primary" type="submit">Küldés</button>
        </p>
    </form>
</div>
@endsection