<?php

namespace App\Http\Controllers;

use App\DressMode;
use App\Event;
use App\OutfitCategory;
use App\WeatherGroup;
use Illuminate\Http\Request;

class OutfitCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = OutfitCategory::all();
        return view('outfit-category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dress_codes = DressMode::all();
        $events = Event::all();
        $weather = WeatherGroup::all();
        return view('outfit-category.create', ['dress_codes' => $dress_codes,'events' => $events, 'weather' => $weather]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);
        $weather_groups = $request->input('weather');
        $category = OutfitCategory::create(['name' => $request->input('name')]);
        $category->weather_groups()->attach($weather_groups);
        $category->events()->attach($request->input('events'));
        $category->dress_modes()->attach($request->input('dress'));
        flash('category added successfully')->success();
        return redirect()->route('outfit-categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OutfitCategory  $outfitCategory
     * @return \Illuminate\Http\Response
     */
    public function show(OutfitCategory $outfitCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OutfitCategory  $outfitCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(OutfitCategory $outfitCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OutfitCategory  $outfitCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutfitCategory $outfitCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OutfitCategory  $outfitCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutfitCategory $outfitCategory)
    {
        //
    }
}
