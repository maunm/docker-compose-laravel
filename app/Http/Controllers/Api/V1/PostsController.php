<?php

namespace App\Http\Controllers\Api\V1;

use TCG\Voyager\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Post as PostResource;

class PostsController extends Controller
{
    public function index()
    {
        // return all posts
        return Post::all();
    }

    public function show($id)
    {
        return new PostResource(Post::findOrFail($id));
    }
    
}
