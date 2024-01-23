<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $work = Work::all();
        return view('admin.works.index',compact('work'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.works.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkRequest $request)
    {
        Work::create([
            'name'=>$request->name,
            'photo'=>$request->photo,
            'price'=>$request->price,
        ]);

        return redirect()->route('admin.work.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        return view('admin.works.show',compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        return view('admin.works.edit',compact('work'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkRequest $request, Work $work)
    {
        $work->update([
            'name'=>$request->name,
            'photo'=>$request->photo,
            'price'=>$request->price,
        ]);

        return redirect()->route('admin.work.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $work->delete();
        return redirect()->route('admin.work.index');
    }
}
