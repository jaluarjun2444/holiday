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
                <h4 class="mar-0">Reserve Your Room</h4>
            </div>
            <div class="form-content-inner">
                <div class="table-item">
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="date-range2" class="form-control" value="Check In">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="table-item">
                    <label>Check Out</label>
                    <div class="form-group">
                        <div class="date-range-inner-wrapper">
                            <input id="date-range3" class="form-control" value="Check Out">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="table-item">
                    <label>Guests</label>
                    <div class="form-group form-icon">
                        <select>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
                    </div>
                </div>
                <div class="table-item">
                    <label>Nights</label>
                    <div class="form-group form-icon">
                        <select>
                            <option value="1">0</option>
                            <option value="2">1</option>
                            <option value="3">2</option>
                            <option value="4">3</option>
                            <option value="5">4</option>
                        </select>
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

<!-- about us starts -->
<section class="about-style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-heading">
                    <h2 class="title">Comfort are perfectly combined here</h2>
                    <div class="description">
                        <p>This charming private 19th century mansion, which originally belonged to the family, has been completely renovated with care &amp; passion while respecting the spirit of place.</p>
                        <p>Hotux Hotel surrounded herself by a team of French artisans to create a sophisticated place in a refined.</p>
                    </div>
                    <div class="head-button">
                        <a href="about-us.html" class="btn btn-orange">More Info</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-img-box row">
                    <div class="col-sm-6  col-sm-6 col-xs-6">
                        <a href="#"><img src="{{ url('assets/images/aboutus1.jpg')}}" alt=""></a>
                    </div>
                    <div class="col-sm-6 col-sm-6 col-xs-6">
                        <a href="#"><img src="{{ url('assets/images/aboutus2.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us Ends -->

<!-- Rooms starts -->
<section class="rooms rooms-style1">
    <div class="container">
        <div class="section-title">
            <h2>Explore <span>Rooms</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
        </div>
        <div class="room-outer">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="room-item">
                        <div class="room-image">
                            <img src="{{ url('assets/images/room-b1.jpg')}}" alt="image">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <h4>Super Deluxe</h4>
                                <p>$1200/Night</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <div class="room-btns mar-top-20">
                                <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                <a href="#" class="btn btn-orange">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="room-item">
                        <div class="room-image">
                            <img src="{{ url('assets/images/room-b2.jpg')}}" alt="image">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <h4>Junior Suite</h4>
                                <p>$1200/Night</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <div class="room-btns mar-top-20">
                                <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                <a href="#" class="btn btn-orange">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="room-item">
                        <div class="room-image">
                            <img src="{{ url('assets/images/room-b3.jpg')}}" alt="image">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <h4>Executive Suite</h4>
                                <p>$1200/Night</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <div class="room-btns mar-top-20">
                                <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                <a href="#" class="btn btn-orange">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="room-item">
                        <div class="room-image">
                            <img src="{{ url('assets/images/room-b4.jpg')}}" alt="image">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <h4>Royal Deluxe</h4>
                                <p>$1500/Night</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <div class="room-btns mar-top-20">
                                <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                <a href="#" class="btn btn-orange">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="room-item">
                        <div class="room-image">
                            <img src="{{ url('assets/images/room-b5.jpg')}}" alt="image">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <h4>Standard Room</h4>
                                <p>$900/Night</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <div class="room-btns mar-top-20">
                                <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                <a href="#" class="btn btn-orange">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="room-item">
                        <div class="room-image">
                            <img src="{{ url('assets/images/room-b6.jpg')}}" alt="image">
                        </div>
                        <div class="room-content">
                            <div class="room-title">
                                <h4>Special Suite</h4>
                                <p>$1000/Night</p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                            <div class="room-btns mar-top-20">
                                <a href="#" class="btn btn-black mar-right-10">VIEW DETAILS</a>
                                <a href="#" class="btn btn-orange">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Room Ends -->

<!-- Call To Action Starts -->
<section class="call-to-action call-style-1">
    <div class="container">
        <div class="call-content text-center">
            <h2 class="white mar-bottom-25">Get up to <span>20% off</span> on your next travel</h2>
            <p>Choose the package you would like to offer to your clients andsend us an inquiry using the contact form.</p>
            <a href="#" class="btn btn-orange mar-top-20">Get It Now <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>
<!-- Call To Action Ends -->

