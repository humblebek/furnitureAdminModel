<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreaboutRequest;
use App\Http\Requests\UpdateaboutRequest;
use App\Models\about;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = about::all();

        return view('admin.abouts.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreaboutRequest $request)
    {
        about::create([
            'photo'=>$request->photo,
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        return redirect()->route('admin.about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(about $about)
    {
        return view('admin.abouts.show',compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about)
    {
        return view('admin.abouts.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateaboutRequest $request, about $about)
    {
        $about->update([
            'photo'=>$request->photo,
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        return redirect()->route('admin.about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(about $about)
    {
        $about->delete();
        return redirect()->route('admin.about.index');
    }
}
