@extends('front_layouts.app')
@section('title')
Home
@endsection
@section('css')

@endsection
@section('content')

@if(isset($dest['cover_image']))
<!-- breadcrumb starts -->
<section style="background: url({{ url('/uploads/destination').'/'.$dest['cover_image'] }}) no-repeat;" class="breadcrumb-outer">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>{{ $dest['name'] ?? 'Packages' }}</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$dest['name']}}</li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Room Grid</li> -->
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- breadcrumb Ends -->
@endif

<!-- room list starts -->
<section class="room-list">
    <div class="container">

        <div class="list-content">
            <div class="row">
                @foreach($data as $item)
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
        <div class="pagination-content text-center">
            {{ $data->links() }}
            <!-- <ul class="pagination">
                <li><a href="#"><i c
                lass="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
            </ul> -->
        </div>
    </div>
</section>
<!-- room list Ends -->


@endsection
@section('javascript_code')
<script>
    $(document).ready(function() {

    });
</script>
@endsection