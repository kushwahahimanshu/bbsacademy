<!-- Header Area Start Here -->

<header>
    <div id="header2" class="header2-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                        <div class="header-top-left">
                            <ul>
                                @foreach($settings as $r)
                                    @if($r->name == 'phone1' || $r->name == 'phone2')
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:0{{ $r->value }}"> +91-{{$r->value}}</a></li>
                                    @endif
                                @endforeach

                                @foreach($settings as $r)
                                    @if($r->name == 'email')
                                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:{{ $r->value }}"> {{$r->value}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-right">
                            <ul>
                                       @if (Auth::check())
                                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle login-btn-area" data-toggle="dropdown">
                                            {{ Auth::user()->name }}
                                                               <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                                </li>
                                            </ul>
                                        </li>
                                       @else

                                        <li><a href="{{url('student_login')}}"  class="login-btn-area"><i class="fa fa-lock" aria-hidden="true"></i>Student Login</a>
                                        </li>
                                        @endif
                                <li>
                                    <div class="apply-btn-area">
                                        <a href="#" class="apply-now-btn"><i class="fa fa-shopping-cart"></i> Cart (0)</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg-textPrimary" id="sticker" style="z-index: 9999999">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <div class="logo-area">
                            <a href="#"><img class="img-responsive" src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                        </div>
                         <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#desktop-nav">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="padding-left: 0px !important;">
                        <nav id="desktop-nav" class="collapse navbar-collapse ">
                            <ul class="nav navbar-nav pull-right">
                                <li @if($page_code == 1) class="active" @endif><a href="{{url('')}}">Home</a></li>
                                <li class="dropdown @if($page_code == 2 || $page_code == 9 || $page_code == 10 || $page_code == 11 || $page_code == 12) active @endif"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li  @if($page_code == 2) class="active" @endif><a href="{{url('about')}}">About BBS</a></li>
                                        <li @if($page_code == 9) class="active" @endif><a href="{{url('chairman')}}">Chairman Note</a></li>
                                        <li @if($page_code == 10) class="active" @endif><a href="{{url('mission')}}">Mission & Vision</a></li>
                                        <li @if($page_code == 11) class="active" @endif><a href="{{url('team')}}">Our Team</a></li>
                                        <li @if($page_code == 12) class="active" @endif><a href="{{url('media')}}">Media & Events</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown @if( $page_code == 7) active @endif"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Courses<span class="caret"></span></a>
                                 

                                    <ul class="dropdown-menu">
                                        @foreach($course as $r)
                                        
                                        @if(DB::table('course_category')->where('parent_category',$r->course_category)->count() > 0)
                                            <li class="has-child-menu @if($page_code == 13) active @endif">
                                            <a href="javascript:void(0);">{{$r->course_category}}</a>
                                        @else
                                            <li class="@if($page_code == 13) active @endif">
                                            <a href="{{url('bank/'.$r->course_category)}}">{{$r->course_category}}</a>
                                        @endif
                                            @php $test2=DB::table('course_category')->where('parent_category',$r->course_category)->get(); @endphp

                                            @if($test2->count()>0)
                                            <ul class="thired-level">
                                                @foreach($test2 as $r2)
                                                <li @if($page_code == 14) class="active" @endif><a href="{{url('bank/'.urlencode($r2->course_category))}}">{{$r2->course_category}}</a></li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li  @if($page_code == 4) class="active" @endif><a href="{{url('franchise')}}">Franchise</a></li>
                                <li @if($page_code == 5) class="active" @endif><a href="{{url('center-locater')}}">Center Locater</a></li>
                                <li @if($page_code == 6) class="active" @endif><a href="{{url('career')}}">Career</a></li>
                                <li class="dropdown @if($page_code == 21 || $page_code == 20 ||$page_code == 22 ||$page_code == 23) active @endif"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Buy Now<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li @if($page_code == 20) class="active" @endif><a href="{{url('online')}}">Online Test Series</a></li>
                                        <li @if($page_code == 21) class="active" @endif><a href="{{url('video')}}">Video Course</a></li>
                                        <li @if($page_code == 22) class="active" @endif><a href="{{url('study')}}">Study Materials</a></li>
                                        <li @if($page_code == 23) class="active" @endif><a href="{{url('books')}}">Books</a></li>
                                    </ul>
                                </li>
                                <li @if($page_code == 8) class="active" @endif><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
<!-- Header Area End Here -->