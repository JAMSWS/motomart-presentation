@extends('layouts.app')

@section('title', 'Search Product | Motomart')

@section('content')

<div class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center"> <!-- Centering the row -->
            <div class="col-md-10"> <!-- Moved the col-md-10 outside the loop -->
                <div class="heading_container heading_center mb-5">
                    <h4>
                       Search Result
                    </h4>
                </div>
                <div class="d-flex flex-wrap"> <!-- Flex container to make product cards equal height -->
                    @forelse ($searchProducts as $productItem)
                        <div class="product-card flex-grow-1 mb-4"> <!-- Added flex-grow-1 to make cards fill the available space -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-card-img">
                                        <label class="stock bg-success">New</label>
                                        @if ($productItem->productImages->count() > 0)
                                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                                <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-9">
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
                                        <p style="height: 45px; overflow: hidden;">
                                            <b>Description:</b> {{ $productItem->description }}
                                        </p>
                                        <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}"
                                            class="btn btn-outline-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12 p-2">
                            <h4>No such Products Found</h4>
                        </div>
                    @endforelse


                </div>

                <div>
                    {{ $searchProducts->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
