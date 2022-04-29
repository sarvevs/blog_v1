<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        dd($data);
        $data['preview_image'] = Storage::put('/images/preview', $data['preview_image']);
        $data['main_image'] = Storage::put('/images/main', $data['main_image']);

        Post::firstOrCreate($data);

        return redirect()->route('admin.post.index');

    }

}

