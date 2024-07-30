@extends('layouts.app')

@section('title', 'Donated Items')

<link rel="stylesheet" href="{{asset('css/donated-items.css')}}">
@yield('css')

@section('content')

<div class="container-fluid" style="width: 950px;">
    <h1 class="title-donation mb-3">Donated Items</h1>

    <div class="row row-cols-5 d-flex">
        @foreach ($donationItems as $donationItem)
            <div class="col grid-item">
                <div class="item-container">
                    <a href="{{ route('donated.item.show', $donationItem->id) }}">
                        <img class="image-md-lg" src="{{ asset($donationItem->item->image) }}" alt="{{ $donationItem->item->name }}"/>
                    </a>
                    <button class="bookmark"><i class="fa-solid fa-bookmark"></i></button>
                    <div class="row">
                        <div class="col">
                            <p class="grid-text mb-0 mt-2 text-start">{{ $donationItem->created_at->format('Y/m/d') }}</p>
                            <p class="grid-text">{{ $donationItem->user->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @if (($loop->index + 1) % 5 == 0)
                </div><div class="row row-cols-5 d-flex">
            @endif
        @endforeach
    </div>

    <!-- Pagination Controls -->
    <div class="d-flex justify-content-center">
        {{ $donationItems->links('pagination.pagination') }}
    </div>
    
</div>
@endsection


