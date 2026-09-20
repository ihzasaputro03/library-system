@extends('layouts.app')

@section('title', 'Daftar Buku', 'Kategori Buku')

@section('content')
    <h1>Daftar Buku</h1>

    <ul>
        @foreach($books as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>

    @if($stock > 0)
        <p>Stok tersedia: {{ $stock }}</p>
    @else
        <p>Stok habis.</p>
    @endif

    <p>{{ $description }}</p>
@endsection