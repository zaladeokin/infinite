@extends('layout.products')

@push('meta_script')
<script src="{{asset ('js/promo.js') }}"></script>
@endpush

@section('menu')
    @include('partials.search')
    @include('partials.cart')
    @include('partials.auth',['title'=> 'Sign In', 'link'=> 'user.index'])
@endsection

@section('promotion')
    @include('partials.promotion')
@endsection

@section('content')

@unless(count($topSale) == 0 )
<h2 class="promotion">Top sales</h2>
    <section id="top-sale">
        <!--- Top sale-->
        @each('partials.listTemp', $topSale, 'product')
    </section>
@endunless

@unless(count($products) == 0 )
    <x-listProduct>

        @slot('title')
        <h2>Featured Product</h2>
        @endslot
        @each('partials.listTemp', $products, 'product')
        
    </x-listProduct>
@endunless

@endsection

@push('footerScript')
{{--Remender to @push('meta_script') at the top--}}
<script>
    var url= ['images/promotion/promo2.png', 'images/promotion/promo3.png', 'images/promotion/promo2.png', 'images/promotion/promo1.png'];
    id= "promotion";
    clas="indicator";
    console.log("Initializing init_Display("+id+", "+clas+", "+url+")");
    init_Display(id, clas, url);
</script>
@endpush
