@extends('layouts.app')
@section('title')
    Broadcast Sms to users
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Broadcast SMS to users</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('send_sms') }}" aria-label="create Possible Event">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Message</label>

                                <div class="col-md-6">
                                    <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}"
                                              id="message" rows="10" name="message"
                                              required autofocus
                                              onkeyup="countChar(this)">{{ old('message') }}</textarea>
                                    <div id="charNum"></div>
                                    @if ($errors->has('message'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        send
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
@section('scripts')
    <script>
        function countChar(val) {
            var len = val.value.length;
            $('#charNum').text(len + ' characters');
        }
    </script>
@endsection