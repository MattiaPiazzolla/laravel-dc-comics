@extends('layouts.app')

@section('content')
    <div class="container py-5 text-light">
        <h1 class="mb-4">Aggiungi un nuovo fumetto</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class=" list-unstyled m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine (URL):</label>
                <input type="url" id="thumb" name="thumb" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo:</label>
                <input type="text" id="price" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" id="series" name="series" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita:</label>
                <input type="date" id="sale_date" name="sale_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo:</label>
                <input type="text" id="type" name="type" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti:</label>
                <input type="text" id="artists" name="artists" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori:</label>
                <input type="text" id="writers" name="writers" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
        </form>
    </div>
@endsection
