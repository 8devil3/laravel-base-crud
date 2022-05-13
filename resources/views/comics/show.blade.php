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

                <!-- Edit  -->
                <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Edit</a>

                <!-- Popup Trigger -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delPopup">Delete</button>

                <!-- Deletion popup -->
                <div class="modal fade" id="delPopup" tabindex="-1" aria-labelledby="delPopup" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="delPopuplLabel">Confirm deletion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Do you really want to delete this comic?
                            </div>
                            <div class="modal-footer">
                                <form class="d-inline-block" method="POST" action="{{ route('comics.destroy', $comic['id']) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" id="btnDel">Yes, delete</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / -->

                <a href="{{ route('comics.index') }}" class="btn btn-link" id="btn-back">Back to all</a>

            </div>
        </div>
    </div>
</main>


@endsection
