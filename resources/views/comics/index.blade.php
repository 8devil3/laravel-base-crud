@extends('templates.base')

@section('title', 'Comics | All')

@section('mainContent')
    <main>
        <div class="container">
            <div>
                @foreach ($comics as $comic)
                <div class="col">
                    <article class="card mb-3 w-100">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <a href="{{ route('comics.show', $comic['id']) }}">
                                    <img src="{{ $comic['thumb'] }}" class="img-fluid rounded-start" alt="{{ $comic['title'] }}">
                                </a>
                            </div>
                            <div class="col-md-10">
                                <div class="card-body h-100 d-flex flex-column">
                                    <div>
                                        <h5 class="card-title">
                                            <a href="{{ route('comics.show', $comic['id']) }}">{{ $comic['title'] }}</a>
                                        </h5>
                                        <p class="card-text">{{ $comic['description'] }}</p>
                                    </div>
                                    <span class="mt-auto d-block"><strong>$ {{ $comic['price'] }}</strong></span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            {{ $comics->links() }}
        </div>
    </main>
@endsection
