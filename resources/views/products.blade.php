@extends('includes/app')
@section('stylesheet')
<style>
    .product {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        margin: auto;
    }

    .main-heading h2 {
        font-weight: 700;
        text-transform: uppercase;
        padding: 15px;
        border-bottom: 2px solid;

    }

    .product-image>img {
        width: 100px;
        height: 100px;
    }

    .product-specification {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        width: 100%;
    }

    .product-image {
        width: 30%;
        text-align: center;
    }

    .product-content {
        width: 70%;
    }
</style>

@endsection
@section('content')
<div class="container my-4">
    <div class="main-heading my-4">
        <h2 class="text-center">
            Products list
        </h2>
    </div>

@if (count($products)>0)
    @foreach($products as $product)

    <div class="product my-3 p-3 border">
        <div class="product-image">
            <img src="./images/{{$product->image}}" alt="...">
        </div>
        <div class="product-content">
            <h3 class="product-title py-2">{{$product->title}}</h3>
            @if ($product->desc)
            <p class="product-text pt-1">{{$product->desc}}</p>
            @endif
            <div class="product-specification">
                <h5 class="product-price">Price - {{$product->price}}</h5>
                <h5 class="product-qty">Available Products - {{$product->qty}}</h5>
                @if ($product->date)
                <h5 class="product-date">Updated On - {{$product->date}}</h5>
                @endif
            </div>

        </div>
    </div>
    @endforeach
    <div class="products-btn">
        <a href="\" class="btn btn-info my-3">Add More Products</a>
    </div>
    @else
    <div class="main-heading">
        <h2>
            No Data found.....
        </h2>
    </div>
    <div class="products-btn">
        <a href="\" class="btn btn-info my-3">Add Products</a>
    </div>
@endif

</div>
@endsection