@extends('layouts.app')

@section('content')
    <div class="container py-5 text-light">
        <h1 class="mb-4">Aggiungi un nuovo fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                    required value="{{ old('title') }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine (URL):</label>
                <input type="url" id="thumb" name="thumb"
                    class="form-control @error('thumb') is-invalid @enderror" required value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" id="price" name="price"
                    class="form-control @error('price') is-invalid @enderror" required value="{{ old('price') }}">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" id="series" name="series"
                    class="form-control @error('series') is-invalid @enderror" required value="{{ old('series') }}">
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita:</label>
                <input type="date" id="sale_date" name="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror" required value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo:</label>
                <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror"
                    required value="{{ old('type') }}">
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti:</label>
                <input type="text" id="artists" name="artists"
                    class="form-control @error('artists') is-invalid @enderror" required value="{{ old('artists') }}">
                @error('artists')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori:</label>
                <input type="text" id="writers" name="writers"
                    class="form-control @error('writers') is-invalid @enderror" required value="{{ old('writers') }}">
                @error('writers')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
        </form>
    </div>
@endsection
