@extends('templates.base')

@section('title', 'Comics | Homepage')

@section('mainContent')
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4 p-4">
                @foreach ($comics as $comic)
                <div class="col">
                    <article class="card h-100">
                        <a href="{{ route('comics.show', $comic['id']) }}">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('comics.show', $comic['id']) }}">{{ $comic['title'] }}</a>
                            </h5>
                            <p class="card-text">{{ $comic['description'] }}</p>
                            <p class="card-text">$ {{ $comic['price'] }}</p>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
