@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-3">{{ $comic->title }}</h1>
        <div class="row col-8 offset-2 pt-5">
            <form action="{{ route('comics.update', $comic) }}" method="post">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea  id="description" name="description" class="form-control" rows="6">{{ $comic->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="type">Type</label>
                    <select id="type" name="type" class="form-control">
                        <option value="comic_book" @if($comic->type === 'comic_book') selected @endif>comic book</option>
                        <option value="graphic_novel"@if($comic->type === 'graphic novel') selected @endif>graphic novel</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input id="thumb" name="thumb" class="form-control" value="{{ $comic->thumb }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{ $comic->price }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" id="series" name="series" class="form-control" value="{{ $comic->series }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" id="sale_date" name="sale_date" class="form-control" value="{{ $comic->sale_date}}">
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary ">Reset</button>

            </form>

        </div>
    </div>
@endsection
