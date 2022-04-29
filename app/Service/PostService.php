<?php

namespace App\Service;

use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            $data['preview_image'] = Storage::disk('public')->put('/images/preview', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images/main', $data['main_image']);
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();
            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);
            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::disk('public')->put('/images/preview', $data['preview_image']);

            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::disk('public')->put('/images/main', $data['main_image']);
            }
            $post->update($data);
            $post->tags()->attach($tagIds);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
            abort(500);
        }
        return $post;
    }

}
