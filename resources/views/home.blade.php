@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="mt-2">Sales DashBoard</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="card m-4  bg-primary">
                    <div class="card-body">
                        <h4 class="card-title text-light">Today Sales</h4>
                        <p class="card-text text-light text-center">122</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-4 bg-success">
                    <div class="card-body">
                        <h4 class="card-title text-light">Yesterday Sales</h4>
                        <p class="card-text text-light text-center">202</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card m-4  bg-info">
                    <div class="card-body">
                        <h4 class="card-title text-light">This Month Sales</h4>
                        <p class="card-text text-light text-center">122</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-4 bg-warning">
                    <div class="card-body">
                        <h4 class="card-title text-light">Last Month Sales</h4>
                        <p class="card-text text-light text-center">202</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ url('/addproduct') }}" class="btn btn-success btn-lg">Add New Product</a>
            </div>
        </div>
    </div>
@endsection
