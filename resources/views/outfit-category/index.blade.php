@extends('layouts.app')
@section('title')
    Outfit Categories |
    @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Outfit Categories
                        <a href="{{route('outfit-categories.create')}}" class="btn btn-success btn-sm float-right">add category</a></div>

                    <div class="card-body">
                        <table class="table table-bordered table-responsive-sm">
                            <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td><a href="{{route('outfit-categories.edit', ['outfit_category' => $category->id])}}" class="mb-1 btn btn-sm btn-success">edit</a>
                                        <form action="{{route('outfit-categories.destroy', ['outfit_category' => $category->id])}}" method="post">
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
