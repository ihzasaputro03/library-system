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

    public function create() {
    return view('books.create');
}

public function store(Request $request) {
    Book::create($request->all());
    return redirect()->route('books.index');
}

public function edit($id) {
    $book = Book::findOrFail($id);
    return view('books.edit', compact('book'));
}

public function update(Request $request, $id) {
    $book = Book::findOrFail($id);
    $book->update($request->all());
    return redirect()->route('books.index');
}

public function destroy($id) {
    $book = Book::findOrFail($id);
    $book->delete();
    return redirect()->route('books.index');
}
}