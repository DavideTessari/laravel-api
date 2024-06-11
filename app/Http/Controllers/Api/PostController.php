<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $post = Post::with('type', 'technologies')->get();

        return response()->json([
            'success' => true,
            'results' => $post
        ]);
    }
}