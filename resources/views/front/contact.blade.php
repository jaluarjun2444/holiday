@extends('front_layouts.app')

@section('title')
Contact-Us
@endsection
@section('css')

@endsection
@section('content')


<section class="contact">
    <div class="container">
        <div class="contact-info">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="info-content">
                            <p><?php echo  $menuData['settingData']['address'] ?? '' ?></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="    height: 105px;" class="info-item info-item-or">
                        <div class="info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <p><?php echo  $menuData['settingData']['mobile'] ?? '' ?></p>
                            <p><?php echo  $menuData['settingData']['mobile2'] ?? '' ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="    height: 105px;" class="info-item">
                        <div class="info-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <p><?php echo  $menuData['settingData']['email'] ?? '' ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-support">
            <div class="row">
                <div class="col-md-4">
                    <div class="support-item">
                        <h4>Costumer Support</h4>
                        <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit facilisis nisi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="support-item">
                        <h4>Technical Support</h4>
                        <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit facilisis nisi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="support-item">
                        <h4>Booking Queries</h4>
                        <p class="mar-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit facilisis nisi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <div class="row">
                <div class="col-md-6">
                    <style>
                        iframe {
                            min-width: 100% !important;
                            max-width: 100% !important;
                        }
                    </style>
                    <?php echo  $menuData['settingData']['google_map'] ?? '' ?>
                    <style>
                        iframe {
                            min-width: 100% !important;
                            max-width: 100% !important;
                        }
                    </style>
                    <!-- <iframe style="max-width: 100%;" width="100%" height="450" style="border:0" loading="lazy" allowfullscreen src=""></iframe> -->
                </div>
                <div class="col-md-6">
                    <div id="contact-form" class="contact-form">
                        <h3>Keep in Touch</h3>
                        <div id="contactform-error-msg"></div>

                        <form method="post" action="#" name="contactform" id="contactform" novalidate="novalidate">
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" id="fname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control" id="lname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone">
                            </div>
                            <div class="textarea">
                                <textarea name="comments" placeholder="Enter a message"></textarea>
                            </div>
                            <div class="comment-btn text-right">
                                <input type="submit" class="btn btn-orange" id="submit" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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