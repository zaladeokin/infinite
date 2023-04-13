@extends('layout.products')

@push('meta_link')
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endpush

@section('menu')
@include('partials.auth',['title'=> 'Sign In', 'link'=> 'user.index'])
@endsection

@section('content')

<section class="user-form">
    <form method="POST" action="{{ route('user.store') }}" id="signUp" novalidate>
        @csrf
        <fieldset form="signUp">
            <legend>Sign Up</legend>
            <div><label for="name">Fullname</label><input type="text" name="name" placeholder="Alice Ali" required="required" id="name" value="{{ old('name') }}">
            @error('name')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <div>Gender&nbsp;<input type="radio" name="gender" value="0" required="required" id="male" {{ (old('gender')== "0") ? "checked" : "" }}> <label for="male">Male</label><input type="radio" name="gender" value="1" required="required" id="female" {{ (old('gender')== "1") ? "checked" : "" }}> <label for="female">Female</label>
            @error('gender')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <div><label for="phone">Phone Number</label><input type="tel" name="phone" placeholder="08000000000" required="required" id="phone" value="{{ old('phone') }}">
            @error('phone')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <div><label for="email">Email</label><input type="email" name="email" required="required" id="email" value="{{ old('email') }}">
            @error('email')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <div><label for="password">Password</label><input type="password" name="password" required="required" id="password">
            @error('password')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <div><label for="c-password">Confirmed Password</label><input type="password" name="password_confirmation" required="required" id="c-password"></div>
            <div><label for="address">Address</label><input type="text" name="address" required="required" id="address" value="{{ old('address') }}">
            @error('address')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <div><label for="city">City</label><input type="text" name="city" required="required" id="city" value="{{ old('city') }}">
            @error('city')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <div><label for="country">Country</label><input type="text" name="country" required="required" id="country" value="{{ old('country') }}">
            @error('country')
                <span class="error">*&nbsp;{{ $message }}</span>
            @enderror
            </div>
            <input type="submit" value="Sign Up">
        </fieldset>
    </form>
</section>
 
@endsection