<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

class ArticleService
{
    public function create(array $data): Article
    {
       return  auth()->user()->articles()->create($data);
    }

    public function update(Article $article, array $data): bool
    {
        $data['published'] = false;
        return $article->update($data);
     
    }

    public function delete(Article $article): bool
    {
        return $article->delete();
    }

    public function restore(Article $article): bool
    {
        return $article->restore();
    }

    public function togglePublish(Article $article): bool
    {
        return $article->update(['published' => !$article->published]);
    }

    public function getAll():Collection{
        return Article::with('user')->get();
    }

    public function getTrashed():Collection{
        return Article::onlyTrashed()->get();
    }
}
