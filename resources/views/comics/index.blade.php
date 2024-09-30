@extends('layouts.app')

@section('content')
    <div class="jumbo">
        <div class="container position-relative h-100">
            <div class="labelSection">CURRENT SERIES</div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row w-100 justify-content-end">
            <div class="col-12 d-flex justify-content-end m-3">
                <a href="{{ route('comics.create') }}" class="btn btn-sm btn-primary">Aggiungi Fumetto</a>
            </div>
        </div>
        <div class="row row-cols-lg-6 row-cols-md-4 row-cols-sm-3 row-cols-2 gx-0 comicsSection">
            @foreach ($comics as $comic)
                <a class=" text-white text-decoration-none" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                    <div class="col p-2 comic position-relative">
                        <p class="position-absolute priceComic">{{ $comic->price }}</p>
                        <img src="{{ $comic->thumb }}" alt="title" class="comicCover">
                        <p class="comicTitle mb-3 text-uppercase text-light">{{ $comic->title }}</p>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
@endsection
