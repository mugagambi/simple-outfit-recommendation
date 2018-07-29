<?php

namespace App\Http\Controllers;

use App\DressMode;
use App\Http\Requests\WeatherGroupRequest;
use Illuminate\Http\Request;

class DressModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dress_codes = DressMode::all();
        return view('dress-mode.index', ['dress_codes' => $dress_codes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dress-mode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WeatherGroupRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeatherGroupRequest $request)
    {
        DressMode::create(['name' => $request->input('name')]);
        flash('dress code added successfully')->success();
        return redirect()->route('dress-code.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DressMode  $dressMode
     * @return \Illuminate\Http\Response
     */
    public function edit($dressMode)
    {
        $dressMode = DressMode::findOrFail($dressMode);
        return view('dress-mode.edit', ['dress_code'=> $dressMode]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WeatherGroupRequest $request
     * @param  \App\DressMode $dressMode
     * @return \Illuminate\Http\Response
     */
    public function update(WeatherGroupRequest $request,$dressMode)
    {
        $dressMode = DressMode::findOrFail($dressMode);
        $dressMode->name = $request->input('name');
        $dressMode->save();
        flash('dress code added successfully')->success();
        return redirect()->route('dress-code.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DressMode $dressMode
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($dressMode)
    {
        $dressMode = DressMode::findOrFail($dressMode);
        $dressMode->delete();
        flash('dress code removed successfully')->success();
        return redirect()->route('dress-code.index');
    }
}
