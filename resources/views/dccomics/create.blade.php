@extends('welcome')

@section('content')
    <div class="container">
        <h1>Inserisci un nuovo fumetto DC</h1>

        <form action="{{ route('dccomics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="taste" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="taste" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
        
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <button type="submit" class="btn btn-success">Invia</button>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>
    </div>    
@endsection