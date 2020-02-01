   @extends('master')

@section('main_body')
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('{{ asset('assets/img/our_branch.jpg') }}');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Course</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Course</li>
                    </ul>
                </div>
            </div>
        </div> 
        <!-- Inner Page Banner Area End Here -->
        <div class="franchise-area">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                      <div class="list-group">
                        <?php $count = 1; ?>
                        @foreach($test as $r)
                        <a href="#" title="BBS Academy" class="list-group-item  @if($count == 1) active @endif"><i class="fa fa-pencil"></i>{{$r->title}}</a>
                          <?php $count++; ?>
                        @endforeach 
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bhoechie-tab">
                        <?php $count = 1; ?>
                        <!-- flight section -->
                        @foreach($test as $r)
                          <div class="bhoechie-tab-content @if($count == 1) active @endif">
                              <h3>{{$r->title}}</h3>
                              <p>{!! $r->content !!}</p>
                          </div>
                          <?php $count++; ?>
                        @endforeach
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                       <button type="button" class="default-big-btn btn-franchisee" data-toggle="modal"       data-target="#FranchiseeModal">Apply for Franchisee</button>
                      <div class="ad-banner">
                           <img src="{{asset('assets/img/franchise-ad-banner.jpg')}}" alt="" class="img-responsive">
                     </div>
                     <div class="video-area2 overlay-video bg-common-style video-margin-top" style="background-image: url('assets/img/banner/5.jpg');">
                        <div class="video-content">
                          <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=foW60RSA1dA"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                     </div>
                    </div>
                </div>
            </div>         
        </div>



         






@stop

       


 
