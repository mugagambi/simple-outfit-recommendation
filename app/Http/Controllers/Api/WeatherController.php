<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Weather;
use App\Http\Resources\Weather as WaetherResource;

/**
 * @resource Weather
 * Fetch weather
 */
class WeatherController extends Controller
{
    /**
     * Fetch the weather for a given place
     * place_code query param is required
     * date query param is required
     * example query http://127.0.0.1:8000/api/weather?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU0MTQ0MTY0MCwiZXhwIjoxNTQxNDQ1MjQwLCJuYmYiOjE1NDE0NDE2NDAsImp0aSI6IlU0ZkFZVFdQMkZ5RXJTTnYiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.m6URX8fHzUXgQjPypPaMYGqTKywOHo725iGEE6NDIm8&place_code=NAI&date=2018-11-04
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        if (!$request->has('place_code')) {
            return response()->json([
                'status' => 'error',
                'message' => 'you need to enter place short code to fetch the weather'
            ], 400);
        }
        if (!$request->has('date')) {
            return response()->json([
                'status' => 'error',
                'message' => 'You need to pick a date to view the weather'
            ], 400);
        }
        $short_code = $request->input('place_code');
        $date = $request->input('date');
        $query = Weather::where('place_short_code', $short_code)
            ->where('day', $date)
            ->get();
        return WaetherResource::collection($query);
    }
}
