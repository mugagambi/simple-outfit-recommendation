<?php

namespace App\Http\Controllers;

use App\WeatherGroup;
use App\Http\Requests\WeatherGroupRequest;

class WeatherGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = WeatherGroup::all();
        return view('weather-groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weather-groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param WeatherGroupRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeatherGroupRequest $request)
    {
        WeatherGroup::create(['name' => $request->input('name')]);
        flash('weather group created successfully')->success();
        return redirect()->route('weather-groups.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WeatherGroup  $weatherGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(WeatherGroup $weatherGroup)
    {
        return view('weather-groups.edit', ['weather_group'=> $weatherGroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param WeatherGroupRequest $request
     * @param  \App\WeatherGroup $weatherGroup
     * @return \Illuminate\Http\Response
     */
    public function update(WeatherGroupRequest $request, WeatherGroup $weatherGroup)
    {
        $weatherGroup->name = $request->input('name');
        $weatherGroup->save();
        flash('weather group updated successfully')->success();
        return redirect()->route('weather-groups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WeatherGroup $weatherGroup
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(WeatherGroup $weatherGroup)
    {
        $weatherGroup->delete();
        flash('weather group removed successfully')->success();
        return redirect()->route('weather-groups.index');
    }
}
