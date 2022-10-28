@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>EDIT PRODUCT</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('product.index')}}" class="btn btn-primary float-end">LIST PRODUCTS</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('product.update', $product->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Title</h3>
                                <input type="text" name="title" value="{{$product->title}}" placeholder="Input title">
                            </div>
                            <div class="form-group">
                                <h3>Description</h3>
                                <input type="text" name="description" value="{{$product->description}}" placeholder="Input description">
                            </div>
                            <div class="form-group">
                                <h3>Short_notes</h3>
                                <input type="text" name="short_notes" value="{{$product->short_notes}}" placeholder="Input short_notes">
                            </div>
                            <div class="form-group">
                                <h3>Price</h3>
                                <input type="text" name="price" value="{{$product->price}}" placeholder="Input price">
                            </div>
                            <div class="form-group">
                                <h3>Image</h3>
                                <input type="text" name="image" value="{{$product->image}}" placeholder="Input image">
                            </div>
                            <div class="form-group">
                                <h3>Slug</h3>
                                <input type="text" name="slug" value="{{$product->slug}}" placeholder="Input slug">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
@endsection