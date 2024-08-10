{{-- Need to change extends blade  later...--}}
@extends('layouts.app')

@section('title', 'My Items')
@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')
<h4 class="ms-5 color-gray-1">My items</h4>
<div class="col-md-8 mx-auto">
    <div class="container">
        {{-- Tab --}}
        <ul class="nav nav-tabs border-bottom-0 border-dark">
            <li class="nav-item">
                <a href="{{route('myitems.favorites')}}" class="nav-tab-link text-decoration-none border border-dark border-bottom-0 py-2 px-4  {{ request()->is('myitems/favorites') ? 'active' : '' }}">My favorite items</a>
            </li>
            <li class="nav-item">
                <a href="{{route('myitems.donated')}}" class="nav-tab-link border border-dark border-bottom-0 text-decoration-none py-2 px-4 {{ request()->is('myitems/donated') ? 'active' : '' }}">My donated items</a>
            </li>
        </ul>
        <div class="tab-content pt-2">
            @yield('items-content')
        </div>
    </div>
</div>

{{-- add Pagination link--}}
{{-- <div class="pagination">   
    {{ $category_items->links('users.categories.pagination_each_category') }}
</div> --}}
@endsection