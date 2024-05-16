@extends('layouts.app')
@section('main')
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
</tr>
</thead>
    <tbody>
        @php $total = 0 @endphp
            @foreach($products as $product)
                @php $total += $product['price'] * $product['qty'] @endphp
                <tr data-id="{{ $product->id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-9"><h4 class="nomargin">{{ $product['name'] }}</h4></div>
                        </div>
                    </td>
                    <td data-th="Price">LKR {{ $product['price'] }}</td>
                    <td data-th="Quantity">{{$product['qty']}}</td>
                    <td data-th="Subtotal" class="text-center">LKR {{ $product['price'] * $product['qty'] }}</td>
                </tr>
            @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align:right;"><h3><strong>Total LKR {{ $total }}</strong></h3></td>
        </tr>
    </tfoot>
</table>

<div class="col-md-8">
<form action="/order" method="post">
              @csrf
                <!-- 1st row -->
                <div class="row  mb-3">
                    <div class="col md-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control @if($errors->has('name')){{'is-invalid'}} @endif" value="{{$user->name}}" placeholder="Enter Your Name">
                        @if($errors->has('name'))
                        <div class="invalid-feedback">{{$errors->first('name')}}</div>                        
                        @endif
                    </div>
                </div>
                <!-- 2nd row -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="email" class="form-label">E-mail Address</label>
                        <input type="email" name="email" id="email" class="form-control @if($errors->has('email')){{'is-invalid'}} @endif" value="{{$user->email}}" placeholder="Enter your email address" readonly>
                        @if($errors->has('email'))
                        <div class="invalid-feedback">{{$errors->first('email')}}</div>                        
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="mobile" class="form-label">Mobile number</label>
                        <input type="text" name="mobile" id="mobile" class="form-control @if($errors->has('mobile')){{'is-invalid'}} @endif" value="{{$user->mobile}}" placeholder="Enter mobile number">
                        @if($errors->has('mobile'))
                        <div class="invalid-feedback">{{$errors->first('mobile')}}</div>                        
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
    <div class="col-md-12">
        <label for="address" class="form-label">Address</label>
        <textarea name="address" id="address" class="form-control @if($errors->has('address')){{'is-invalid'}}@endif" placeholder="Enter address" rows="4" style="resize:none; height:150px">{{$user->address}}</textarea>
        @if($errors->has('address'))
        <div class="invalid-feedback">{{$errors->first('address')}}</div>                        
        @endif
    </div>
</div>

    <a href="/cart" class="btn btn-danger"> <i class="fa fa-arrow-left"></i>Cancel</a>
    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Place order</button>
</form>

@endsection
