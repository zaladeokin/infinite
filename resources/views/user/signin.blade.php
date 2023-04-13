@extends('layout.products')

@push('meta_link')
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endpush

@section('menu')
@include('partials.auth',['title'=> 'Sign Up', 'link'=> 'user.create'])
@endsection

@section('content')

<section class="user-form">
    <form method="POST" action="" id="signIn">
        @csrf
        <fieldset form="signIn">
            <legend>Sign In</legend>
            <div><label for="email">Email</label><input type="email" name="email" required="required" id="email">
            @error('email')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <div><label for="password">Password</label><input type="password" name="password" required="required" id="password">
            @error('password')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <label><input type="submit" value="Sign In"></label>
        </fieldset>
    </form>
</section>
 
@endsection