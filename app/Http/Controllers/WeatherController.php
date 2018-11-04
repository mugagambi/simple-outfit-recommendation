<?php

namespace App\Http\Controllers;

use App\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weather_list = Weather::all();
        return view('weather.index', ['weather_list' => $weather_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weather.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'place' => 'required',
            'place_short_code' => 'required|unique:weathers,place_short_code',
            'temperature' => 'required',
            'precipitation' => 'required',
            'wind' => 'required',
            'humidity' => 'required',
            'day' => 'required'
        ]);
        Weather::create($request->all());
        return redirect(route('weather.index'))->with('success', 'Weather added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Weather $weather
     * @return \Illuminate\Http\Response
     */
    public function show(Weather $weather)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weather $weather
     * @return \Illuminate\Http\Response
     */
    public function edit(Weather $weather)
    {
        return view('weather.edit', ['weather' => $weather]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Weather $weather
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weather $weather)
    {
        $request->validate([
            'place' => 'required',
            'place_short_code' => 'required',
            'temperature' => 'required',
            'precipitation' => 'required',
            'wind' => 'required',
            'humidity' => 'required',
            'day' => 'required'
        ]);
        $weather->place = $request->input('place');
        $weather->place_short_code = $request->input('place_short_code');
        $weather->temperature = $request->input('temperature');
        $weather->wind = $request->input('wind');
        $weather->humidity = $request->input('humidity');
        $weather->day = $request->input('day');
        $weather->save();
        return view('weather.index')->with('success', 'weather updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weather $weather
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weather $weather)
    {
        //
    }
}
