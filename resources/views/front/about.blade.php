@extends('front_layouts.app')

@section('title')
About-Us
@endsection
@section('css')

@endsection
@section('content')

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

<section class="about-faq">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="about-us-image">
                    <img src="<?php echo  url('/') . '/assets/images/gallery/gallery2.jpg' ?>" alt="image">
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="info-detail">
                    <div class="accrodion-grp faq-accrodion" data-grp-name="faq-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>How can I improve my oral hygiene?</h4>
                            </div>
                            <div class="accrodion-content" style="display: block;">
                                <div class="inner">
                                    <p>Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion ">
                            <div class="accrodion-title">
                                <h4>How do I know if my teeth are healthy?</h4>
                            </div>
                            <div class="accrodion-content" style="display: none;">
                                <div class="inner">
                                    <p>Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Why are regular dental assessments so important?</h4>
                            </div>
                            <div class="accrodion-content" style="display: none;">
                                <div class="inner">
                                    <p>Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>What if I have to cancel my appointment?</h4>
                            </div>
                            <div class="accrodion-content" style="display: none;">
                                <div class="inner">
                                    <p>Sometimes the unexpected happens and you need to cancel your appointment make sure you call us or email us 1 day ago before cancellation.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>What do I need to bring to my appointment?</h4>
                            </div>
                            <div class="accrodion-content" style="display: none;">
                                <div class="inner">
                                    <p>Sometimes the unexpected happens and you need to cancel your appointment make sure you call us or email us 1 day ago before cancellation.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>What are the facilities available in the hospital?</h4>
                            </div>
                            <div class="accrodion-content" style="display: none;">
                                <div class="inner">
                                    <p>Sometimes the unexpected happens and you need to cancel your appointment make sure you call us or email us 1 day ago before cancellation.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="video-box">
        <div class="container">
            <div class="section-title">
                <h3 class="white mar-0">Take a Tour</h3>
                <div class="call-button">
                    <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo"><i class="fa fa-play"></i></button>
                </div>
                <div class="video-figure"></div>
                <h4 class="white mar-0">0f our wounderfull resort</h4>
            </div>
        </div>
    </section> -->

