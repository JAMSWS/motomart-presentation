@extends('layouts.app')

@section('title', 'Featured Products | Motomart')

@section('content')

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">

        <div class="heading_container heading_center mb-5">
            <h2>
               Featured <span>Products</span>
            </h2>
         </div>
                @forelse ($featuredProducts as $productItem)
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            <label class="stock bg-success">New</label>
                                @if ($productItem->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                                </a>
                                @endif

                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">{{ $productItem->brand }}</p>
                                <h5 class="product-name">
                                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                            {{$productItem->name}}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">₱{{ number_format($productItem->selling_price, 2) }}</span>
                                    <span class="original-price">₱{{ number_format($productItem->original_price, 2) }}</span>
                                </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-md-12 p-2">
                        <h4>No Featured Products Available</h4>
                    </div>
                @endforelse
                    <div class="text-center">
                        <a href="{{ url('collections') }}" class="btn btn-warning">Shop More</a>
                    </div>

            </div>


        </div>
    </div>
</div>

@endsection
