<!-- About Page 2 Area Start Here -->
<div class="about-page2-area">
    <div class="container">
        <div class="row about-page2-inner">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h2 class="title-default-left dark">{{$page_subtitle}}</h2>
                <p>{!! $info->content !!}</p>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="about-page-img-holder">
                    <img src="{{asset($info->image)}}" class="img-responsive" alt="about">
                </div>
                <div class="video-area2 overlay-video bg-common-style video-margin-top" style="background-image: url('{{asset('assets/img/banner/6.jpg')}}');">
                    <div class="video-content">
                        <a class="play-btn popup-youtube" href="{{$info->video_link}}"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Page 2 Area End Here -->  <!-- src="{{ asset('assets/img/banner/6.jpg') }}"  -->