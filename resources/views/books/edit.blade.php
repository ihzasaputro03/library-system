@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1>Edit Buku: {{ $book->judul }}</h1>

    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="judul">Judul Buku:</label>
            <input type="text" id="judul" name="judul" value="{{ old('judul', $book->judul) }}">
        </div>

        <div>
            <label for="penulis">Penulis:</label>
            <input type="text" id="penulis" name="penulis" value="{{ old('penulis', $book->penulis) }}">
        </div>

        <div>
            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" value="{{ old('tahun_terbit', $book->tahun_terbit) }}">
        </div>

        <div>
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" value="{{ old('stok', $book->stok) }}">
        </div>

        <button type="submit">Perbarui Buku</button>
    </form>
@endsection