<section class="about-team">
    <div class="container">
        <div class="section-title">
            <h2>Explore <span>Team</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
        </div>
        <div class="row team-slider slick-initialized slick-slider">
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 3900px; transform: translate3d(-2340px, 0px, 0px);" role="listbox">
                    <div class="col-md-4 slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 390px;" tabindex="-1">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team2.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>Erina Gray</h4>
                                <p>Managing Director</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="-1"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 390px;" tabindex="-1">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team3.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>Micheal Carter</h4>
                                <p>Supervisor</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="-1"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 390px;" tabindex="-1">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team4.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>Nelson Roar</h4>
                                <p>Project Manager</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="-1"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 slick-slide" data-slick-index="0" aria-hidden="true" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide10">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team1.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>John Anderson</h4>
                                <p>Ceo and Founder</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="-1"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 slick-slide" data-slick-index="1" aria-hidden="true" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide11">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team2.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>Erina Gray</h4>
                                <p>Managing Director</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="-1"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 slick-slide" data-slick-index="2" aria-hidden="true" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide12">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team3.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>Micheal Carter</h4>
                                <p>Supervisor</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="-1"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" style="width: 390px;" tabindex="-1" role="option" aria-describedby="slick-slide13">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team4.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>Nelson Roar</h4>
                                <p>Project Manager</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="0"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 slick-slide slick-cloned slick-active" data-slick-index="4" aria-hidden="false" style="width: 390px;" tabindex="-1">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team1.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>John Anderson</h4>
                                <p>Ceo and Founder</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="0"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 slick-slide slick-cloned slick-active" data-slick-index="5" aria-hidden="false" style="width: 390px;" tabindex="-1">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team2.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>Erina Gray</h4>
                                <p>Managing Director</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="0"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="0"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 390px;" tabindex="-1">
                        <div class="team-item">
                            <div class="team-image">
                                <img src="<?php echo  url('/') . '/assets/images/team3.jpg' ?>" alt="image">
                            </div>
                            <div class="team-content">
                                <h4>Micheal Carter</h4>
                                <p>Supervisor</p>
                                <ul class="social-links">
                                    <li><a href="#" tabindex="-1"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" tabindex="-1"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <div class="section-title title-white">
            <h2>Explore <span>Reviews</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
        </div>
        <div class="review-slider slick-initialized slick-slider slick-dotted" role="toolbar">
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 3990px; transform: translate3d(-1140px, 0px, 0px);" role="listbox">
                    <div class="slider-item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 540px;" tabindex="-1">
                        <div class="slider-image">
                            <img src="<?php echo  url('/') . '/assets/images/review2.jpg' ?>" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Ketty Perry</h4>
                            <span>Australia</span>
                        </div>
                        <div class="slider-quote">
                            <img src="<?php echo  url('/') . '/assets/images/icons/quote.png' ?>" alt="Image">
                        </div>
                    </div>
                    <div class="slider-item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 540px;" tabindex="-1">
                        <div class="slider-image">
                            <img src="<?php echo  url('/') . '/assets/images/review1.jpg' ?>" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Micheal Clordy</h4>
                            <span>Germany</span>
                        </div>
                        <div class="slider-quote">
                            <img src="<?php echo  url('/') . '/assets/images/icons/quote.png' ?>" alt="Image">
                        </div>
                    </div>
                    <div class="slider-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 540px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                        <div class="slider-image">
                            <img src="<?php echo  url('/') . '/assets/images/review1.jpg' ?>" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Micheal Clordy</h4>
                            <span>Germany</span>
                        </div>
                        <div class="slider-quote">
                            <img src="<?php echo  url('/') . '/assets/images/icons/quote.png' ?>" alt="Image">
                        </div>
                    </div>
                    <div class="slider-item slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 540px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                        <div class="slider-image">
                            <img src="<?php echo  url('/') . '/assets/images/review2.jpg' ?>" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Ketty Perry</h4>
                            <span>Australia</span>
                        </div>
                        <div class="slider-quote">
                            <img src="<?php echo  url('/') . '/assets/images/icons/quote.png' ?>" alt="Image">
                        </div>
                    </div>
                    <div class="slider-item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 540px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                        <div class="slider-image">
                            <img src="<?php echo  url('/') . '/assets/images/review1.jpg' ?>" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Micheal Clordy</h4>
                            <span>Germany</span>
                        </div>
                        <div class="slider-quote">
                            <img src="<?php echo  url('/') . '/assets/images/icons/quote.png' ?>" alt="Image">
                        </div>
                    </div>
                    <div class="slider-item slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" style="width: 540px;" tabindex="-1">
                        <div class="slider-image">
                            <img src="<?php echo  url('/') . '/assets/images/review1.jpg' ?>" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Micheal Clordy</h4>
                            <span>Germany</span>
                        </div>
                        <div class="slider-quote">
                            <img src="<?php echo  url('/') . '/assets/images/icons/quote.png' ?>" alt="Image">
                        </div>
                    </div>
                    <div class="slider-item slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 540px;" tabindex="-1">
                        <div class="slider-image">
                            <img src="<?php echo  url('/') . '/assets/images/review2.jpg' ?>" alt="image">
                        </div>
                        <div class="slider-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod tortor vitae nisi pharetra egestas. Sed egestas sapien libero.</p>
                            <h4>Ketty Perry</h4>
                            <span>Australia</span>
                        </div>
                        <div class="slider-quote">
                            <img src="<?php echo  url('/') . '/assets/images/icons/quote.png' ?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>


            <ul class="slick-dots" style="" role="tablist">
                <li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" tabindex="0">1</button></li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><button type="button" data-role="none" role="button" tabindex="0">2</button></li>
                <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02" class=""><button type="button" data-role="none" role="button" tabindex="0">3</button></li>
            </ul>
        </div>
    </div>
</section>


<section class="services">
    <div class="container">
        <div class="section-title">
            <h2>Explore <span>Services</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex neque, sodales accumsan sapien et, auctor vulputate quam donec vitae consectetur turpis</p>
        </div>
        <div class="service-outer">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="<?php echo  url('/') . '/assets/images/service1.jpg' ?>" alt="Image">
                        </div>
                        <div class="service-content">
                            <h3>Restaurant</h3>
                            <p>Breakfast and Dinner</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="<?php echo  url('/') . '/assets/images/service2.jpg' ?>" alt="Image">
                        </div>
                        <div class="service-content">
                            <h3>Massage</h3>
                            <p>Opens Daily</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="service-item">
                        <div class="service-image">
                            <img src="<?php echo  url('/') . '/assets/images/service3.jpg' ?>" alt="Image">
                        </div>
                        <div class="service-content">
                            <h3>Conference Room</h3>
                            <p>Air Conditioning</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-btn">
            <a href="#" class="btn btn-orange">EXPLORE ALL SERVICES</a>
        </div>
    </div>
</section>


@endsection
@section('javascript_code')
<script>
    $(document).ready(function() {

    });
</script>
@endsection