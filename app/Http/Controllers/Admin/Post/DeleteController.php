<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }

}
