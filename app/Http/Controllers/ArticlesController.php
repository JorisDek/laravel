<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function __construct() {

        $this->middleware('auth', ['only' => 'create']);
    }
    
    public function index() {

    	$articles = Article::latest('published_at')->published()->get();

    	return view('articles.index', compact('articles'));
    }

    public function show(Article $article) {

    	return view('articles.show', compact('article'));
    }

    public function create() {

        $tags = \App\Tag::lists('name', 'id');

    	return view('articles.create', compact('tags'));
    }

    public function store(Requests\ArticleRequest $request) {
    	
        
        $this->createArticle($request);

        //session()->flash('', '');       

    	return redirect('articles')->with([
            'flash_message' => 'Article created!',
            'flash_message_important' => true,
        ]);
    }

    public function edit(Article $article) {

        $tags = \App\Tag::lists('name', 'id');

    	return view('articles.edit', compact('article', 'tags'));
    }

    public function update(Article $article, Requests\ArticleRequest $request) {

    	$article->update($request->all());

        $this->syncTags($article, $request->input('taglist'));

    	return redirect('articles');
    }

    private function syncTags(Article $article, array $tags) {

        $article->tags()->sync($tags);       
    }

    private function createArticle(Request $request) {
        $article = \Auth::user()->articles()->create($request->all());

        $this->syncTags($article, $request->input('taglist'));

        return $article;
    }
}



