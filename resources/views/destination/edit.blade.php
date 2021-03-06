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
                        <h4 class="card-title" id="basic-layout-form">Edit {{$data['module']}}</h4>

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form action="{{ route('destination.update', $category['id']) }}" id='edit_form' name="edit_form" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}
                                <input value="{{ $category['id'] }}" type="hidden" class="form-control" placeholder="Name" id='id' name="id">
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="projectinput1">Region</label>


                                                <select class="form-control" id="region_id" name="region_id">
                                                    <option value="">Select Region</option>
                                                    @foreach($regions as $region)
                                                    <option <?php if ($region['id'] == $category['region_id']) {
                                                                echo 'selected';
                                                            } ?> value="{{ $region['id'] }}">{{ $region['name'] }}</option>
                                                    @endforeach
                                                </select>


                                                @if ($errors->has('region'))
                                                <label>{{ $errors->first('region') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="projectinput1">Name</label>
                                                <input value="{{old('name') ?? $category['name'] }}" type="text" id="name" class="form-control" placeholder="Name" name="name">
                                                @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="projectinput2">Image</label>
                                                <br>
                                                <input type="file" name="image" id="image">
                                                <span class="file-custom"></span>
                                                @if ($errors->has('image'))
                                                <br>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('image') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="projectinput2">Cover Image</label>
                                                <br>
                                                <input type="file" name="cover_image" id="cover_image">
                                                <span class="file-custom"></span>
                                                @if ($errors->has('cover_image'))
                                                <br>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('cover_image') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Save
                                    </button>
                                    <a href="{{ route('destination.index') }}">
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
    $(document).ready(function() {

    });
</script>
@endsection