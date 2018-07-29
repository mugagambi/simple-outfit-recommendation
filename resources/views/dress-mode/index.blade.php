@extends('layouts.app')
@section('title')
    Dress Codes |
    @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dress Codes
                        <a href="{{route('dress-code.create')}}" class="btn btn-success btn-sm float-right">add dress code</a></div>

                    <div class="card-body">
                        <table class="table table-bordered table-responsive-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dress_codes as $code)
                                <tr>
                                    <td>{{$code->name}}</td>
                                    <td><a href="{{route('dress-code.edit', ['dress_code' => $code->id])}}" class="mb-1 btn btn-sm btn-success">edit</a>
                                        <form action="{{route('dress-code.destroy', ['dress_code' => $code->id])}}" method="post">
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
