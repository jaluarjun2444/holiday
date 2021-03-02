@extends('front_layouts.app')
@section('keywords'){{ $data['meta_key'] }}@endsection
@section('description'){{ucfirst($data['meta_desc'])}}@endsection
@section('title'){{$data['name']}}@endsection
@section('css')

@endsection
@section('content')


<!-- breadcrumbs starts -->
<section class="breadcrumb-outer">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>{{ $data['name'] }}</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('destination').'/'.$data->Destination['id'].'/'.Str::slug($data->Destination['name'],'_') }}">{{$data->Destination['name']}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data['name'] }}</li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- breadcrumbs Ends -->

<!-- details starts -->
<section class="details">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="detail-slider">
                    <div class="slider-1 slider-for">
                        @foreach($data->Images as $key=> $image)
                        <div class="detail-slider-item">
                            <img src="{{url('/uploads/packages').'/'.$image['image']}}" alt="image">
                        </div>
                        @endforeach
                    </div>
                    <div class="slider-1 slider-nav">

                        @foreach($data->Images as $key=> $image)
                        <div class="detail-slider-item">
                            <img src="{{url('/uploads/packages').'/'.$image['image']}}" alt="image">
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="detail-content">
                    <div class="detail-title">
                        <div class="title-left">
                            <h3>{{$data['name']}}</h3>
                            <div class="rating">
                                <?php
                                for ($i = 1; $i <= $data['star_rating']; $i++) {
                                ?>
                                    <span class="fa fa-star checked"></span>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="title-right pull-right">
                        </div>
                    </div>
                    <div id="exTab1">
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#1a" data-toggle="tab">Overview</a></li>
                            <li><a href="#2a" data-toggle="tab">Inclusion</a></li>
                            <li><a href="#3a" data-toggle="tab">Exclusion</a></li>
                            <li><a href="#4a" data-toggle="tab">Itinerary</a></li>
                            <li><a href="#5a" data-toggle="tab">Reviews(3)</a></li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1a">
                                <div class="detail-overview detail-box">
                                    {!! $data['description'] !!}
                                    <ul class="amenities">
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{$data->Destination['name']}}</li>
                                        <li><i class="fa fa-globe" aria-hidden="true"></i> {{$data->Region['name']}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="2a">
                                <div class="price-table detail-box">
                                    <h4>Inclusion</h4>
                                    <table class="table table-bordered">
                                        @foreach($data->Inclusion as $inclusion)
                                        <tr>
                                            <td style="text-align: left;"> <i class="fa fa-arrow-right" aria-hidden="true"></i> {{$inclusion['title']}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="3a">
                                <div class="detail-places detail-box">
                                    <h4>Exclusion</h4>
                                    <table class="table table-bordered">
                                        @foreach($data->Exclusion as $inclusion)
                                        <tr>
                                            <td style="text-align: left;"> <i class="fa fa-arrow-right" aria-hidden="true"></i> {{$inclusion['title']}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="4a">
                                <div class="detail-map detail-box">
                                    <h4>Itinerary</h4>
                                    <table class="table table-bordered">
                                        @foreach($data->Itinerary as $inclusion)
                                        <tr>
                                            <td style="text-align: left;"> <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                <b>{{$inclusion['title']}}</b>
                                                <br />
                                                <p style="margin-left: 20px;">{{$inclusion['description']}}</p>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="5a">
                                <div class="detail-review">
                                    <h4>Reviews(3)</h4>
                                    <div class="review-outer">
                                        <ul>
                                            <li>
                                                <div class="review-item">
                                                    <div class="review-image">
                                                        <img src="images/review1.jpg" alt="image">
                                                    </div>
                                                    <div class="review-content">
                                                        <h5>Micheal Clordy</h5>
                                                        <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                                        <p class="date">November 10,2018 at 3:10 pm</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id iaculis arcu. Aenean non dolor magna. In sed consectetur nisi. Sed venenatis, nibh sit amet sodales ullamcorper, ipsum orci condimentum tortor, et cursus veli.tturpis at justo. Vivamus pellentesque volutpat urna vel eleifend. </p>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="review-item">
                                                            <div class="review-image">
                                                                <img src="images/review2.jpg" alt="image">
                                                            </div>
                                                            <div class="review-content">
                                                                <h5>Micheal Clordy</h5>
                                                                <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                                                <p class="date">November 10,2018 at 3:10 pm</p>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id iaculis arcu. Aenean non dolor magna. In sed consectetur nisi. Sed venenatis, nibh sit amet sodales ullamcorper, ipsum orci condimentum tortor, et cursus veli.tturpis at justo. Vivamus pellentesque volutpat urna vel eleifend. </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="detail-sidebar">
                    <div class="sidebar-form reservation-form">
                        <div class="form-price">
                            <div class="title-price">
                                <h2>Rs/-{{$data['price']}}</h2>
                            </div>
                        </div>

                        <div class="banner-form form-style-2">

                            <div class="form-content">
                                <div class="form-content-inner">
                                    <div class="table-item">
                                        <label>Check In</label>
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
                    </div>
                    <div class="sidebar-support">
                        <h3>Help and Support</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ut arnare</p>
                        <p><i class="fa fa-phone"></i> 977 - 222 - 444 - 666</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details Ends -->


@endsection
@section('javascript_code')
<script>
    $(document).ready(function() {

    });
</script>
@endsection