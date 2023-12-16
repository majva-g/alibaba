<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostService
{
    public function create(array $data): Post
    {
        return Post::create($data);
    }

    public function update(Post $post, array $data): bool
    {
        return $post->update($data);
    }

    public function delete(Post $post): bool
    {
        return $post->delete();
    }

    public function restore(Post $post): bool
    {
        return $post->restore();
    }

    public function togglePublish(Post $post): bool
    {
        return $this->update($post, ['published' => !$post->published]);
    }

    public function getAll():Collection{
        return Post::all();
    }
}
