@extends('layout.products')

@push('meta_link')
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endpush

@section('title', "Infinite|$prod->product_name")

@section('menu')
    @include('partials.cart')
    @include('partials.auth',['title'=> 'Sign In', 'link'=> 'user.index'])
@endsection

@section('content')

<section id="product_show">
    <img src="{{ asset($prod->image_path) }}" alt="{{ $prod->product_name }}">
    {{-- Work on image slide to see different image of item --}}
    {{--<img src="{{ asset('images/product/underwears.png') }}" alt="">
    <img src="{{ asset('images/product/underwears.png') }}" alt="">
    <button id="prev"><</button>3 images<button id="next">></button>--}}
</section>
<section id="product_info">
    <span><h2>{{ $prod->product_name }}</h2></span>
    <span><h3>Product description</h3>{{ $prod->description }}</span>
    <span><strong>Sex</strong>&nbsp;:&nbsp;{{ $prod->sex }}</span>
    <span><strong>Class</strong>&nbsp;:&nbsp;{{ $prod->age_group }}</span>
    <span><strong>Brand</strong>&nbsp;:&nbsp;{{ $prod->brand }}</span>
    <span><strong>Price</strong>&nbsp;:&nbsp;${{ $prod->price }}</span>
    <span><small>&nbsp;&nbsp;{{ $prod->quantity }}</small></span> 
    <span><strong>Quantities <input type="number" min="0" max="{{ $prod->quantity }}" value="1"></strong></span>
    <button>Add to cart</button>
</section>

@unless(count($products) == 0 )
<x-listProduct>

    @slot('title')
    <h2>You may also like this products</h2>
    @endslot
    
    @each('partials.listTemp', $products, 'product')
    
</x-listProduct>
@endunless

@endsection
 