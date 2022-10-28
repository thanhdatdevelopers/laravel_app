@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>CREATE PRODUCT</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('product.index')}}" class="btn btn-primary float-end">LIST PRODUCTS</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('product.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h3>Title</h3>
                                <input type="text" name="title" placeholder="Input title" required>
                            </div>
                            <div class="form-group">
                                <h3>Description</h3>
                                <input type="text" name="description" placeholder="Input description" required>
                            </div>
                            <div class="form-group">
                                <h3>Short_notes</h3>
                                <input type="text" name="short_notes" placeholder="Input short_notes" required>
                            </div>
                            <div class="form-group">
                                <h3>Price</h3>
                                <input type="text" name="price" placeholder="Input price" required>
                            </div>
                            <div class="form-group">
                                <h3>Image</h3>
                                <input type="text" name="image" placeholder="Input image" required>
                            </div>
                            <div class="form-group">
                                <h3>Slug</h3>
                                <input type="text" name="slug" placeholder="Input slug" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">SAVE</button>
                </form>
            </div>
        </div>
    </div>
@endsection