@extends('layouts.app')

@section('title', 'Thank you for shopping')

@section('content')

    <div class="py-3 pyt-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="p-4 shadow bg-white">

                        <h4> Thank you for shopping with Motomart!</h4>
                        <div class="mt-5">
                            <a href="{{ url('collections') }}" class="btn btn-primary">Shop now!</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection