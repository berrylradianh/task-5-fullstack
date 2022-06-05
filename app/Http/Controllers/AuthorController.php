<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthorController extends Controller
{
    public function author(User $author)
    {
        return view('author', [
            'title' => 'User Posts',
            'posts' => $author->posts,
        ]);
    }
}
