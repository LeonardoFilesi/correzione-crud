@extends('welcome')

@section('content')
    <h1 class="text-center">DC Comics</h1>
    <div class="container">
        <h2>{{ $dccomic->title }}</h2>
        <img class="my-3" src="{{ Vite::asset('resources/img/dc_comics.png') }}" alt="Pizza" style="width: 80px">

        <ul class="list-group">
            <li class="list-group-item">
                <p>
                    <strong>Titolo: </strong> {{ $dccomic['title'] }}
                </p>
            </li>
            <li class="list-group-item">
                <div>
                    <strong>Prezzo: </strong> {{ $dccomic['price'] }}
                </div>
            </li>
            <li class="list-group-item">
                <div>
                    <strong>Descrizione: </strong> {{ $dccomic['description'] }}
                </div>
            </li>
        </ul>
        <a href="{{ route('dccomics.index') }}" class="btn btn-primary my-3">Torna alla mainpage</a>
        <a href="{{ route('dccomics.edit', $dccomic->id) }}" class="btn btn-warning my-3 mx-1 d-inline-block">Modifica</a>
    </div>
@endsection