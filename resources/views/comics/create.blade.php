@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Add new Comics</h1>
        <div class="row col-8 offset-2 pt-5">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea  id="description" name="description" class="form-control" rows="6"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="type">Type</label>
                    <select id="type" name="type" class="form-control">
                        <option value="comic_book">comic book</option>
                        <option value="graphic_novel">graphic novel</option>
                    </select>
                </div>


                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" id="thumb" name="thumb" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" id="price" name="price" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" id="series" name="series" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" id="sale_date" name="sale_date" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary ">Reset</button>

            </form>

        </div>
    </div>
@endsection
