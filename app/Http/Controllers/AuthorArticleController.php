<?php

namespace App\Http\Controllers;

use App\Models\AuthorArticle;
use App\Http\Requests\StoreAuthorArticleRequest;
use App\Http\Requests\UpdateAuthorArticleRequest;

class AuthorArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuthorArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorArticle  $authorArticle
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorArticle $authorArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorArticle  $authorArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorArticle $authorArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorArticleRequest  $request
     * @param  \App\Models\AuthorArticle  $authorArticle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthorArticleRequest $request, AuthorArticle $authorArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorArticle  $authorArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorArticle $authorArticle)
    {
        //
    }
}
