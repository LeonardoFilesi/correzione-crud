@extends('welcome')

@section('index')
<div class="container d-flex flex-wrap text-center">
    <div class="row row-cols-4">
        @foreach ($dccomics as $dccomic)
          <div class="col g-3">
            <div class="card p-4">
                <div class="card-body">
                    <h5 class="card-title">Title:{{ $dccomic->title }}</h5>
                    <p class="card-text">Price: {{ $dccomic->price }}€</p>

                </div>
            </div>
          </div>
        @endforeach
    </div>