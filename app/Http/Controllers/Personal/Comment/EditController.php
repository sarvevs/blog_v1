<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Comment $comment)
    {
        return view('personal.comment.edit', compact('comment'));
    }

}
