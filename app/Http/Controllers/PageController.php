<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang';
       }
    
    public function about() {
        return 'Nama : Dina Maulidatur Rahma <br> NIM : 2141720199';
       }
    public function articles($id) {
        return "Halaman Artikel dengan Halaman ID " . $id;
       }
    
}
