<?php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Validator;

class ArticleController extends Controller
{
    public function create(Request $request)
    {
        #write your code for article creation here...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
        #all fields are required
        $title = $request->title;
        $content = $request->content;
        $author = $request->author;
        $category = $request->category;
        $published_at = $request->published_at;

        if(strlen($title) < 1 | strlen($title) > 30){

        }
        if(strlen($content) < 1 |  strlen($author) < 1 | strlen($category) < 1 | strlen($published_at) < 1 ){

        }

        $article = new Article;
 
        $article->name = $request->name;
 
        $article->save();
    }

    public function getAll()
    {
        #write your code to get all articles...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
        return Article::all();
    }

    public function get(Request $request, $articleId)
    {
        #write your code to get all article specific by id...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
        $result = Article::findOrFail($articleId);
        return $result;
    }

    public function update(Request $request, $articleId)
    {
        #write your code to update article specific by id...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
        $article = Article::find(1);
 
        $article->content = 'updated name';
 
        $article->save();
    }

    public function delete(Request $request, $articleId)
    {
        #write your code to delete article specific by id...
        #model name = Article
        #table name = article
        #table fields = id,title,content,author,category,published_at
        $article = Article::find(1);
        $article->delete();

    }
}
