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
@endsection