@extends('templates.base')

@section('title', $comic['title'] . ' | Edit' )

@section('mainContent')
    <main>
        <form method="POST" action="{{ route('comics.update', $comic->id) }}" id="editComicForm">
            <h1 class="mb-4">Edit comic</h1>

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" aria-describedby="title" value="{{ old('title') }}">

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control" aria-describedby="description">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Cover</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" aria-describedby="cover" placeholder="Add image URL" value="{{ old('thumb') }}">

                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" aria-describedby="price" step="0.01" min="0" placeholder="$ 0.00" value="{{ old('price') }}">

                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" aria-describedby="series" value="{{ old('series') }}">

                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" aria-describedby="sale date" value="{{ old('sale_date') }}">

                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type" class="form-control @error('type') is-invalid @enderror" aria-describedby="type" value="{{ old('type') }}">
                    <option value="comic">Comic</option>
                    <option value="graphic-novel">Graphic Novel</option>
                    <option value="poster">Poster</option>
                </select>

                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add</button>

            <div class="btn btn-secondary" id="btn-edit-reset">Clear fields</div>

            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-link" id="btn-back">Back to comic</a>

        </form>
    </main>
@endsection
