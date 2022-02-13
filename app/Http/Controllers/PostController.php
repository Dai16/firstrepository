<?php

namespace App\Http\Controllers;
 dev_basis02

master
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
dev_basis02
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
}
?>

        return $post->get();
    }
}
master
