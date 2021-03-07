@extends('front_layouts.app')
@section('title')
Home
@endsection
@section('css')

@endsection
@section('content')

<!-- banner starts -->
<section class="banner banner-style-1">
    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($slider as $slide)
                <div class="swiper-slide" style="background-image:url(<?php echo url('uploads/slider/' . $slide['image']); ?>)">
                    <div class="swiper-content">
                        <h1 data-animation="animated fadeInUp">{{ $slide['title'] ?? '' }}</span></h1>
                        @if($slide['link'] != "")
                        <a href="{{ $slide['link'] }}" data-animation="animated fadeInUp" class="slider-btn btn-or mar-right-10">View</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="overlay"></div>
    </div>

    <div class="banner-form form-style-2">
        <div class="form-content">
            <div class="form-title">
                <h4 class="mar-0">Reserve Your Package</h4>
            </div>
            <div class="form-content-inner">
                <div class="table-item">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="da" class="form-control" value="Name">
                        </div>
                    </div>
                </div>
                <div class="table-item">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="da" class="form-control" value="Email">
                        </div>
                    </div>
                </div>
                <div class="table-item">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="da" class="form-control" value="Mobile">
                        </div>
                    </div>
                </div>
                <div class="table-item">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="da" class="form-control" value="Destination">
                        </div>
                    </div>
                </div>
                <div class="table-item">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <textarea style="background: #f1f1f1;" class="form-control" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                </div>

                <div class="table-item">
                    <div class="form-btn">
                        <a class="btn btn-orange">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner Ends -->

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="about-para mar-top-50">
                    <h3>About Us</h3>
                    <h4>Pick a room that best suits your taste and budget</h4>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. </p>
                    <h5 class="text-capitalize">eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incid dolor sit amet, consectetur, adipisci velit</h5>
                    <div class="about-para-list mar-top-20">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="about-icon"><i class="fa fa-chess-queen"></i> Awesome Nature</div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="about-icon"><i class="fa fa-chess-queen"></i> Awaded Best Hotel</div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="about-icon"><i class="fa fa-chess-queen"></i> Online Booking</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-us-image mar-top-50">
                    <img src="<?php echo  url('/') . '/assets/images/gallery/gallery1.jpg' ?>" alt="image">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- room list starts -->

<!-- popular start -->
<section class="room-list">
    <div class="container">
        <div class="section-title">
            <h2>Popular <span>Packages</span></h2>
        </div>
        <div class="list-content">
            <div class="row">
                @foreach($popularData as $item)
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="max-height: 200px;" src="{{url('/uploads/packages').'/'.$item['main_image']}}" alt="{{ $item['name'] }}">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <p><i class="fa fa-inr"></i> Rs.{{ $item['price'] }}</p>
                                <div class="deal-rating">
                                    <?php
                                    for ($i = 1; $i <= $item['star_rating']; $i++) {
                                    ?>
                                        <span class="fa fa-star checked"></span>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <h5 style="min-height: 60px;max-height: 60px;">
                                    <a href="{{ url('packages') }}/{{ $item['id'] }}/{{ Str::slug($item['name'],'_') }}">
                                        {{ substr($item['name'], 0, 50)}}
                                    </a>
                                </h5>
                            </div>
                            <div class="room-services mar-bottom-15">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="fa fa-clock" aria-hidden="true"></i> {{ $item['duration_day'] }} - {{ $item['duration_night'] }}
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $item->Destination['name'] }}
                                    </div>
                                </div>
                            </div>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p> -->
                            <div class="room-btns">
                                <!-- <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a> -->
                                <center> <a href="{{ url('packages') }}/{{ $item['id'] }}/{{ Str::slug($item['name'],'_') }}" class="btn btn-orange">VIEW DETAILS</a></center>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
<!-- room list Ends -->


<!-- Services Starts -->
<section class="services service-style-1">
    <div class="container">
        <div class="section-title">
            <h2>Explore <span>Destination</span></h2>
        </div>
        <div class="service-outer">
            <div class="row">
                @if($destinationData->count() > 0)
                @foreach($destinationData as $dest)


                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="service-item">
                        <div class="service-image">
                            <img style="max-height: 300px; min-height: 300px;" src="<?php echo url('/uploads/destination') . '/' . $dest["image"]; ?>" alt="Image">
                        </div>
                        <div class="service-content">
                            <h4><a href="{{ url('destination').'/'.$dest['id'].'/'.Str::slug($dest['name'],'_') }}">{{$dest['name']}}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Services Ends -->

<section class="room-list">
    <div class="container">
        <div class="section-title">
            <h2>Latest <span>Packages</span></h2>
        </div>
        <div class="list-content">
            <div class="row">
                @foreach($packagesData as $item)
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="room-item">
                        <div class="room-image">
                            <img style="max-height: 200px;" src="{{url('/uploads/packages').'/'.$item['main_image']}}" alt="{{ $item['name'] }}">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <p><i class="fa fa-inr"></i> Rs.{{ $item['price'] }}</p>
                                <div class="deal-rating">
                                    <?php
                                    for ($i = 1; $i <= $item['star_rating']; $i++) {
                                    ?>
                                        <span class="fa fa-star checked"></span>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <h5 style="min-height: 60px;max-height: 60px;">
                                    <a href="{{ url('packages') }}/{{ $item['id'] }}/{{ Str::slug($item['name'],'_') }}">
                                        {{ substr($item['name'], 0, 50)}}
                                    </a>
                                </h5>
                            </div>
                            <div class="room-services mar-bottom-15">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="fa fa-clock" aria-hidden="true"></i> {{ $item['duration_day'] }} - {{ $item['duration_night'] }}
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $item->Destination['name'] }}
                                    </div>
                                </div>
                            </div>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p> -->
                            <div class="room-btns">
                                <!-- <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a> -->
                                <center> <a href="{{ url('packages') }}/{{ $item['id'] }}/{{ Str::slug($item['name'],'_') }}" class="btn btn-orange">VIEW DETAILS</a></center>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <a href="<?php echo route('front.packages') ?>" class="btn btn-orange mar-right-10">EXPLORE ALL Packages</a>
                    </center>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- room list Ends -->



<!-- Reviews Starts -->
<section class="reviews reviews-style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <div class="section-title title-white mar-0">
                    <h4 class="white">What People Says</h4>
                    <h2>Happy Explore <span>Reviews</span></h2>
                    <p class="mar-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
                    <a href="testimonial.html" class="btn btn-orange">View More</a>
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="review-slider1">
                    <div class="slider-item">
                        <div class="slider-image">
                            <img src="{{ url('assets/images/review1.jpg')}}" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Micheal Clordy</h4>
                            <span>Germany</span>
                        </div>
                        <div class="slider-quote">
                            <img src="{{ url('assets/images/icons/quote.png')}}" alt="Image">
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-image">
                            <img src="{{ url('assets/images/review2.jpg')}}" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Ketty Perry</h4>
                            <span>Australia</span>
                        </div>
                        <div class="slider-quote">
                            <img src="{{ url('assets/images/icons/quote.png')}}" alt="Image">
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-image">
                            <img src="{{ url('assets/images/review1.jpg')}}" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Micheal Clordy</h4>
                            <span>Germany</span>
                        </div>
                        <div class="slider-quote">
                            <img src="{{ url('assets/images/icons/quote.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- Reviews Ends -->


@endsection
@section('javascript_code')
<script>
    $(document).ready(function() {

    });
</script>
@endsection