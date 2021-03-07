@extends('layouts.app')
@section('title')
{{$data['title']}}
@endsection
@section('css')

@endsection
@section('content')

<div class="content-body">
    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form">Add {{$data['module']}}</h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form action="{{ route('packages.store') }}" id='add_form' name="add_form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">Name</label>
                                                <input value="{{old('name') ?? '' }}" type="text" class="form-control" placeholder="Name" id='name' name="name">
                                                @if ($errors->has('name'))
                                                <label class="error">{{ $errors->first('name') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Region</label>
                                                <select class="form-control region_id" id="region_id" name="region_id">
                                                    <option value="">Select Region</option>
                                                    @foreach($regions as $region)
                                                    <option value="{{ $region['id'] }}">{{ $region['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('region_id'))
                                                <label class="error">{{ $errors->first('region_id') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Destination</label>
                                                <select class="form-control destination_id" id="destination_id" name="destination_id">
                                                    <option value="">Select Destination</option>
                                                </select>
                                                @if ($errors->has('destination_id'))
                                                <label class="error">{{ $errors->first('destination_id') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Meta Keyword</label>
                                                <input value="{{old('meta_key') ?? '' }}" type="text" class="form-control" placeholder="meta keyword" id='meta_key' name="meta_key">
                                                @if ($errors->has('meta_key'))
                                                <label class="error">{{ $errors->first('meta_key') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Meta Description</label>
                                                <input value="{{old('meta_desc') ?? '' }}" type="text" class="form-control" placeholder="meta description" id='meta_desc' name="meta_desc">
                                                @if ($errors->has('meta_desc'))
                                                <label class="error">{{ $errors->first('meta_desc') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput1">Price</label>
                                                <input value="{{old('price') ?? '' }}" type="text" class="form-control" placeholder="price" id='price' name="price">
                                                @if ($errors->has('price'))
                                                <label class="error">{{ $errors->first('price') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput1">Star Rating</label>
                                                <select class="form-control" id="star_rating" name="star_rating">
                                                    <option value="5">5</option>
                                                    <!-- <option value="4.5">4.5</option> -->
                                                    <option value="4">4</option>
                                                    <!-- <option value="3.5">3.5</option> -->
                                                    <option value="3">3</option>
                                                    <!-- <option value="2.5">2.5</option> -->
                                                    <option value="2">2</option>
                                                    <!-- <option value="1.5">1.5</option> -->
                                                    <option value="1">1</option>
                                                </select>
                                                @if ($errors->has('star_rating'))
                                                <label class="error">{{ $errors->first('star_rating') }}</label>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput1">Duration Days</label>
                                                <input value="{{old('duration_day') ?? '' }}" type="text" class="form-control" placeholder="Days" id='duration_day' name="duration_day">
                                                @if ($errors->has('duration_day'))
                                                <label class="error">{{ $errors->first('duration_day') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput1">Duration Nights</label>
                                                <input value="{{old('duration_night') ?? '' }}" type="text" class="form-control" placeholder="Nights" id='duration_night' name="duration_night">
                                                @if ($errors->has('duration_night'))
                                                <label class="error">{{ $errors->first('duration_night') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">Description</label>
                                                <textarea name="description_detail"></textarea>

                                                @if ($errors->has('description_detail'))
                                                <label class="error">{{ $errors->first('description_detail') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput2">Main Image </label>
                                                <br>
                                                <input type="file" name="image" id="image">
                                                <span class="file-custom"></span>
                                                @if ($errors->has('image'))
                                                <br>
                                                <label class="error">{{ $errors->first('image') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput1">Popular Package ? </label>
                                                <select class="form-control" id="is_popular" name="is_popular">
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                                @if ($errors->has('is_popular'))
                                                <label class="error">{{ $errors->first('is_popular') }}</label>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput1">Popular Sequence</label>
                                                <input placeholder="1 , 2 , 3 etc.." type="text" name="popular_sequence" id="popular_sequence" class="form-control" />
                                                @if ($errors->has('popular_sequence'))
                                                <label class="error">{{ $errors->first('popular_sequence') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div style="margin-top: 20px;" id="main_div" class="col-md-12">
                                            <!-- <hr> -->
                                            <label>Package Slider Images</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control" id="images[]" type="file" name="images[]">
                                                </div>
                                                <div class="col-md-3">
                                                </div>
                                            </div>
                                            <div class="input_fields_container">
                                            </div>
                                        </div>
                                        <div id="main_add_div" style="margin-top: 10px; margin-bottom: 20px;" class="col-md-12">
                                            <button class="btn btn-sm btn-primary add_more_button">Add More Images</button>
                                            <hr>
                                        </div>

                                        <div style="margin-top: 20px;" id="inclusion_div" class="col-md-12">
                                            <!-- <hr> -->
                                            <label>Package Inclusion</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control" id="inclusion[]" type="text" name="inclusion[]">
                                                </div>
                                                <div class="col-md-3">
                                                </div>
                                            </div>
                                            <div class="inclusion_fields_container">
                                            </div>
                                        </div>
                                        <div id="main_add_div" style="margin-top: 10px; margin-bottom: 20px;" class="col-md-12">
                                            <button class="btn btn-sm btn-primary add_inclusion_button">Add More Inclusion</button>
                                            <hr>
                                        </div>


                                        <div style="margin-top: 20px;" id="exclusion_div" class="col-md-12">
                                            <!-- <hr> -->
                                            <label>Package Exclusion</label>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <input class="form-control" id="exclusion[]" type="text" name="exclusion[]">
                                                </div>
                                                <div class="col-md-3">
                                                </div>
                                            </div>
                                            <div class="exclusion_fields_container">
                                            </div>
                                        </div>
                                        <div id="main_add_div" style="margin-top: 10px; margin-bottom: 20px;" class="col-md-12">
                                            <button class="btn btn-sm btn-primary add_exclusion_button">Add More Exclusion</button>
                                            <hr>
                                        </div>
                                        <br>


                                        <div style="margin-top: 20px;" id="itinerary_div" class="col-md-12">
                                            <!-- <hr> -->
                                            <label>Package Itinerary</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Title</label>
                                                    <input class="form-control" id="itinerary[]" type="text" name="itinerary[]">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Description</label>
                                                    <textarea class="form-control" id="itinerary_detail[]" type="text" name="itinerary_detail[]"></textarea>
                                                </div>
                                                <div class="col-md-3">
                                                </div>
                                            </div>
                                            <div class="itinerary_fields_container">
                                            </div>
                                        </div>
                                        <div id="main_add_div" style="margin-top: 10px; margin-bottom: 20px;" class="col-md-12">
                                            <button class="btn btn-sm btn-primary add_itinerary_button">Add More Itinerary</button>
                                            <hr>
                                        </div>
                                        <br>


                                    </div>


                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Save
                                    </button>
                                    <a href="{{ route('packages.index') }}">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Cancel
                                        </button>
                                    </a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
@section('javascript_code')
<script>
    CKEDITOR.config.autoParagraph = false;
    
    CKEDITOR.replace('description_detail');
    CKEDITOR.config.autoParagraph = false;
</script>

<script>
    $(document).ready(function() {

        $("#add_form").validate({
            rules: {
                name: {
                    required: true
                },
                region_id: {
                    required: true
                },
                destination_id: {
                    required: true
                },
                meta_key: {
                    required: true
                },
                meta_desc: {
                    required: true
                },
                star_rating: {
                    required: true
                },
                price: {
                    required: true
                },
                duration_day: {
                    required: true
                },
                duration_night: {
                    required: true
                },
                description_detail: {
                    required: true
                },
                image: {
                    required: true
                },
                'images[]': {
                    required: true
                },
                'inclusion[]': {
                    required: true
                },
                'exclusion[]': {
                    required: true
                },
                'itinerary[]': {
                    required: true
                },
                'itinerary_detail[]': {
                    required: true
                },
            },
            messages: {
                name: "Required Field"
            }
        });

        $('.add_more_button').click(function(e) {
            e.preventDefault();
            $('.input_fields_container').append('<div class="images_template row"><div style="margin-top: 10px;" class="col-md-9"><input class="form-control" id="images[]" type="file" name="images[]"></div><div  class="col-md-3"><a href="#" class="remove_field btn btn-danger" style="margin-left:10px;">Remove</a></div></div>'); //add input field
        });
        $('.input_fields_container').on("click", ".remove_field", function(e) { //user click on remove text links
            e.preventDefault();
            $(this).closest('.images_template').remove();
        });


        $('.add_inclusion_button').click(function(e) {
            e.preventDefault();
            $('.inclusion_fields_container').append('<div class="inclusion_template row"><div style="margin-top: 10px;" class="col-md-9"><input class="form-control" id="inclusion[]" type="text" name="inclusion[]"></div><div  class="col-md-3"><a href="#" class="remove_field btn btn-danger" style="margin-left:10px;">Remove</a></div></div>'); //add input field
        });
        $('.inclusion_fields_container').on("click", ".remove_field", function(e) { //user click on remove text links
            e.preventDefault();
            $(this).closest('.inclusion_template').remove();
        });


        $('.add_exclusion_button').click(function(e) {
            e.preventDefault();
            $('.exclusion_fields_container').append('<div class="exclusion_template row"><div style="margin-top: 10px;" class="col-md-9"><input class="form-control" id="exclusion[]" type="text" name="exclusion[]"></div><div  class="col-md-3"><a href="#" class="remove_field btn btn-danger" style="margin-left:10px;">Remove</a></div></div>'); //add input field
        });
        $('.exclusion_fields_container').on("click", ".remove_field", function(e) { //user click on remove text links
            e.preventDefault();
            $(this).closest('.exclusion_template').remove();
        });



        $('.add_itinerary_button').click(function(e) {
            e.preventDefault();
            $('.itinerary_fields_container').append('<div class="itinerary_template row"><div style="margin-top: 10px;" class="col-md-3"><input class="form-control" id="itinerary[]" type="text" name="itinerary[]"></div>   <div style="margin-top: 10px;" class="col-md-6" style=""><textarea class="form-control" id="itinerary_detail[]" type="text" name="itinerary_detail[]"></textarea></div>   <div class="col-md-3"><a href="#" class="remove_field btn btn-danger" style="margin-left:10px;">Remove</a></div></div>'); //add input field

        });
        $('.itinerary_fields_container').on("click", ".remove_field", function(e) { //user click on remove text links
            e.preventDefault();
            $(this).closest('.itinerary_template').remove();
        });


    });
</script>

<script>
    $(document).ready(function() {
        $(".region_id").change(function() {

            var id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('region.getDestinations') ?>",
                method: 'POST',
                data: {
                    "id": id,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(data) {
                    $(".destination_id").html('');
                    $(".destination_id").html(data);
                }
            });
        });
    });
</script>
@endsection