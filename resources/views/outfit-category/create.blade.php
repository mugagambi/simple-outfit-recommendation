@extends('layouts.app')
@section('title')
    Add Outfit Category |
    @endsection
@section('content')
    <link rel="stylesheet" href="{{asset('css/selectize.bootstrap3.css')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Outfit Category</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('outfit-categories.store') }}" aria-label="Add Outfit Category">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Weather groups</label>
                                <div class="col-md-6">
                                    <select multiple class="form-control" id="weather_groups" name="weather[]">
                                        @foreach($weather as $group)
                                        <option value="{{$group->id}}">{{$group->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Events</label>
                                <div class="col-md-6">
                                    <select multiple class="form-control" id="weather_groups" name="events[]">
                                        @foreach($events as $event)
                                            <option value="{{$event->id}}">{{$event->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Dress Codes</label>
                                <div class="col-md-6">
                                    <select multiple class="form-control" id="weather_groups" name="dress[]">
                                        @foreach($dress_codes as $code)
                                            <option value="{{$code->id}}">{{$code->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/selectize.min.js')}}"></script>
    <script>
        $('select').selectize({
            create: false,
        });
    </script>
@endsection
