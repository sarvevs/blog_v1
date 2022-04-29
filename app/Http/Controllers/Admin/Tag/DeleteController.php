<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class DeleteController extends Controller
{
    public function delete(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }

}
