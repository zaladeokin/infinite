<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    @stack('meta_link')
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/rwd.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    @stack('meta_script')
    <title>@yield('title', 'Infinite|Homepage')</title>
</head>
<body>
<header>
    <h1>Infinite</h1>
    <section>
        @yield('menu')
    </section>
    <nav>
        <ul>
            <li><a href="{{route('products.index')}}">Home</a></li>
            <li>
                <a href="#">Category</a>
                <ul>
                    <li><a href="{{route('category', ['category'=> 1])}}">Men</a></li>
                    <li><a href="{{route('category', ['category'=> 2])}}">Woman</a></li>
                    <li><a href="{{route('category', ['category'=> 3])}}">Children</a></li>
                </ul>
            </li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About us</a></li>
        </ul>
    </nav>
</header>
<main>
    @yield('promotion')
    @yield('content')
</main>
<footer>
    Social Link
</footer>
@stack('footerScript')
</body>
</html>