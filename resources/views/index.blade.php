@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h1>PHP Laravel Project - CRUD Product</h1>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('product.create')}}" class="btn btn-primary float-end">ADD NEW PRODUCT</a>
                    </div>


                </div>
            </div>

            <div class="card-body">

                @if (Session::has('notify'))
                    <div class="alert alert-success">
                        {{Session::get('notify')}}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Product</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Short_notes</th>
                            <th>Price($)</th>
                            <th>Image</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($product as $item)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->short_notes}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->image}}</td>
                                <td>{{$item->slug}}</td>
                                <td>
                                    <form action="{{route('product.destroy', $item->id)}}" method="POST">
                                        <a href="{{route('product.edit', $item->id)}}" class="btn btn-warning">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection