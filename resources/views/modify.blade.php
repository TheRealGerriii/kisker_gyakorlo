@extends("layouts.master")
@section("content")
<div class="container">
    <form action="/update" method="post">
        @csrf
        <input type="hidden" value="{{ $pet->id }}" name="pet_id">
        <p>
            <label for=""> Név: </label>
            <input class="form-control" type="text" name="pet" value="{{ $pet->pet }}">
            <br>
        </p>
        <p>
            <label for=""> Email: </label>
            <input class="form-control" type="text" name="type" value="{{ $pet->type }}">
            <br>
        </p>
        <p>
            <label for=""> Telefon: </label>
            <input class="form-control" type="text" name="price" value="{{ $pet->price }}">
        </p>
        <p>
            <button class="btn btn-outline-primary" type="submit">Frissítés</button>
        </p>
    </form>
</div>
@endsection