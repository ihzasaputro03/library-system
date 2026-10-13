@extends('layouts.app')

@section('title', 'Daftar Buku', 'Kategori Buku')

@section('content')
    <h1>Daftar Buku</h1>

    <a href="{{ route('books.create') }}">+ Tambah Buku Baru</a>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

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

                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>

    <p>{{ $description }}</p>
@endsection