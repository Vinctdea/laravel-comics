{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')



@section('content')
    <div class="container d-flex flex-row my-5">
        {{-- @dd($comics) --}}
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <p class="card-text">{{ $comic['description'] }}</p>
                </div>
            </div>
        @endforeach


    </div>
@endsection


@section('titlePage')
    home
@endsection
