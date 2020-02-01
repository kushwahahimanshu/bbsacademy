<!-- Footer Area Start Here -->
    <footer>
        <div class="footer-area-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>About Us</h3>
                            <div class="footer-about">
                              @foreach($settings as $r)
                                @if($r->name == 'description')
                                <p>{{$r->value}}</p>
                                @endif
                              @endforeach
                            </div>
                            <ul class="footer-social">
                              @foreach($settings as $r)
                                @if($r->name == 'facebook-link')
                                <li><a target="_blank" href="{{$r->value}}" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                @endif
                                @if($r->name == 'twitter')
                                <li><a target="_blank" href="{{$r->value}}" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                @endif
                                @if($r->name == 'youtube')
                                <li><a target="_blank" href="{{$r->value}}" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                @endif

                                @if($r->name == 'instagram')
                                <li><a target="_blank" href="{{$r->value}}" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                @endif
                              @endforeach                           
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Featured Links</h3>
                            <ul class="featured-links">
                                <li>
                                    <ul>
                                        <li><a href="#">Franchise</a></li>
                                        <li><a href="#">Admissions</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Book store</a></li>
                                        <li><a href="#">Career</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Information</h3>
                            <ul class="corporate-address">
                           @foreach($settings as $r)                           
                                @if($r->name == 'address1')
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">{{$r->value}}</a></li>
                                @endif

                                @if($r->name == 'address2')
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">{{$r->value}}</a></li>
                                @endif

                                @if($r->name == 'phone1' || $r->name =='phone2')
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+91-{{$r->value}}"> +91-{{$r->value}}</a></li>
                                @endif
                             @endforeach

                               @foreach($settings as $r)                           

                                @if($r->name == 'email')
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:{{ $r->value }}"> {{$r->value}}</a></li>
                                @endif
                            @endforeach                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/bbsacademyindia/" data-tabs="timeline" data-width="340" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=360&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbbsacademyindia%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=340">
                                 <span style="vertical-align: bottom; width: 340px; height: 300px;">
                                    <iframe name="f37f9ab875fccfc" width="340px" height="300px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.12/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df6f929b6e9a05%26domain%3Dbbsacademy.com%26origin%3Dhttp%253A%252F%252Fbbsacademy.com%252Ffd15400d35ebc%26relation%3Dparent.parent&amp;container_width=360&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbbsacademyindia%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=340" style="border: none; visibility: visible; width: 340px; height: 300px;" class="">
                                    </iframe>
                                 </span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <p>&copy; 2019 BBS Academy, All Rights Reserved. &nbsp; Developed by<a target="_blank" href="https://www.expertwebtech.com/"> Xpert Webtech Team</a></p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul class="payment-method">
                            <li>
                                <a href="#"><img alt="payment-method" src="{{ asset('assets/img/payment-method1.jpg') }}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="payment-method" src="{{ asset('assets/img/payment-method2.jpg') }}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="payment-method" src="{{ asset('assets/img/payment-method3.jpg') }}"></a>
                            </li>
                            <li>
                                <a href="#"><img alt="payment-method" src="{{ asset('assets/img/payment-method4.jpg') }}"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End Here -->


<div id="enquirypopup" class="modal fade in" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content row">
            <div class=" custom-modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
               <div class="popup">
                   <img src="{{ asset('assets/img/Exam-Web.jpg') }}" alt="">
               </div>
            </div>
        </div>

    </div>
</div>


<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
<section>
    <!-- LOGIN SECTION -->
    <div id="modal1" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hey...</h1>
                <p></p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('assets/img/cancel.png') }}" alt="" />
                </a>
                <h4>Login</h4>
                <p></p>
                <form class="s12" method="post" action="{{ asset('start/userlogin') }}">
                    <div>
                        <div class="input-field s12">
                            <input type="text" name="email" data-ng-model="name" class="validate" placeholder="Email Id">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input name="password" type="password" class="validate" placeholder="Password">
                        </div>
                    </div>
                    <div>
                        <div class="s12 log-ch-bx">
                            <p>
                                <input type="checkbox" id="test5" />
                                <label for="test5">Remember me</label>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Login" class="default-big-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- REGISTER SECTION -->
    <div id="modal2" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It takes less than a minute.</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('assets/img/cancel.png') }}" alt="" />
                </a>
                <h4>Create an Account</h4>
                <p>Don't have an account? Create your account. It takes less than a minute.</p>
                <form class="s12" action="{{ asset('start/register') }}" method="post">
                    <div>
                        <div class="input-field s12">
                            <input type="text" name="username" data-ng-model="name1" class="validate" placeholder="Username">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="email" name="email" class="validate" placeholder="Email id">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" name="password" class="validate" placeholder="Password">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" name="password1" class="validate" placeholder="Confirm password">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Register" class="default-big-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FORGOT SECTION -->
    <div id="modal3" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello... </h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="{{ asset('assets/img/cancel.png') }}" alt="" />
                </a>
                <h4>Forgot password</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name3" class="validate" placeholder="User name or email id">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Submit" class="default-big-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>