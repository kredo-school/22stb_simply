@extends('layouts.app')

@section('title', 'homepage')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/homepage.css') }}">

<div class="body">
    <div class="float-start ms-4">
       <h2 class="pagename">Home</h2>
    </div>

    <div class="container d-flex justify-content-start">
        <div class="container-box pt-5">
        @foreach($categories as $category)
            <div class="d-flex flex-row">
                <div class="category-box my-3 mx-5 text-center">
                    <h1 class="category-name">{{ $category->name }}</h1>
                    <h4 class="number-item">{{ $category->item->count()}}items</h4>
                    <a data-bs-toggle="modal" data-bs-target="#edit_category-{{ $category['id'] }}" class="btn text-decoration-none"><i class="icon fa-solid fa-pen"></i></a>
                    <a data-bs-toggle="modal" data-bs-target="#delete_category-{{ $category['id'] }}" class="btn text-decoration-none"><i class="icon fa-solid fa-trash-can"></i></a>
                </div>

                @forelse($category->item->take(4) as $item)
                    <div class="item-box rounded-4 me-3">
                        <a href="#">
                            <img class="img-item" src="{{ $item->image }}" />
                            </a>
                    </div>
                @empty
                    <div class="no-item-box ms-2 me-3 rounded-3">
                        <h1 class="no-item text-center my-5">No item</h1>
                    </div>
                @endforelse

                <div class="item-box rounded-3 p-3">
                    <a href="#" class="add-item text-decoration-none text-center my-4 me-0">+</a>
                </div>
                @if($category->item->isNotEmpty())
                    <div class="my-5">
                        <a href="#" class="see-all text-decoration-none text-center ms-2">>></a>
                    </div>
                @endif
            </div>
            @include('users.categories.modals.edit_category')
            @include('users.categories.modals.delete_category')
        @endforeach
        </div>
    </div>

    <div>
        <div class="d-flex flex-row justify-content-center me-4 mt-0">
            <button type="button" data-bs-toggle="modal" data-bs-target="#create-category" class="btn category-btn rounded-3 text-center">+ Add category</button>
                    <a href="{{ route('item.add', ['category' => $category->id]) }}" class="btn item-btn ms-5">+ Add item</a>
            {{-- <button typle="button" data-bs-toggle="modal" data-bs-target="#"class="btn item-btn ms-5">+ Add item</button> --}}
        </div>
    </div>

        @else
        <div>
            <div class="d-flex flex-row justify-content-center me-4 mt-0">
                <button type="button" data-bs-toggle="modal" data-bs-target="#create-category" class="btn category-btn rounded-3 text-center">+ Add category</button>

                <button typle="button" data-bs-toggle="modal" data-bs-target="#"class="btn item-btn ms-5">+ Add item</button>
            </div>
        </div>
        @endif
</div>

@include('users.categories.modals.create_category')

@endsection



