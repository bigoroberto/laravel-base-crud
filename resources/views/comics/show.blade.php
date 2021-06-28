@extends('layouts.main')

@section('content')
<div class="container">

<div class="mt-3">
    <h1>{{ $comic->title }}</h1>
    <div class="my-3">
        <span class="badge bg-primary">{{ $comic->type }}</span>
        {{ $comic->series }}
    </div>

<div class="row mb-5">
    <div class="col">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <div class="col">
        {{-- inserendo !!  stampa codice html  !! --}}
        <p>{!! $comic->description !!}</p>
        <a class="btn btn-warning " href="{{ route('comics.index') }}">BACK</a>
    </div>
</div>

</div>

</div>

@endsection
