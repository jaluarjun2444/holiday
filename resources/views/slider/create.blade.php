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
                            <form action="{{ route('slider.store') }}" id='add_form' name="add_form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Title ( optional )</label>
                                                <input value="{{old('title') ?? '' }}" type="text" id="projectinput1" class="form-control" placeholder="title" id='title' name="title">
                                                @if ($errors->has('title'))
                                                <label class="error">{{ $errors->first('title') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Link ( optional )</label>
                                                <input value="{{old('link') ?? '' }}" type="text" id="projectinput1" class="form-control" placeholder="link" id='link' name="link">
                                                @if ($errors->has('link'))
                                                <label class="error">{{ $errors->first('link') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Sequence</label>
                                                <input value="{{old('sequence') ?? '' }}" type="number" id="projectinput1" class="form-control" placeholder="sequence example : 1 , 2 , 3 , 4 " id='sequence' name="sequence">

                                                @if ($errors->has('sequence'))
                                                <label class="error">{{ $errors->first('sequence') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput2">Image ( 1920 * 965 )</label>
                                                <br>
                                                <input type="file" name="image" id="image">
                                                <span class="file-custom"></span>
                                                @if ($errors->has('image'))
                                                <br>
                                                <label class="error">{{ $errors->first('image') }}</label>
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