<section style="margin-top: 15px;">
	<div class="container video1">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
            <h3><b style="color: green;">{{$courses->category}}</b></h3>
                    @if($demo != null)
                      <div class="col-md-8">
                        <!-- <iframe width="640" height="360" src="{{url('https://www.youtube.com/embed/ghDc835Btw8')}}" frameborder="0" allowfullscreen></iframe> -->
                        <video controls autobuffer autoplay style="width: 100%;">
                          <source src="{{ asset('videos/'.$demo->video) }}" type="video/mp4">
                          <source src="{{ asset($demo->video) }}" type="video/ogg">
                          <source src="{{ asset($demo->video) }}" type="video/webm">
                          Your browser does not support the video tag.
                        </video>
                      </div>
                    @else
                     <div class="col-md-8">
                         @php
                       if(!empty($courses->cover))
                      { @endphp 
                        <img src="{{asset('video_cover_image/'.$courses ->cover)}}" style="height: 300px; width: 300px;">
                      @php
                        }
                        else
                        {
                      @endphp
                      <h6>No Image Found</h6>
                      @php 
                        } 
                      @endphp
                      </div>
                    @endif
                      <div class="col-md-4">
                        <h2 style="color: blue;">{{ $courses->name }}</h2>
                          <p><b>By</b> {{ $courses->author }}</p>
                          @if(Auth::user())
                            @if($is_bought == 0)
                              <hr class="hr">
                              <h4><span style="font-weight: bold;">Price : ₹ {{ $courses->price }}</span></h4>
                              <a class="btn btn-danger" href="{{ url('buy-course/2/'.$courses->id) }}" style="width: 100%;">Buy Now</a>
                            @endif
                          @else
                            <h4><span style="font-weight: bold;">Price : ₹ {{ $courses->price }}</span></h4>
                            <a class="btn btn-danger" href="{{ url('buy-course/2/'.$courses->id) }}" style="width: 100%;">Buy Now</a>             
                          @endif
                          <hr class="hr">
                      </div>
                    
                    <div class="row" style="margin-top: 350px;">
                      <div class="heading">
                     <h2>All Videos</h2>
                    </div>
                     @foreach($videos as $r)
                      <div class="col-md-3 video">
                          @if($r->demo==1)
                              <video style="width: 100%;">
                                <source src="{{ asset($r->video) }}" type="video/mp4">
                                <source src="{{ asset($r->video) }}" type="video/ogg">
                                <source src="{{ asset($r->video) }}" type="video/webm">
                                Your browser does not support the video tag.
                              </video>
                          @else
                            @php
                             if(!empty($courses->cover))
                            { @endphp 
                              <img src="{{asset('video_cover_image/'.$courses ->cover)}}" style="height: 100px; width: 300px;">
                            @php
                              }
                              else
                              {
                            @endphp
                            <h6>No Image Found</h6>
                            @php 
                              } 
                            @endphp
                          @endif
                              <h6>{{ $courses->category }}</h6>
                              <hr class="hr">
                            @if(Auth::user())
                                  @if($is_bought == 1)
                                    <h4>
                                      <a href="{{ url('view-course/'.$courses->id.'/'.$r->id) }}" style="color: blue;" class="stretched-link">{{ $r->title }}</a>
                                    </h4>
                                  @else
                                  <h4 class="d-flex justify-content-between">
                                    <span style="color: blue;">{{ $r->title }}</span>
                                    <a class="" href="{{ url('buy-course/2/'.$courses->id) }}" style="background-color:red; color: #fff; font-size: 18px; padding: 6px; border-radius: 5px;">Buy Now</a>
                                  </h4>
                                  @endif
                            @else
                                @if($r->demo == 1)
                                  <h4><a href="{{ url('view-course/'.$courses->id) }}" style="color: blue;" class="stretched-link">{{ $r->title }}</a></h4>
                                @else
                                  <h4 class="d-flex justify-content-between">
                                    <span style="color: blue;">{{ $r->title }}</span>
                                    <a class="" href="{{ url('buy-course/2/'.$courses->id) }}" style="background-color:red; color: #fff; font-size: 18px; padding: 6px; border-radius: 5px;">Buy Now</a>
                                  </h4>  
                                @endif
                            @endif      
                          </div>
                      @endforeach
                    </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left">
            <aside id="tg-sidebar" class="tg-sidebar">
                <div class="tg-widget tg-catagories">
                    <div class="tg-widgettitle">
                        <h3>Course Categories</h3>
                    </div>
                    <div class="tg-widgetcontent">
                        <ul>
                            @foreach($category as $r)
                            <?php $count=DB::table('video_courses')->where('category',$r->name)->count();
                            //dd($count); ?>
                            <li><a href="{{url('courseCategory/'.$r->name)}}"><span>{{$r->name}}</span><em>{{$count}}</em></a></li>
                            @endforeach
                            <li><a href="javascript:void(0);"><span>IBPS</span><em>4856</em></a></li>
                            <li><a href="javascript:void(0);"><span>SSC</span><em>8654</em></a></li>
                            <li><a href="javascript:void(0);"><span>Insurance</span><em>6247</em></a></li>
                            <li><a href="javascript:void(0);"><span>Railways</span><em>888654</em></a></li>
                            <li><a href="javascript:void(0);"><span>Difence</span><em>873144</em></a></li>
                            <li><a href="javascript:void(0);"><span>Others</span><em>18465</em></a></li>                                               
                            <li><a href="{{url('video')}}"><span>View All</span></a></li>
                        </ul>
                    </div>
                </div>
            </aside>
          </div>
        </div>
      </div>
  	</div>
</section>


