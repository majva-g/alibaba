<?php

namespace App\Services;
use App\Models\Post;
class PostService
{
    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update(Post $post, array $data){
        return $post->update($data);
    }
}