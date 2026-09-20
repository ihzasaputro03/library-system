<?php 

namespace App\Http\Controllers;

class BookController extends Controller 
{ 
public function index() 
{  
$title = 'Daftar Buku';
$books = [ 
'Pemrograman PHP', 
'Laravel untuk Pemula', 
'Basis Data', 
'Algoritma dan Pemrograman', 
'Pemrograman Berorientasi Objek' 
]; 
$stock = 0;  
$description = 'Koleksi buku pada Sistem Informasi Perpustakaan.'; 
return view('books.index', compact( 
'title', 'books', 'stock',  
'description' 
)); 
} 
public function show($id)
    {
        return "ID Buku: " . $id;
    }
}