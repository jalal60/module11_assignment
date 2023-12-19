@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="mt-4">Update Product</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="name" class="form-label text-bold">Product Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $products->name }}">
                    <label for="quantity" class="form-label text-bold">Quantity</label>
                    <input class="form-control" type="text" name="quantity" value="{{ $products->quantity }}">
                    <label for="price" class="form-label text-bold">Price</label>
                    <input class="form-control" type="text" name="price" value="{{ $products->price }}">
                    <br>
                    <button type="submit" class="form-control btn btn-primary">Update</button>
                </form>
                <hr>
                <a href="{{ url('/') }}" class="btn btn-success text-light w-100">Sale Product</a>
                <a href="{{ url('/') }}" class="btn btn-dark text-light w-100 mt-2">Goto Dashboard</a>
            </div>

        </div>

    </div>

    </div>

    <div class="pad-bottom"></div>
@endsection
