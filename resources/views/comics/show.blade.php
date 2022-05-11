@extends('templates.base')

@section('title', $comic['title'])

@section('mainContent')
<main>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{ $comic['thumb'] }}" class="w-100" alt="{{ $comic['title'] }}">
            </div>
            <div class="col-8">
                <h1>{{ $comic['title'] }}</h1>
                <p>{{ $comic['description'] }}</p>
                <p>$ {{ $comic['price'] }}</p>
                <a href="/comics">back to all comics</a>
            </div>
        </div>
    </div>
</main>
@endsection
