@extends('layouts.app')
@section('title')
    Daily Weather |
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Daily Weather
                        <a href="{{route('weather.create')}}" class="btn btn-success btn-sm float-right">record daily
                            weather</a></div>

                    <div class="card-body">
                        <table class="table table-bordered table-responsive-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th>Place</th>
                                <th>Day</th>
                                <th>Temperature</th>
                                <th>Precipitation</th>
                                <th>Wind</th>
                                <th>Humidity</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($weather_list as $weather)
                                <tr>
                                    <td>{{$weather->place}}</td>
                                    <td>{{\Carbon\Carbon::parse($weather->day)->toFormattedDateString()}}</td>
                                    <td>{{$weather->temperature}} &#8451;</td>
                                    <td>{{$weather->precipitation}}%</td>
                                    <td>{{$weather->wind}} km/h</td>
                                    <td>{{$weather->humidity}} %</td>
                                    <td><a href="{{route('weather.edit', ['weather' => $weather->id])}}"
                                           class="mb-1 btn btn-sm btn-success">edit</a>
                                        <form action=""
                                              method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
