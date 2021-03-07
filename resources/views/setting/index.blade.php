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
                        <h4 class="card-title" id="basic-layout-form">{{$data['module']}}</h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <form action="{{ route('setting.store') }}" id='add_form' name="add_form" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Name</label>
                                                <input value="{{ $setting['name'] ?? '' }}" type="text" class="form-control" placeholder="Name" id='name' name="name">
                                                @if ($errors->has('name'))
                                                <label class="error">{{ $errors->first('name') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput2">Logo ( width 120px)</label>
                                                <br>
                                                <input type="file" name="image" id="image">
                                                <span class="file-custom"></span>
                                                @if ($errors->has('image'))
                                                <br>
                                                <label class="error">{{ $errors->first('image') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="projectinput1">Mobile</label>
                                                <input value="{{ $setting['mobile'] ?? '' }}" type="text" class="form-control" placeholder="mobile" id='mobile' name="mobile">
                                                @if ($errors->has('mobile'))
                                                <label class="error">{{ $errors->first('mobile') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="projectinput1">Mobile 2</label>
                                                <input value="{{ $setting['mobile_2'] ?? '' }}" type="text" class="form-control" placeholder="mobile " id='mobile_2' name="mobile_2">
                                                @if ($errors->has('mobile_2'))
                                                <label class="error">{{ $errors->first('mobile_2') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="projectinput1">Email</label>
                                                <input value="{{ $setting['email'] ?? '' }}" type="text" class="form-control" placeholder="email " id='email' name="email">
                                                @if ($errors->has('email'))
                                                <label class="error">{{ $errors->first('email') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Address</label>
                                                <textarea name="address">{{ $setting['address'] }}</textarea>
                                                @if ($errors->has('address'))
                                                <label class="error">{{ $errors->first('address') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Google Map Link</label>
                                                <br>
                                                <textarea class="form-control" rows="9" id="google_map" name="google_map">{{ $setting['google_map'] }}</textarea>
                                                @if ($errors->has('google_map'))
                                                <label class="error">{{ $errors->first('google_map') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">Top Message Line</label>
                                                <input value="{{ $setting['top_msg'] ?? '' }}" type="text" class="form-control" placeholder="Message" id='top_msg' name="top_msg">
                                                @if ($errors->has('top_msg'))
                                                <label class="error">{{ $errors->first('top_msg') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="projectinput1">Pay Us Link</label>
                                                <input value="{{ $setting['pay_us_link'] ?? '' }}" type="text" class="form-control" placeholder="Link" id='pay_us_link' name="pay_us_link">
                                                @if ($errors->has('pay_us_link'))
                                                <label class="error">{{ $errors->first('pay_us_link') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput1">Link 1 Name</label>
                                                <input value="{{ $setting['link_1_name'] ?? '' }}" type="text" class="form-control" placeholder="Link Name" id='link_1_name' name="link_1_name">
                                                @if ($errors->has('link_1_name'))
                                                <label class="error">{{ $errors->first('link_1_name') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="projectinput1">Link 1 Url</label>
                                                <input value="{{$setting['link_1_url'] ?? '' }}" type="text" class="form-control" placeholder="Link URL" id='link_1_url' name="link_1_url">
                                                @if ($errors->has('link_1_url'))
                                                <label class="error">{{ $errors->first('link_1_url') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput1">Link 2 Name</label>
                                                <input value="{{ $setting['link_2_name']  ?? '' }}" type="text" class="form-control" placeholder="Link Name" id='link_2_name' name="link_2_name">
                                                @if ($errors->has('link_2_name'))
                                                <label class="error">{{ $errors->first('link_2_name') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="projectinput1">Link 2 Url</label>
                                                <input value="{{ $setting['link_2_url']  ?? '' }}" type="text" class="form-control" placeholder="Link URL" id='link_2_url' name="link_2_url">
                                                @if ($errors->has('link_2_url'))
                                                <label class="error">{{ $errors->first('link_2_url') }}</label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Custom Script</label>
                                                <br>
                                                <textarea class="form-control" rows="9" id="custom_script" name="custom_script">{{ $setting['custom_script']  }}</textarea>
                                                @if ($errors->has('custom_script'))
                                                <label class="error">{{ $errors->first('custom_script') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1">Custom Style</label>
                                                <br>
                                                <textarea class="form-control" rows="9" id="custom_style" name="custom_style">{{ $setting['custom_style']  }}</textarea>
                                                @if ($errors->has('custom_style'))
                                                <label class="error">{{ $errors->first('custom_style') }}</label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Update
                                    </button>
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
    CKEDITOR.replace('address');
</script>

<script>
    $(document).ready(function() {

        $("#add_form").validate({
            rules: {
                name: {
                    required: true
                },
                // image: {
                //     required: true
                // }
            },
            messages: {
                name: "Required Field"
            }
        });

    });
</script>

@endsection