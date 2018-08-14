<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WeatherGroup;
use App\Http\Resources\WeatherGroupResourceCollection;
use App\Http\Resources\WeatherGroupResource;

/**
 * @resource WeatherGroup
 *Weather Groups Api Resource
 */
class WeatherGroupController extends Controller
{
    /**
     * List all weather groups
     * @return WeatherGroupResourceCollection
     */
    public function index()
    {
        return new WeatherGroupResourceCollection(WeatherGroup::paginate());
    }

    /**
     * Show a certain weather group
     * @param $id
     * @return WeatherGroupResource
     */
    public function show($id)
    {
        $weather_group = WeatherGroup::findOrFail($id);
        return new WeatherGroupResource($weather_group);
    }
}
