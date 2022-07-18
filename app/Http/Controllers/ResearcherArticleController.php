<?php

namespace App\Http\Controllers;

use App\Models\ResearcherArticle;
use App\Http\Requests\StoreResearcherArticleRequest;
use App\Http\Requests\UpdateResearcherArticleRequest;

class ResearcherArticleController extends Controller
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
     * @param  \App\Http\Requests\StoreResearcherArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResearcherArticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResearcherArticle  $researcherArticle
     * @return \Illuminate\Http\Response
     */
    public function show(ResearcherArticle $researcherArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResearcherArticle  $researcherArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(ResearcherArticle $researcherArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResearcherArticleRequest  $request
     * @param  \App\Models\ResearcherArticle  $researcherArticle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResearcherArticleRequest $request, ResearcherArticle $researcherArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResearcherArticle  $researcherArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResearcherArticle $researcherArticle)
    {
        //
    }
}
