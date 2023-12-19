<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    public function __construct(private ArticleService $articleService){
        $this->authorizeResource(Article::class, 'article');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = $this->articleService->getAll();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $this->articleService->create($request->validated());
        return redirect()->route('articles.index')->with('success', 'Article created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $this->articleService->update($article, $request->validated());
        return redirect()->route('articles.index')->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $this->articleService->delete($article);
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully');
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore(Article $article){
        $this->articleService->restore($article);
        return redirect()->route('articles.trashed')->with('success', 'Article restored successfully');
    }

    /**
     * Toggle the specified resource from storage.
     */     
    public function togglePublish(Article $article){
        $this->authorize('publish', $article);
        $this->articleService->togglePublish($article);
        return response()->json(['success', 'Article published toggled successfully']);
    }

    /**
     * Get all trashed articles
     */   
    public function getTrashedArticles()
    {
        $this->authorize('viewTrashed', Article::class);
        $articles = $this->articleService->getTrashed();
        return view('articles.trashed', compact('articles'));
    }
}
