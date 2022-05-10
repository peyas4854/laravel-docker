<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderBy('id', 'desc')
            ->paginate(10);

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {

        $post = Post::create();
        $post->addMediaFromRequest('image')
            ->preservingOriginal()
            ->toMediaCollection();
        dd('done');
    }

    public function show($id)
    {
        $post = Post::query()->findOrFail($id);
        $publicUrl = $post->getMedia()[0]->getUrl();
        return [$post, $publicUrl];
    }
}
