@extends('welcome')

@section('content')
    <div class="container d-flex flex-wrap text-center">
        <div class="row row-cols-4">
            @foreach ($dccomics as $dccomic)
            <div class="col g-3">
                <div class="card p-4" style="height: 220px">
                    <div class="card-body">
                        <h5 class="card-title">Title:{{ $dccomic->title }}</h5>
                        <p class="card-text">Price: {{ $dccomic->price }}€</p>
                        {{-- <p class="card-text d-flex flex-row border-bottom-0 gap-2 "> --}}
                      <div class="card-body d-flex flex-end">
                        <a class="btn btn-success" href="{{ route('dccomics.show', $dccomic->id) }}">
                            <i class="fa-solid fa-info fa-bounce"></i> 
                        </a>

                        <a class="btn btn-primary" href="{{ route('dccomics.edit', $dccomic->id) }}">
                            <i class="fa-solid fa-gear fa-bounce"></i>
                        </a>

                        <form action="{{ route('dccomics.destroy', $dccomic->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger deletBtn" type="button">
                                <i class="fa-solid fa-trash fa-bounce"></i>
                            </button>
                        </form>
                      </div>
                        {{-- </p> --}}

                    </div>
                </div>
            </div>
            @endforeach
            <a class="btn btn-success my-5" href="{{ route('dccomics.create') }}" style="height: 50px">Aggiungi un fumetto alla pagina</a>
        </div>
    </div>

    @include('partials.delete')

    
    {{--     <a class="btn btn-warning my-5" href="{{ route('welcome') }}">Ritorna in home page</a> --}}

@endsection