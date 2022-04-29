<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function create()
    {
        return view('admin.tags.create');
    }

}
