@extends('layouts.app')

@section('title', 'Daftar Buku', 'Kategori Buku')

@section('content')
    <h1>Daftar Buku</h1>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 75%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td>{{ $book->tahun_terbit }}</td>
                    <td>{{ $book->stok }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if($stock > 0)
        <p>Stok tersedia: {{ $stock }}</p>
    @else
        <p>Stok habis.</p>
    @endif

    <p>{{ $description }}</p>
@endsection