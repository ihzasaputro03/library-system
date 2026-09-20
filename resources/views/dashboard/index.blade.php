@extends('layouts.app')

@section('title', 'Dashboard Perpustakaan')

@section('content')
    <h1>Dashboard Perpustakaan</h1>
    <p>Selamat datang di Sistem Informasi Library System.</p>

    <hr>

    <div >
        <div >
            <h3>Total Buku</h3>
            <p >{{ $totalBooks }}</p>
        </div>
        <div >
            <h3>Total Anggota</h3>
            <p >{{ $totalMembers }}</p>
        </div>
        <div >
            <h3>Buku Dipinjam</h3>
            <p >{{ $borrowedBooks }}</p>
        </div>
        <div >
            <h3>Terlambat</h3>
            <p >{{ $overdueBooks }}</p>
        </div>
    </div>

    <h2>Peminjaman Terbaru</h2>
    <table >
        <thead>
            <tr >
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentBorrowings as $item)
                <tr>
                    <td>{{ $item['member_name'] }}</td>
                    <td>{{ $item['book_title'] }}</td>
                    <td>{{ $item['borrow_date'] }}</td>
                    <td>{{ $item['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection