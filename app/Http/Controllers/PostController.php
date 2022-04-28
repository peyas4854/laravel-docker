<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        dd('dfg');
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
