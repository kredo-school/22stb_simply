@extends('layouts.user-guide')

@section('title', 'User Guide Login')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">Let's login !</h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center" style="margin-top: 80px; margin-left:100px;">                
                <p class="mb-4">1. Go to the <a href="{{ route('login') }}" class="text-dark fw-bold">Login</a> page.</p>
                <p class="mb-4">2. Fill in username and password.</p>
                <p>3. Click the LOGIN button.</p>
            </div>
        </div>
        <div class="col d-flex align-items-center">
            <img src="{{ asset('images/user-guide/login.png') }}" alt="Login Image" class="image-border mx-auto mt-4">
        </div>
    </div>
</div>
@endsection