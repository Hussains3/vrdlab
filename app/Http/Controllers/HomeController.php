<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Researcher;
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
        $researchers = Researcher::all();
        return view('our-researcher',compact('researchers'));
    }


    // Publication Page
    public function publications()
    {
        $categories = Category::all();
        $articles = Article::all();
        return view('publication',compact('articles','categories'));
    }

    // Researcher Publication/Profile
    public function researcherpub(Researcher $researcher)
    {
        return $researcher;
    }


    public function vrdadmin()
    {
        return view('dashboard.index');
    }
}
