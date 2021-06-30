@extends('layouts.main')

@section('content')
<div class="container">
    <h1> My comics </h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"></th>
                    <th scope="col"> Title </th>
                    <th scope="col"> Seires </th>
                    <th scope="col"> Type </th>
                    <th scope="col"> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($comics as $comic)
                <tr>
                    <td> {{$comic->id}} </td>
                    <td>
                        <img style="height: 50px" class="img-fluid" src="{{ $comic->thumb }}"
                        alt="{{ $comic->title }}">
                    </td>
                    <td> {{$comic->title}} </td>
                    <td> {{$comic->series}} </td>
                    <td> {{$comic->type}} </td>
                    <td>
                        <a href="{{route('comics.show',$comic->id) }}" class="btn btn-success">SHOW </a>
                    </td>
                    <td>
                        <a href="{{route('comics.edit',$comic->id) }}" class="btn btn-primary">EDIT </a>
                    </td>
                    <td>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submin" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <section class="container">
            {{ $comics->links() }}
        </section>

    </div>
</div>
@endsection
