@extends('front_layouts.app')
@section('keywords')
{{ $question['tags'] }}
@endsection
@section('description')
{{ucfirst($question['title'])}}
{{$question['tags']}}
@endsection
@section('title')
{{ ucfirst($question['title']) }}
@endsection
@section('css')
@endsection
@section('content')
<div class="breadcrumbs">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ ucfirst($question['title']) }}</h1>
            </div>
            <div class="col-md-12">
                <div class="crumbs">
                    <a href="{{ route('front.index') }}">Home</a>
                    <span class="crumbs-span">/</span>
                    <a href="{{ route('front.category',[$question->categoryData['id'],\Str::slug($question->categoryData['name'], '_')]) }}">{{$question->categoryData['name']}}</a>
                    <span class="crumbs-span">/</span>
                    <span class="current">{{ ucfirst($question['title']) }}</span>
                </div>
            </div>
        </div><!-- End row -->
    </section><!-- End container -->
</div>


<section class="container main-content">
    <div class="row">
        <div class="col-md-12">

            <article class="question question-type-normal">
                <h2 style="margin-left: 0px;">
                    <a href="#">{{ ucfirst($question['title']) }}</a>
                </h2>

                <div style="margin-left: 0px;" class="question-inner">
                    <!-- <div class="clearfix"></div> -->
                    <!-- <p class="question-desc"> -->
                    {!! $question['body'] !!}
                    <!-- </p> -->
                    <div class="question-tags"><i class="icon-tags"></i>
                        <b>{{ $question['tags'] }}</b>
                    </div>
                    @foreach($question->answerData as $answer)
                    <hr>
                    <br>
                    {!! $answer['body'] !!}
                    <br>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </article>

            <!-- <div id="related-posts">
                <h2>Related questions</h2>
                <ul class="related-posts">
                    <li class="related-item">
                        <h3><a href="#"><i class="icon-double-angle-right"></i>This Is My Second Poll Question</a></h3>
                    </li>
                    <li class="related-item">
                        <h3><a href="#"><i class="icon-double-angle-right"></i>This is my third Question</a></h3>
                    </li>
                    <li class="related-item">
                        <h3><a href="#"><i class="icon-double-angle-right"></i>This is my fourth Question</a></h3>
                    </li>
                    <li class="related-item">
                        <h3><a href="#"><i class="icon-double-angle-right"></i>This is my fifth Question</a></h3>
                    </li>
                </ul>
            </div> -->

        </div><!-- End main -->

    </div>
</section>

@endsection
@section('javascript_code')
<script>
    $(document).ready(function() {

    });
</script>
@endsection