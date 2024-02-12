@extends('layouts.app')

@section('title', 'Motomart! Motocycle Parts Shop')

@section('content')

            <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">



            <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
            <link rel="stylesheet" href="{{ asset('assets/css/carousel-style.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">


{{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">

    <div class="carousel-inner">

     @foreach ($sliders as $key => $sliderItem)
    <div class="carousel-item {{ $key == 0 ? 'active':''}} active">
        @if ($sliderItem->image)
        <img class="d-block w-100" src="{{ asset("$sliderItem->image") }}" alt="First slide">
        @endif

        <div class="carousel-caption d-none d-md-block">

            <h5>{{ $sliderItem->title}}</h5>
            <p>{{ $sliderItem->description}}</p>
        </div>
    </div>
    @endforeach
    </div>


    <button class="carousel-control-prev" type="button" data-bs-target="">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next"  type="button" data-bs-target="" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>


</div> --}}


<section>
    {{-- work --}}
    <div class="container">
        <div class="row">

            <div class="col-md-15" style="transform: translate(0%, -6%);">
                <div class="hero featured-carousel owl-carousel">
                    @foreach ($sliders as $key => $sliderItem)
                    <div class="item" {{ $key == 0 ? 'active':''}}>
                        <div class="work">

                            @if ($sliderItem->image)
                            <div class="img d-flex align-items-center justify-content-center" >
                                <img src="{{ asset("$sliderItem->image") }}" alt="">
                            </div>
                             @endif

                             <div class="carousel-caption d-none d-md-block">

                                <h5>{{ $sliderItem->title}}</h5>
                                <p>{{ $sliderItem->description}}</p>
                                <div>
                                    <button href="#" class="btn btn-slider text text-white">Shop now!</button>
                                </div>

                            </div>

                        </div>

                    </div>
                    @endforeach


                </div>


            </div>
        </div>
    </div>


    {{-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

        <div class="carousel-inner">

            @foreach ($sliders as $key => $sliderItem)
            <div class="item" {{ $key == 0 ? 'active':''}}>
                @if ($sliderItem->image)
                <img src="{{ asset("$sliderItem->image") }}" class="d-block w-100" alt="...">
                @endif

                <div class="carousel-caption d-none d-md-block">
                    <div class="custom-carousel-content">


                     <h5>{{ $sliderItem->title}}</h5>
                     <p>{{ $sliderItem->description}}</p>

                     <div>
                        <a href="#" class="btn btn-slider">Get Now</a>
                     </div>


                </div>
                </div>
            </div>

            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}
</section>

<!-- product section -->
<section class="product_section layout_padding" style="background-color: #eee;" >
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Featured <span>products</span>
          </h2>
       </div>
       <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="" class="option1">
                      Add To Cart
                      </a>
                      <a href="" class="option2">
                      Buy Now
                      </a>
                   </div>
                </div>
                <div class="img-box">
                   <img src="{{ asset('assets/images/RIM, MAGWHEEL.jpg') }}" alt="RIM, MAGWHEEL">
                </div>
                <div class="detail-box">
                   <h5>
                    RIM, MAGWHEEL, RR (GOLD) ICON 110
                   </h5>
                   <h6>
                    ₱4980
                   </h6>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="" class="option1">
                      Add To Cart
                      </a>
                      <a href="" class="option2">
                      Buy Now
                      </a>
                   </div>
                </div>
                <div class="img-box">
                   <img src="{{ asset('assets/images/COD Motorcycle Shock for XRMWAVE 310mm One Pair.jpg') }}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                    COD Motorcycle Shock for XRM/WAVE 310mm One Pair
                   </h5>
                   <h6>
                    ₱2510
                   </h6>
                </div>
             </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="" class="option1">
                      Add To Cart
                      </a>
                      <a href="" class="option2">
                      Buy Now
                      </a>
                   </div>
                </div>
                <div class="img-box">
                   <img src="{{ asset('assets/images/PDD motorcycle.jpg') }}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                        PDD Motorcycle Brake Lever For XRM (RIGHT)
                   </h5>
                   <h6>
                    ₱4980
                   </h6>
                </div>
             </div>
          </div>




       </div>
       <div class="btn-box">
          <a href="">
          View All products
          </a>
       </div>
    </div>
 </section>
 <!-- end product section -->







<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>




@endsection
