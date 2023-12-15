<?php

namespace App\Services;
class PostService
{
    public function create(array $data)
    {
        return \App\Models\Post::create($data);
    }
}