<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

}
