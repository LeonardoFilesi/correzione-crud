@extends('welcome')

@section('content')
<div class="container">
    <h1>Inserisci un nuovo fumetto DC</h1>

    <form action="{{ route('dccomics.update', $dccomic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="taste" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="taste" name="taste" value="{{ $dccomic->title }}">
        </div>

        {{-- per il futuro, dedicare qui descrizione --}}

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $dccomic->price }}">
        </div>

        <button type="submit" class="btn btn-success">Invia</button>

    </form>
</div>    
@endsection