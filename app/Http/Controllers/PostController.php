<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
        $pathToFile = storage_path('/images/download.jpeg');
        Post::query()->create()->addMedia($pathToFile)
            ->toMediaCollection();
        dd('done');
    }
}
