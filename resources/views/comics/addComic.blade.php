@extends('templates.base')

@section('title', 'Comics | Add')

@section('mainContent')
    <main>
        <form method="POST" action="{{ route('comics.store') }}" id="addComicForm">
            <h1 class="mb-4">Add new Comic</h1>

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" aria-describedby="title">
            </div>

            <div class="mb-3 d-flex flex-column">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" cols="30" rows="10" class="form-control" aria-describedby="description"></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Cover</label>
                <input type="text" class="form-control" name="thumb" aria-describedby="cover" placeholder="Add image URL" value="https://picsum.photos/768/1024">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" aria-describedby="price" step="0.01" min="0" placeholder="$ 0.00" >
                </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" aria-describedby="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" name="sale_date" aria-describedby="sale date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type" class="form-control" aria-describedby="type">
                    <option value="comic">Comic</option>
                    <option value="graphic-novel">Graphic Novel</option>
                    <option value="poster">Poster</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>

            <div class="btn btn-secondary" id="btn-reset">Clear fields</div>

            <a href="{{ route('home') }}" class="btn btn-link" id="btn-back">Back</a>

            </form>
    </main>
@endsection
