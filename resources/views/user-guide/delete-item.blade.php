@extends('layouts.user-guide')

@section('title', 'User Guide Delete Item')

@section('content')
<h2 class="mt-5 ms-3 fw-bold">Delete your item &nbsp;<i class="fa-solid fa-trash-can"></i></h2>

<div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="col d-flex flex-column justify-content-center" style="margin-top: 80px; margin-left:80px;">                
                <p>1. Click the Trash can icon from each <br>&emsp;item page.</p>
                <p>2. Click the DELETE button.</p>
            </div>
            
            <div>
                <p class="h4 fw-bold mt-4 text-danger" style="margin-left:65px; line-height: 1.6;">
                    If you delete the item, it will be deleted permanently. <br>Be careful !
                </p>
            </div>

        </div>
        <div class="col d-flex align-items-center">
            <img src="#" alt="Delete Item Image" class="image-border mx-auto mt-5">
        </div>
    </div>
</div>
@endsection