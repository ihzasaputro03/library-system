<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooks = 5;
        $totalMembers = 5;
        $borrowedBooks = 2;
        $overdueBooks = 0;

        $recentBorrowings = [
            [
                'member_name' => 'Andi',
                'book_title' => 'Laravel untuk Pemula',
                'borrow_date' => '2026-09-18',
                'status' => 'Dipinjam'
            ],
            [
                'member_name' => 'Budi',
                'book_title' => 'Algoritma dan Pemrograman',
                'borrow_date' => '2026-09-19',
                'status' => 'Dipinjam'
            ],
            [
                'member_name' => 'Citra',
                'book_title' => 'Basis Data',
                'borrow_date' => '2026-09-20',
                'status' => 'Kembali'
            ],
        ];

        return view('dashboard.index', compact(
            'totalBooks',
            'totalMembers',
            'borrowedBooks',
            'overdueBooks',
            'recentBorrowings'
        ));
    }
}