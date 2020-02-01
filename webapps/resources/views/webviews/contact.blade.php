@extends('master')

@section('main_body')
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area"  style="background-image: url('{{ asset('assets/img/banner/5.jpg') }}');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Contact Us</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Contact Us Page 1 Area Start Here -->
        <div class="contact-us-page1-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-us-info1">
                            <ul>
                                @foreach($settings as $r)
                                @if($r->name == 'address1')
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h3>Address</h3>
                                    <p>{{$r->value}}</p>
                                </li>
                                @endif
                                @if($r->name == 'phone1')
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>Phone</h3>
                                    <p>+91 {{$r->value}}</p>
                                </li>
                                @endif
                                @if($r->name == 'email')
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h3>E-mail</h3>
                                    <p>{{$r->value}}</p>
                                </li>
                                @endif
                               @endforeach
                                <li>
                                    <h3>Follow Us</h3>
                                    <ul class="contact-social">
                                     @foreach($settings as $r)
                                        @if($r->name == 'facebook-link')
                                        <li><a href="{{$r->value}}" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                         @endif
                                         @if($r->name == 'twitter')
                                        <li><a href="{{$r->value}}" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        @endif
                                        @if($r->name == 'youtube')
                                        <li><a href="{{$r->value}}" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        @endif
                                        @if($r->name == 'instagram')
                                        <li><a href="{{$r->value}}" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                         @endif
                                     @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="title-default-left title-bar-high dark">Contact With Us</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="contact-form1">
                                   <form action="{{url('contact_us')}}" method="post"  enctype="multipart/form-data">
                                      {{csrf_field()}}                                   
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="number" placeholder="Phone*" class="form-control" name="phone" id="form-phone" data-error="phone field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Subject*" class="form-control" name="subject" id="form-subject" data-error="subject field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea placeholder="Message*" class="textarea form-control" name="msg" id="form-message" rows="10" cols="30" data-error="Message field is required" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                            <div class="form-group margin-bottom-none">
                                                <button type="submit" class="default-big-btn">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                            <div class='form-response'></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="google-map-area">
                        <div id="googleMap" >
                          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6938.68595653121!2d77.50815752589602!3d28.472009474128253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1534440879612" width="100%" height="395" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us Page 1 Area End Here -->


@stop