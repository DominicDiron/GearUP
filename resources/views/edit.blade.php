@extends('layouts.app')
@section('main')
        <h5><i class="bi bi-pencil-square"></i> Edit Product</h5><hr>
        
        <nav class="my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Edit Item</li>
            </ol>
        </nav>

        <div class="col-md-8">
            <form action="#" method="post">
                <!-- 1st row -->
                <div class="row  mb-3">
                    <div class="col md-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product Name">
                    </div>
                </div>
                <!-- 2nd row -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="mrp" class="form-label">MRP</label>
                        <input type="text" name="mrp" id="mrp" class="form-control" placeholder="Enter M.R.P">
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Selling Price</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Enter Selling Price">
                    </div>
                </div>

                <!-- 3rd row -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" style="resize:none; height:150px" placeholder="Enter Description"></textarea>
                    </div>
                </div>

                <!-- 4th row -->
                <div class="row  mb-3">
                    <div class="col md-12">
                        <label for="image" class="form-label">Product Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>

                <!-- 5th row -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Update Product</button>
                    <button type="reset" class="btn btn-danger">Clear All</button>
                </div>
            </form>
        </div>
@endsection