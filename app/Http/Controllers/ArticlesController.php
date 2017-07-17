<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{

	function deleteArticle($id) {
		$article_tbd = Article::find($id);
		$article_tbd->delete();

		return back();
	}

	function displayOneArticle($id){
		$article = Article::find($id);
		
		return view('articles/display_one_article', compact('article'));
	}

	function createArticle(){
		

		return view('articles/create');
	}

	function saveNewArticle(Request $request) {
		// dd($request);
		$new_article = new Article();
		$new_article->title = $request->title;
		$new_article->content = $request->content;
		$new_article->save();

		return back();
	}

	function editArticle($id) {
		$article = Article::find($id);

		return view('articles/edit_form', compact('article'));
	}

	function saveEditedArticle($id, Request $request) {
		$article_tbe = Article::find($id);
		$article_tbe->title = $request->title;
		$article_tbe->content = $request->content;
		$article_tbe->save();

		return back();
	}

	function showArticles() {
        $articles = Article::all();

    	return view('articles/articles_list', compact('articles'));
	}


}
