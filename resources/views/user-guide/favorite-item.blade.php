@extends('layouts.user-guide')

@section('title', 'User Guide Favorirte Donation Item')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">Add the donation item as your favorite  </h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center" style="margin-top: 80px; margin-left:80px;">                
                <p>1. Go to the Donation page.</p>
                <p>2. Click the Bookmark icon.</p>
                <p class="mb-1">3. The item will be added to your <br>&emsp;favorite list.</p>
                <p class="text-muted small">&emsp;If you want to remove it from your favorite, <br>&emsp;click the icon once again.</p>
            </div>
            
            <div>
                <p class="h4 fw-bold mt-1" style="margin-left:70px; line-height: 1.6;">You can see your favorite items on your profile page.</p>
            </div>

        </div>
        <div class="col d-flex align-items-center">
            <img src="#" alt="favorite donation item Image" class="image-border mx-auto mt-5">
        </div>
    </div>
</div>
@endsection