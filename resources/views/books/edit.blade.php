@extends('layouts.app')

@section('content')
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Judul:</label>
            <input 
                id="title"
                type="text" 
                name="title"  
                value="{{ old('title', $book->title) }}"
            >
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="author">Penulis:</label>
            <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}">
            @error('author')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="year">Tahun:</label>
            <input type="number" name="year" id="year" value="{{ old('year', $book->year) }}">
            @error('year')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $book->isbn) }}">
            @error('isbn')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection