@extends('layouts.app')

@section('content')
    <div class="container py-5 text-light">
        <h1 class="mb-4">Aggiungi un nuovo fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine (URL):</label>
                <input type="url" id="thumb" name="thumb" class="form-control" value="{{ old('thumb') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" id="price" name="price" class="form-control" value="{{ old('price') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" id="series" name="series" class="form-control" value="{{ old('series') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita:</label>
                <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{ old('sale_date') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo:</label>
                <input type="text" id="type" name="type" class="form-control" value="{{ old('type') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti:</label>
                <input type="text" id="artists" name="artists" class="form-control" value="{{ old('artists') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori:</label>
                <input type="text" id="writers" name="writers" class="form-control" value="{{ old('writers') }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
        </form>
    </div>
@endsection
