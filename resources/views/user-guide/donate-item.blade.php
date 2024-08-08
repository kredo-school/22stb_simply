@extends('layouts.user-guide')

@section('title', 'User Guide Donate Item')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">How to donate your item ?</h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center" style="margin-top: 80px; margin-left:80px;">                
                <p>1. Go to the add item / edit item page.</p>
                <p>2. Check the box next to “Donation”</p>
                <p>3. Click the SAVE or  UPDATE button.</p>
            </div>
            
            <div>
                <p class="h4 fw-bold mt-4" style="margin-left: 54px; line-height: 1.6;">You can see  all your donation items on the  profile page.</p>
            </div>

        </div>
        <div class="col d-flex align-items-center">
            <img src="#" alt="Donate Item Image" class="image-border mx-auto mt-5">
        </div>
    </div>
</div>
@endsection