<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "About",
            "name" => "Nguyễn Văn A",
            "email" => "Nguyen@gmail.com",
            "image" => "img/contoh-gambar.jpg"
        ]);
    }
}
