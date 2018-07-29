@extends('layouts.app')
@section('title')
    weather groups |
    @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Weather Groups
                        <a href="{{route('weather-groups.create')}}" class="btn btn-success btn-sm float-right">add group</a></div>

                    <div class="card-body">
                        <table class="table table-bordered table-responsive-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($groups as $group)
                                <tr>
                                    <td>{{$group->name}}</td>
                                    <td><a href="{{route('weather-groups.edit', ['weather_group' => $group->id])}}" class="mb-1 btn btn-sm btn-success">edit</a>
                                        <form action="{{route('weather-groups.destroy', ['weather_group' => $group->id])}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form></td>
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
