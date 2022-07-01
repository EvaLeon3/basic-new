<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Post;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Models\Post;
>>>>>>> prueba

class PageController extends Controller
{
    public function posts()
    {
<<<<<<< HEAD
        return view('posts',[
=======
        return view('posts', [
>>>>>>> prueba
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }

    public function post(Post $post)
    {
<<<<<<< HEAD
        return view('post',
        ['post' => $post]);
    }

=======
        return view('post', [
            'post' => $post
        ]);
        
        ///dd($post);
    }
>>>>>>> prueba
}
