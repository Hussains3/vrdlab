<?php

namespace App\Http\Controllers;

use App\Models\Researcher;
use App\Http\Requests\StoreResearcherRequest;
use App\Http\Requests\UpdateResearcherRequest;

class ResearcherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researchers = Researcher::all();
        return view('dashboard.researchers.index',compact('researchers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.researchers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResearcherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResearcherRequest $request)
    {
        $researcher = new Researcher();
        $researcher->name = $request->name;
        $researcher->designation = $request->designation;
        $researcher->uv_name = $request->uv_name;
        $researcher->reserch_area = $request->reserch_area;
        $researcher->bio = $request->bio;
        if ($request->website) {$researcher->website = $request->website;}
        if ($request->email) {$researcher->email = $request->email;}
        if ($request->linkedin) {$researcher->linkedin = $request->linkedin;}

        if ($request->hasFile('photo')) {
            $profilepic = $request->file('photo');
            $photoName = $request->first_name.time().$profilepic->getClientOriginalName();
            $path = public_path('images/researchers/photo/');
            $image_url = 'images/researchers/photo/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $researcher->photo = $image_url;
        }

        if ($request->hasFile('uv_logo')) {
            $profilepic = $request->file('uv_logo');
            $photoName = $request->first_name.time().$profilepic->getClientOriginalName();
            $path = public_path('images/researchers/uv_logo/');
            $image_url = 'images/researchers/uv_logo/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $researcher->uv_logo = $image_url;
        }

        $researcher->save();

        return redirect()->route('researchers.index')
        ->withSuccess(__('Researcher added.'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Researcher  $researcher
     * @return \Illuminate\Http\Response
     */
    public function show(Researcher $researcher)
    {
        return view('dashboard.researchers.show',compact('researcher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Researcher  $researcher
     * @return \Illuminate\Http\Response
     */
    public function edit(Researcher $researcher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResearcherRequest  $request
     * @param  \App\Models\Researcher  $researcher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResearcherRequest $request, Researcher $researcher)
    {
        $researcher->name = $request->name;
        $researcher->designation = $request->designation;
        $researcher->uv_name = $request->uv_name;
        $researcher->reserch_area = $request->reserch_area;
        $researcher->bio = $request->bio;
        if ($request->website) {$researcher->website = $request->website;}
        if ($request->email) {$researcher->email = $request->email;}
        if ($request->linkedin) {$researcher->linkedin = $request->linkedin;}

        if ($request->hasFile('photo')) {
            $profilepic = $request->file('photo');
            $photoName = $request->first_name.time().$profilepic->getClientOriginalName();
            $path = public_path('images/researchers/photo/');
            $image_url = 'images/researchers/photo/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $researcher->photo = $image_url;
        }

        if ($request->hasFile('uv_logo')) {
            $profilepic = $request->file('uv_logo');
            $photoName = $request->first_name.time().$profilepic->getClientOriginalName();
            $path = public_path('images/researchers/uv_logo/');
            $image_url = 'images/researchers/uv_logo/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $researcher->uv_logo = $image_url;
        }

        $researcher->save();


        return redirect()->route('researchers.show',$researcher->id)
        ->withSuccess(__('Researcher Updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Researcher  $researcher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Researcher $researcher)
    {
        $researcher->delete();
        return redirect()->route('researchers.index')
        ->withSuccess(__('Researcher Deleted.'));
    }

}
