<?php 

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller 
{ 
    public function index() 
    {  
        $title = 'Daftar Buku';
        
        $books = Book::with('category')->get(); 

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
    $categories = Category::all();    
    return view('books.create', compact ('categories'));
}

public function store(Request $request) {
    $validated = $request->validate([
        'judul'  => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'tahun_terbit'   => 'required|integer|min:1900',
        'category_id' => 'required|exists:categories,id',
        'stok'  => 'required|integer|min:0',
    ]);
    Book::create($validated);
    return redirect()
        ->route('books.index')
        ->with('success', 'Data buku berhasil ditambahkan.');
}

public function edit($id) {
    $book = Book::findOrFail($id);
    $categories = Category::orderBy('nama')->get();
    return view('books.edit', compact('book', 'categories'));
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