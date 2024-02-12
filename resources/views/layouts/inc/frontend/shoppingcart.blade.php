{{-- James Halayahay & Karl Razon --}}
@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('content')

<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">

          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
            {{-- <div>
              <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                    class="fas fa-angle-down mt-1"></i></a></p>
            </div> --}}
          </div>


          {{-- for backend --}}


          <div class="card rounded-3 mb-4 ">
            <div class="card-body p-4">
              <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                  <img
                    src="{{ asset('assets/images/KOBY Metal Polish 200ml High Quality.jpg') }}"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mr-5">
                  <p class="lead fw-normal mb-1 ">KOBY Metal Polish 200ml High Quality</p>

                </div>

                 {{-- Quantity text paragraph --}}
            <div class="col-md-3 col-lg-3 col-xl-2">
                <p class="mb-0 ml-5">Quantity:</p>
            </div>

            {{-- Quantity controls --}}
            <div class="col-md-3 col-lg-3 col-xl-2  d-flex align-items-center">
                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                </button>
            </div>

            <div class="col-md-1 col-lg-1 col-xl-1 ">
                <div class="text-end">
                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                </div>
            </div>

                    <div class="col-md-1 col-lg-1 col-xl-1  text-end">
                        <h5 class="mb-0">₱499</h5>
                    </div>

                </div>
            </div>
        </div>


          <div class="card">
            <div class="card-body">
              <button type="button" class="btn btn-danger btn-block btn-lg">Check Out</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
