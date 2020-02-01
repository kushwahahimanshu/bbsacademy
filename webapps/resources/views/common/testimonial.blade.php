<div class="students-say-area">
            <h2 class="title-default-center">Online Classes & Student Reviews</h2>
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false" data-r-large-dots="true">
            
             @foreach($test as $testimonial) 

                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="profile-img-wrapper">
                                <a href="#" class="profile-img"><img class="profile-img-responsive img-circle" alt="Testimonial" src="{{asset($testimonial->image)}}" style="height:150px;width:150px;"></a>
                            </div>
                            <div class="tlp-tm-content-wrapper">
                                <h3 class="item-title"><a href="#">{{$testimonial->name}}</a></h3>
                                <span class="item-designation">Student</span>
                                <ul class="rating-wrapper">
                                    <?php $rating = $testimonial['rating'] ?>
                                    @for ($i = 1; $i <= $rating; $i++)
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                     @endfor                                    
                                </ul>
                                <div class="item-content">{!!$testimonial->content!!}</div>
                            </div>
                        </div>
                    </div>
             @endforeach
                </div>
                <div><button class="btn btn-primary" style="margin-left: 47%;"><a href="" style="color: white;">View All </a></button></div>
            </div>
        </div>