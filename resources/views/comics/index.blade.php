@extends('layouts.app')

@section('content')
    <div class="jumbo">
        <div class="container position-relative h-100">
            <div class="labelSection">CURRENT SERIES</div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row row-cols-lg-6 row-cols-md-4 row-cols-sm-3 row-cols-2 gx-0 comicsSection">
            @foreach ($comics as $comic)
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
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
