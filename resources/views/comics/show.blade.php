@extends('templates.base')

@section('title', $comic['title'])

@section('mainContent')
<main>
    <div class="container">
        <div class="row p-5">
            <div class="col-2">
                <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="{{ $comic['title'] }}">
            </div>
            <div class="col-10">
                <h1>{{ $comic['title'] }}</h1>
                <p>{{ $comic['description'] }}</p>
                <p>$ {{ $comic['price'] }}</p>
                <a href="/comics">back to all comics</a>
            </div>
        </div>
    </div>
</main>
@endsection
