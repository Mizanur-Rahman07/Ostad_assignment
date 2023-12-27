@extends('admin.master')
@section('title')
Update Product
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Product Form</h4>
                    <p class="card-description">
                        
                    </p>
                    <form action="{{ route ('update.product')}}" method="POST" class="forms-sample">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id}}">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Product Name</label>
                            <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}" id="exampleInputUsername1" placeholder="Enter Product Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Product Price</label>
                            <input type="number" class="form-control" name="product_price" value="{{$product->product_price}}" id="exampleInputUsername1" placeholder="Enter Product Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Quantity </label>
                            <input type="number" class="form-control" name="product_quentity" value="{{$product->product_quentity}}" id="exampleInputEmail1" placeholder="Enter Quantity">
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection