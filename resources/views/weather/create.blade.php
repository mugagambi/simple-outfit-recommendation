@extends('layouts.app')
@section('title')
    Add Daily Weather
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Daily Weather</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('weather.store') }}"
                              aria-label="create weather group">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Place</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}"
                                           name="place" value="{{ old('place') }}" required autofocus>
                                    @if ($errors->has('place'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Place Short Code</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control{{ $errors->has('place_short_code') ? ' is-invalid' : '' }}"
                                           name="place_short_code" value="{{ old('place_short_code') }}" required
                                           autofocus>
                                    @if ($errors->has('place_short_code'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('place_short_code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Day</label>

                                <div class="col-md-6">
                                    <input id="name" type="date"
                                           class="form-control{{ $errors->has('day') ? ' is-invalid' : '' }}"
                                           name="day" value="{{ old('day') }}" required autofocus>
                                    @if ($errors->has('day'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('day') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Temperature</label>

                                <div class="col-md-6">
                                    <input id="name" type="number"
                                           class="form-control{{ $errors->has('temperature') ? ' is-invalid' : '' }}"
                                           name="temperature" value="{{ old('temperature') }}" required autofocus>
                                    <small id="emailHelp" class="form-text text-muted">&#8451;</small>
                                    @if ($errors->has('temperature'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('temperature') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Precipitation</label>

                                <div class="col-md-6">
                                    <input id="name" type="number"
                                           class="form-control{{ $errors->has('precipitation') ? ' is-invalid' : '' }}"
                                           name="precipitation" value="{{ old('precipitation') }}" required autofocus>
                                    <small id="emailHelp" class="form-text text-muted">%</small>
                                    @if ($errors->has('precipitation'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('precipitation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Wind</label>

                                <div class="col-md-6">
                                    <input id="name" type="number"
                                           class="form-control{{ $errors->has('wind') ? ' is-invalid' : '' }}"
                                           name="wind" value="{{ old('wind') }}" required autofocus>
                                    <small id="emailHelp" class="form-text text-muted">Km/H</small>
                                    @if ($errors->has('wind'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('wind') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Humidity</label>

                                <div class="col-md-6">
                                    <input id="name" type="number"
                                           class="form-control{{ $errors->has('humidity') ? ' is-invalid' : '' }}"
                                           name="humidity" value="{{ old('humidity') }}" required autofocus>
                                    <small id="emailHelp" class="form-text text-muted">%</small>
                                    @if ($errors->has('humidity'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('humidity') }}</strong>
                                    </span>
                                    @endif
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
@endsection
