<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showformCreatePost() {
        return view('post.create');
    }

    public function store(Request $request) {
        $post = new Post;
        if ($request->hasFile('image')) {
            dd("co file");
        }
        else {
            dd("khong co file");
        }

        $post->category_id = 0;
        $post->save();

        return redirect()->back();
    }
}
