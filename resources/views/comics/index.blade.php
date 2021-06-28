@extends('layouts.main')

@section('content')
<div class="container">
    <h1>  i miei comics </h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> ID </th>
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
                    <td> {{$comic->title}} </td>
                    <td> {{$comic->series}} </td>
                    <td> {{$comic->type}} </td>
                    <td>
                        <a href="{{route('comics.show',$comic->id) }}" class="btn btn-success">SHOW </a>
                    </td>
                    <td> EDIT </td>
                    <td> DELETE </td>
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
