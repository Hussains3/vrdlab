<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Author;
use App\Models\AuthorArticle;
use App\Models\Category;
use App\Models\Researcher;
use App\Models\ResearcherArticle;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('dashboard.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        $researchers = Researcher::all();
        return view('dashboard.articles.create',compact('categories','authors','researchers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {

        $article = new Article();
        $article->title = $request->title;
        $article->doi = $request->doi;
        $article->category_id = $request->category_id;
        $article->pub_date = $request->pub_date;
        $article->abstract = $request->abstract;
        $article->link = $request->link;
        $article->publisher = $request->publisher;
        $article->citation = $request->citation;

        if ($request->hasFile('cover')) {
            $profilepic = $request->file('cover');
            $photoName = $request->first_name.time().$profilepic->getClientOriginalName();
            $path = public_path('images/articles/cover/');
            $image_url = 'images/articles/cover/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $article->cover = $image_url;
        }

        $article->save();

        if ($request->author_ids) {
            foreach ($request->author_ids as $author_id) {
                $aa = new AuthorArticle();
                $aa->author_id = $author_id;
                $aa->article_id = $article->id;
                $aa->save();
            }
        }
        if ($request->researchers) {
            foreach ($request->researchers as $researcher) {
                $ra = new ResearcherArticle();
                $ra->researcher_id = $researcher;
                $ra->article_id = $article->id;
                $ra->save();
            }
        }

        return redirect()->route('articles.index')->withSuccess(__('Article deleted.'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('dashboard.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        $authors = Author::all();
        $researchers = Researcher::all();

        $authorsids = [];
        $researcherids = [];
        foreach ($article->authours as $authour) {
            array_push($authorsids, $authour->id);
        }
        foreach ($article->researchers as $researcher) {
            array_push($researcherids, $researcher->id);
        }

        return view('dashboard.articles.edit',compact('article','categories','authors','researchers','authorsids','researcherids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article = Article::find($article->id);
        $article->title = $request->title;
        $article->doi = $request->doi;
        $article->category_id = $request->category_id;
        $article->pub_date = $request->pub_date;
        $article->abstract = $request->abstract;
        $article->link = $request->link;
        $article->publisher = $request->publisher;
        $article->citation = $request->citation;

        if ($request->hasFile('cover')) {
            $profilepic = $request->file('cover');
            $photoName = $request->first_name.time().$profilepic->getClientOriginalName();
            $path = public_path('images/articles/cover/');
            $image_url = 'images/articles/cover/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $article->cover = $image_url;
        }

        $article->save();




        /**
         * Perform logic for updating Author Article
         */
        if ($request->author_ids){
            $authorAlready = AuthorArticle::where('article_id',$article->id)->pluck('author_id')->toArray();
            $newAuthors = array_diff($request->author_ids,$authorAlready);
            $authorToDelete = array_diff($authorAlready,$request->author_ids);
            if (count($newAuthors)){
                foreach ($newAuthors as $author){
                    $authorArticle[] = [
                        'article_id' => $article->id,
                        'author_id' => $author,
                    ];
                }
                AuthorArticle::insert($authorArticle);
            }
            if ($authorToDelete){
                AuthorArticle::whereIn('author_id',$authorToDelete)->where('article_id',$article->id)->delete();
            }
        }

        /**
         * Perform logic for updating Researcher Article
         */
        if ($request->researchers){
            $researcherAlready = ResearcherArticle::where('article_id',$article->id)->pluck('researcher_id')->toArray();
            $newResearchers = array_diff($request->researchers,$researcherAlready);
            $researcherToDelete = array_diff($researcherAlready,$request->researchers);
            if (count($newResearchers)){
                foreach ($newResearchers as $researcher){
                    $researcherArticle[] = [
                        'article_id' => $article->id,
                        'researcher_id' => $researcher,
                    ];
                }
                ResearcherArticle::insert($researcherArticle);
            }
            if ($researcherToDelete){
                ResearcherArticle::whereIn('researcher_id',$researcherToDelete)->where('article_id',$article->id)->delete();
            }
        }

        return redirect()->route('articles.show',$article->id)->withSuccess(__('Article updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->withSuccess(__('Article deleted.'));
    }
}
