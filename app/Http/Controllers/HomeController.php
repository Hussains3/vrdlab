<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Researcher;
use App\Models\Author;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles = Article::all();
        $researchers = Researcher::all();
        return view('index',compact('articles','researchers'));
    }

    // Our Researcher Page
    public function ourResearchers()
    {
        $researchers = Researcher::paginate(20);
        return view('our-researcher',compact('researchers'));
    }


    // Publication Page
    public function publications()
    {
        $categories = Category::all();
        $articles = Article::all();
        return view('publication',compact('articles','categories'));
    }


    public function researcherpub(Researcher $researcher, Request $request)
    {
        return view('researcher',compact('researcher'));
    }

    public function authorswiew()
    {
        $authors = Author::all();
        return view('authors',compact('authors'));
    }

    public function publication(Article $article, Request $request)
    {
        $relatedArticles = Article::where('category_id',$article->category->id)->get();
        return view('read-articel',compact('article','relatedArticles'));
    }

    public function category(Category $category, Request $request)
    {
        $category = Category::with('articles')->where('id',$category->id)->first();
        return view('category',compact('category'));
    }


    public function vrdadmin()
    {
        return view('dashboard.index');
    }
}