<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menggunakan middleware 'auth' untuk memastikan hanya pengguna yang sudah login yang dapat mengakses metode ini
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Menampilkan halaman beranda untuk pengguna umum
    public function index()
    {
        return view('dashboard'); // Pastikan 'home.blade.php' ada di resources/views/
    }

    // Menampilkan dashboard untuk pengguna dengan akses admin
    public function adminHome()
    {
        return view('dashboard'); // Pastikan 'dashboard.blade.php' ada di resources/views/
    }
}
