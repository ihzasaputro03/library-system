<?php 

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller 
{ 
    public function index() 
    {  
        $title = 'Daftar Buku';
        
        $books = Book::all(); 

        $stock = Book::sum('stok');  
        $description = 'Daftar koleksi buku yang tersedia di perpustakaan.'; 

        return view('books.index', compact( 
            'title', 
            'books', 
            'stock',  
            'description' 
        )); 
    } 

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return "Judul Buku: " . $book->judul;
    }
}