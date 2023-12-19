@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="mt-4">Product Management</h2>
        <hr>
        <div class="row">
            <div class="col-md-5">
                <form action="" method="POST">
                    @csrf
                    <label for="name" class="form-label text-bold">Product Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Enter Product Name">
                    <label for="quantity" class="form-label text-bold">Quantity</label>
                    <input class="form-control" type="text" name="quantity" placeholder="Enter Quantity">
                    <label for="price" class="form-label text-bold">Price</label>
                    <input class="form-control" type="text" name="price" placeholder="Enter Price">
                    <br>
                    <button type="submit" class="form-control btn btn-primary">Add Product</button>
                </form>
                <hr>
                <a href="{{ url('/') }}" class="btn btn-success text-light w-100">Sale Product</a>
                <a href="{{ url('/') }}" class="btn btn-dark text-light w-100 mt-2">Goto Dashboard</a>
            </div>
            <div class="col-md-7">
                <h3>Product List</h3>
                <hr>
                <table class="table">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td><a href="{{ url('/edit', $product->id) }}" class="btn btn-success btn-sm">Update</a>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>

        </div>

    </div>

    <div class="pad-bottom"></div>
@endsection
