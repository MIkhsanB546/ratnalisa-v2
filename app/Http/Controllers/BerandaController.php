<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda.index');
    }

    public function tentang()
    {
        return view('tentang.index');
    }

    public function kontak()
    {
        return view('kontak.index');
    }

    public function layanan()
    {
        return view('layanan.index');
    }

    public function detail_layanan()
    {
        return view('layanan.detail');
    }


    public function privacy()
    {
        return view('privacy.index');
    }

    public function terms()
    {
        return view('terms.index');
    }


    // Kategori Layanan

    public function hematologi()
    {
        return view('kategori-layanan.hematologi');
    }
}
