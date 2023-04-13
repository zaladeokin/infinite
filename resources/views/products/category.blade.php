@extends('layout.products')

@section('title', "Infinite|$catTitle")

@section('menu')
    @include('partials.search')
    @include('partials.cart')
    @include('partials.auth',['title'=> 'Sign In', 'link'=> 'user.index'])
@endsection

@section('content')

<x-listProduct>
    @slot('title')
    <br>
    <fieldset>FILTER
        <label>Sex
            {!! $filter; !!}
        </label>
        <label>Type <select>
            <option> Shirt/top</option>
            <option>Trousers</option>
        </select></label>
        </fieldset><br>
    <h2>{{ $catTitle; }}</h2>
    @endslot
    
    @each('partials.listTemp', $products, 'product', 'partials.emptyResult')
    
</x-listProduct>

@endsection