<!-- Services Starts -->
<section class="services service-style-1">
    <div class="container">
        <div class="section-title">
            <h2>Explore <span>Services</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
        </div>
        <div class="service-outer">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="{{ url('assets/images/feature1.jpg')}}" alt="Image">
                        </div>
                        <div class="service-content">
                            <h4><a href="service-detail.html">Gym & Exercises</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="{{ url('assets/images/feature2.jpg')}}" alt="Image">
                        </div>
                        <div class="service-content">
                            <h4><a href="service-detail.html">Beach Sight</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="{{ url('assets/images/feature5.jpg')}}" alt="Image">
                        </div>
                        <div class="service-content">
                            <h4><a href="service-detail.html">Massage</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="{{ url('assets/images/feature6.jpg')}}" alt="Image">
                        </div>
                        <div class="service-content">
                            <h4><a href="service-detail.html">Swimming Pool</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="{{ url('assets/images/feature7.jpg')}}" alt="Image">
                        </div>
                        <div class="service-content">
                            <h4><a href="service-detail.html">Restaurant</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="{{ url('assets/images/feature8.jpg')}}" alt="Image">
                        </div>
                        <div class="service-content">
                            <h4><a href="service-detail.html">Futurethon</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Ends -->

<!-- Gallery starts -->
<section class="content gallery">
    <div class="section-title">
        <h2>Beautiful View of <span>Hotux</span></h2>
        <p class="mar-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
    </div>
    <div class="container">
        <div class="gal-3-col">
            <div class="masonry">
                <div class="brick">
                    <div class="gallery-item">
                        <div class="gallery-image">
                            <img src="{{ url('assets/images/gallery/gallery1.jpg')}}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a href="{{ url('assets/images/gallery/gallery1.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="brick">
                    <div class="gallery-item">
                        <div class="gallery-image">
                            <img src="{{ url('assets/images/gallery/gallery16.jpg')}}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a href="{{ url('assets/images/gallery/gallery16.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="brick">
                    <div class="gallery-item">
                        <div class="gallery-image">
                            <img src="{{ url('assets/images/gallery/gallery3.jpg')}}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a href="{{ url('assets/images/gallery/gallery3.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="brick">
                    <div class="gallery-item">
                        <div class="gallery-image">
                            <img src="{{ url('assets/images/gallery/gallery17.jpg')}}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a href="{{ url('assets/images/gallery/gallery17.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="brick">
                    <div class="gallery-item">
                        <div class="gallery-image">
                            <img src="{{ url('assets/images/gallery/gallery15.jpg')}}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a href="{{ url('assets/images/gallery/gallery15.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="brick">
                    <div class="gallery-item">
                        <div class="gallery-image">
                            <img src="{{ url('assets/images/gallery/gallery5.jpg')}}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a href="{{ url('assets/images/gallery/gallery5.jpg')}}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Gallery Ends -->

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

<!-- News Starts -->
<section class="news">
    <div class="container">
        <div class="section-title">
            <h2>Latest <span>News</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
        </div>
        <div class="news-outer">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="news-item">
                        <div class="news-image">
                            <img src="{{ url('assets/images/news1.jpg')}}" alt="image">
                        </div>
                        <div class="news-content">
                            <p class="date mar-bottom-5">16 DECEMBER 2019</p>
                            <h4><a href="single-right.html">Why choose Hotux Hotel to travel this summer</a></h4>
                            <div class="room-services mar-bottom-10">
                                <ul>
                                    <li><a href="single-right.html"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a></li>
                                    <li><a href="single-right.html"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                            <a href="single-left.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="news-item">
                        <div class="news-image">
                            <img src="{{ url('assets/images/news2.jpg')}}" alt="image">
                        </div>
                        <div class="news-content">
                            <p class="date mar-bottom-5">16 DECEMBER 2019</p>
                            <h4><a href="single-right.html">Why choose Hotux Hotel to travel this summer</a></h4>
                            <div class="room-services mar-bottom-10">
                                <ul>
                                    <li><a href="single-right.html"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a></li>
                                    <li><a href="single-right.html"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                            <a href="single-left.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="news-item">
                        <div class="news-image">
                            <img src="{{ url('assets/images/news3.jpg')}}" alt="image">
                        </div>
                        <div class="news-content">
                            <p class="date mar-bottom-5">16 DECEMBER 2019</p>
                            <h4><a href="single-right.html">Why choose Hotux Hotel to travel this summer</a></h4>
                            <div class="room-services mar-bottom-10">
                                <ul>
                                    <li><a href="single-right.html"><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</a></li>
                                    <li><a href="single-right.html"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum orci nulla, fermentum in faucibus a, interdum eu nibh.</p>
                            <a href="single-left.html">READ MORE <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-btn">
            <a href="#" class="btn btn-black mar-right-10">EXPLORE ALL <i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
</section>
<!-- News Ends -->

@endsection
@section('javascript_code')
<script>
    $(document).ready(function() {

    });
</script>
@endsection