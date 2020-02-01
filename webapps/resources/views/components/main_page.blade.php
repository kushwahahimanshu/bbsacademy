
        <!-- Slider 1 Area Start Here -->
        <div class="slider1-area overlay-default">
            
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <?php $count = 1; ?>
                    @foreach($info as $data)
                        <img src="{{ url('upload/'.$data->image)}}" alt="slider" title="#slider-direction-{{ $count }}" />
                        <?php $count++; ?>
                    @endforeach
                </div>
                <?php $count = 1; ?>
                @foreach($info as $data)
                    <div id="slider-direction-{{ $count }}" class="t-cn slider-direction" style="height: 100%; display: none;">
                        <div class="slider-content s-tb slide-{{ $count }}">
                            <div class="container">
                                <div class="title-container s-tb-c" style="text-align: left;">
                                    <div class="title1" style="color: {{$data->title_clr}}">{{$data->title}}</div>
                                    <p style="color: {{$data->subtitle_clr}}">{{$data->subtitle}}</p>
                                    <div class="slider-btn-area">
                                      <a href="#" class="default-big-btn">{{$data->btn_txt}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                @endforeach
            </div>


              <!-- Service 1 Area Start Here -->
            <div class="service1-area hidden-xs" style="position: absolute; bottom: 30px; width: 100%; z-index: 99">
                <div class="service1-inner-area">
                    <div class="container-fluid">
                        <div class="row service1-wrapper hidden-sm">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service-box1">
                                <div class="service-box-content">
                                    <h3><a href="#">DAILY UPDATES</a></h3>
                                    <p>You can find here new latest jobs and vacancy</p>
                                </div>
                                <div class="service-box-icon">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service-box1">
                                <div class="service-box-content">
                                    <h3><a href="#">CLASS ROOM</a></h3>
                                    <p>You can schedule extra classes for previous classes</p>
                                </div>
                                <div class="service-box-icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service-box1">
                                <div class="service-box-content">
                                    <h3><a href="download_file">DOWNLOADS</a></h3>
                                    <p>Download here Study materials & previous question paper</p>
                                </div>
                                <div class="service-box-icon">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service-box1">
                                <div class="service-box-content">
                                    <h3><a href="#">ONLINE STORE</a></h3>
                                    <p>You can buy our books, video, test series online.</p>
                                </div>
                                <div class="service-box-icon">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             
        </div>
        <!-- Service 1 Area End Here -->
        <div class="latest-notification">
            <!-- Service 1 Area Start Here -->
            <div class="service1-area hidden-sm hidden-md hidden-lg" style="width: 100%; margin-bottom: 50px; margin-top: -40px;">
                <div class="service1-inner-area">
                    <div class="container">
                        <div class="row service1-wrapper hidden-sm">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service-box1">
                                <div class="service-box-content">
                                    <h3><a href="#">DAILY UPDATES</a></h3>
                                    <p>Click here for new jobs and vacancy</p>
                                </div>
                                <div class="service-box-icon">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service-box1">
                                <div class="service-box-content">
                                    <h3><a href="#">CLASS ROOM</a></h3>
                                    <p>You can schedule extra classes for previous classes</p>
                                </div>
                                <div class="service-box-icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service-box1">
                                <div class="service-box-content">
                                    <h3><a href="download_file">DOWNLOADS</a></h3>
                                    <p>Download here Study materials & previous question paper</p>
                                </div>
                                <div class="service-box-icon">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service-box1">
                                <div class="service-box-content">
                                    <h3><a href="#">ONLINE STORE</a></h3>
                                    <p>You can see online exam test solution </p>
                                </div>
                                <div class="service-box-icon">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                      <div class="latest-updates">
                        <div class="panel panel-default">
                          <div class="panel-heading"> Academic News </div>
                            <div class="panel-body" id="academic-news" style="height: 300px; overflow: hidden;">
                                <marquee style="height: 100%;" scrollamount="2" scrolldelay="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()" >
                                    <ul>
                                         @foreach($news as $data)
                                         @if($data->type==1 && $data->status==1)
                                        <li>
                                            <a href="{{$data->link}}" target="_blank">
                                                {!!$data->content !!}<br>
                                                <?php 
                                                    $date1 = date_create($data->created_at);
                                                    $date2 = date_create(date('d-m-Y'));
                                                    $diff = date_diff($date1, $date2)->format("%a");
                                                ?>          
                                                @if($diff <= 7)
                                                    <img src="{{asset('assets/img/new30x15.gif')}}">
                                                @endif                                      
                                                <small><i> Posted on {{$data->created_at}}</i></small>
                                                
                                            </a>

                                        </li>
                                         @endif
                                         @endforeach
                                    </ul>
                                </marquee>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="latest-updates">
                        <div class="panel panel-default">
                          <div class="panel-heading"> Latest Jobs Alert </div>
                            <div class="panel-body" id="latest-job" style="height: 300px; overflow: hidden;">
                                <marquee style="height: 100%;" scrollamount="2" scrolldelay="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()">
                                    <ul>
                                        @foreach($news as $data)
                                         @if($data->type==2 && $data->status==1)
                                        <li>
                                            <a href="{{$data->link}}" target="_blank">{!!$data->content!!}<br>
                                                <?php 
                                                    $date1 = date_create($data->created_at);
                                                    $date2 = date_create(date('d-m-Y'));
                                                    $diff = date_diff($date1, $date2)->format("%a");
                                                ?>          
                                                @if($diff <= 7)
                                                    <img src="{{asset('assets/img/new30x15.gif')}}">
                                                @endif
                                                <small><i> Posted on {{$data->created_at}}</i></small>
                                            </a>
                                        </li>
                                         @endif
                                         @endforeach
                                    </ul>
                                </marquee>
                             </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="latest-batch">
                        <div class="panel panel-default">
                          <div class="panel-heading">  Upcoming Batches </div>
                          <div class="panel-body" id="upcoming-batch" style="height: 300px; overflow: hidden;"> 
                            <marquee  style="height: 100%;" scrollamount="2" scrolldelay="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()">
                                <ul>
                                    @foreach($news as $data)
                                         @if($data->type==3)
                                        <li>
                                            <a href="{{$data->link}}" target="_blank">{!!$data->content!!}<br>
                                                <?php 
                                                    $date1 = date_create($data->created_at);
                                                    $date2 = date_create(date('d-m-Y'));
                                                    $diff = date_diff($date1, $date2)->format("%a");
                                                ?>          
                                                @if($diff <= 7)
                                                    <img src="{{asset('assets/img/new30x15.gif')}}">
                                                @endif
                                                <small><i> Posted on {{$data->created_at}}</i></small>
                                            </a>
                                        </li>
                                         @endif
                                         @endforeach
                                </ul>
                            </marquee>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Slider 1 Area End Here -->
         
        <div class="TickerNews" id="T1">
            <div class="ti_wrapper">
                <div class="ti_slide">
                    <div class="ti_content">
                      
                            
                        <div class="ti_news" style="color: yellow; background-color: #ea8d00;"><a href="#">Welcome to bbs academy</a></div>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Buy Now Area Start Here -->
        <div class="publications-area">
            <div class="container">
                <h2 class="title-default-center">Buy Now</h2>
            </div>
            <div class="container">
                <div class="single-item col-md-3 col-sm-6">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src=" {{asset('assets/img/online-test.jpg')}}" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Online Test Series</a></h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src=" {{ asset('assets/img/study-materials.jpg')}}" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Study Materials</a></h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src=" {{ asset('assets/img/video-course.jpg')}}" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Video Course</a></h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="#"><img class="img-responsive" src=" {{ asset('assets/img/e-books.jpg')}}" alt="product"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="#">Our Books</a></h3>
                            </div>
                            
                        </div>
                    </div>

            </div>
        </div>
        <!-- Buy Now Area End Here -->

        <!-- Counter Area Start Here -->
        <div class="counter-area bg-primary-deep" style="background-image: url('{{asset('assets/img/banner/4.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="about-counter title-bar-counter" data-num="{{$page->result}}">{{$page->result}}</h2>
                        <p>result per year</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="about-counter title-bar-counter" data-num="{{$page->user}}">{{$page->user}}</h2>
                        <p>Users</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="about-counter title-bar-counter" data-num="{{$page->course}}">{{$page->course}}</h2>
                        <p>Courses</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="about-counter title-bar-counter" data-num="{{$page->teacher}}">{{$page->teacher}}</h2>
                        <p>Teacher</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End Here -->

        <div class="students-say-area">
            <h2 class="title-default-center">Online Classes &amp; Student Reviews</h2>
            <div class="container">
                <div class="row">
                <div class="col-md-4">
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/foW60RSA1dA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-8">
                  <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <?php $count = 0;?>
                        @foreach($test as $testimonial) 
                      <li data-target="#quote-carousel" data-slide-to="{{ $count }}" class="@if($count == 0) active @endif"></li>
                      <?php $count++; ?>
                      @endforeach
                    </ol>
                    
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">
                        <?php $count = 0;?>
                        @foreach($test as $testimonial) 
                      <div class="item @if($count == 0) active @endif">
                        <blockquote>
                          <div class="row">
                            

                            <div class="col-sm-3 text-center">
                               <img class="img-circle" src="{{asset($testimonial->image)}}" alt="Testimonial" style="width: 100px;height:100px;">
                            </div>
                            <div class="col-sm-9">
                              <p>{!!$testimonial->content!!}</p>
                              <small>{{$testimonial->name}}</small>
                              <ul class="rating-wrapper">
                                    <?php $rating = $testimonial['rating'] ?>
                                    @for ($i = 1; $i <= $rating; $i++)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                     @endfor                                    
                                </ul>
                            </div>
                            
                          </div>
                        </blockquote>
                      </div>
                      <?php $count++; ?>
                         @endforeach                                       
                    </div>
                    
                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-angle-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-angle-right"></i></a>
                  </div>
                  <div class="event-btn-holder text-center">
                     <a href="https://www.bbsacademy.com/testimonials" class="view-all-primary-btn">View All</a>
                  </div>                          
                </div>
              </div>
                
            </div>
        </div>
        
        <!-- Students Join 2 Area Start Here -->
        <div class="students-join2-area">
            <h2 class="title-default-center text-white">Mobile Apps</h2>
            <div class="container">
                <div class="row ">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="about-page-img-holder">
                            <img src=" {{ asset('assets/img/download-mApp.png')}}" class="img-responsive" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="content-box about-page2-inner text-white">
                            <ul>
                                <li>Online Tests: Bank, SSC & Others</li>
                                <li>Current Affairs: National & International</li>
                                <li>Ebooks: Important updates & Exam Analysis</li>
                                <li>Videos: Recorded Lectures for all projects</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <div class="about-page-img-holder">
                            <img src=" {{ asset('assets/img/mobile-apps-1.png')}}" class="img-responsive" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Students Join 2 Area End Here -->


        <!-- Brand Area Start Here -->
        <div class="brand-area">
            <h2 class="title-default-center">Our Final Toppers</h2>
           
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="6" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="5" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="6" data-r-large-nav="true" data-r-large-dots="false">

                 @foreach ($topper as $top)
                    <div class="brand-area-box">
                        <a href="#"><img src="{{asset($top->image)}}" alt="students" ></a>
                        <h4>{{$top->name }}</h4>
                        <p>{{$top->course}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->



    
