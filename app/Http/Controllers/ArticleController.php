<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends FrontendController
{
    //
    public function getListArticle(){
        $articles = Article::orderBy('id','DESC');
        $articles = $articles->paginate(3);
        $viewData = [
            'articles' => $articles
        ];
        return view('article.index',$viewData);
    }
    public function getDetailArticle($slug,$id){
        $articles = Article::where('id','<>',$id)->limit(5)->get();
        $article = Article::find($id);
        $viewData = [
            'articles' => $articles,
            'article' => $article
        ];
        return view('article.detail',$viewData);
    }
}
