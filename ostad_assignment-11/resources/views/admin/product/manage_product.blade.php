@extends('admin.master')
@section('title')
Product List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Product List</h4>
            
            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Sl No</td>
                            <th> Product Name</th>
                            <th> Product Price</th>
                            <th> Product Quantity</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $i = 1 @endphp
                    @foreach ($products as $product)
                        <tr class="table-warning">
                            <td>{{ $i++ }}</td>
                            <td>{{ $product->product_name}}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->product_quentity }}</td>
                            <td class="d-flex justify-content">
                            <a href=" {{route ('edit.product',['id'=>$product->id])}}" class="btn btn-success me-2"
                                data-bs-toggle="tooltip" title="Edit">Edit</a>
                            <form action="{{ route('delete.product')}}" method="POST" id="delete">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id}}">
                                <button type="submit" class="btn btn-danger" title="Delete"
                                    onclick="return confirm('Are You Sure delete this!!')" data-bs-toggle="tooltip"
                                    title="Delete">Delete</i></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection