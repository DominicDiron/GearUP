@extends('layouts.app')
@section('main')


        <div class="d-flex justify-content-between">
          <h5><i class="bi bi-journal-richtext"></i> Products</h5>
          <a href="/cart"  class="btn btn-warning btn-sm"><i class="bi bi-cart"></i> {{$user->name}}</a>
          <a href="/logout"  class="btn btn-success btn-sm"><i class="bi bi-pen"></i> Logout</a>
        </div>

        <div class="col-md-12 table-responsive mt-3">
    
<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
            <div class="card">
            <a href="/{{$product->id}}/show"><img src="{{ asset('products') }}/{{ $product->image }}" alt="Product" class="card-img-top"></a>
                <div class="card-body">
                    <h4 class="card-title">{{ $product->name}}</h4>
                    <p class="card-text">{{ $product->description}}</p>
                    <p class="fw-semibold">M.R.P : <small class="text-danger text-decoration-line-through">Rs. {{$product->mrp}}</small></p>
                    <p><strong>Price: </strong> LKR {{ $product->price}}</p>
                    <p class="btn-holder"><a href="{{ route('add_to_cart', [$product->id,$user->id]) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection