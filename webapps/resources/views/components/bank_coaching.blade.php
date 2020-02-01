 <div class="courses-area">
           <div class="container">
                <div class="row">
                @foreach($courses as $r)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="course-box3">
                            <div class="course-box-icon">
                                <a href="{{url('course-details/'.$r->id)}}"><img src="{{url('upload/'.$r->image)}}" class="img-responsive" alt="Course"></a>
                            </div>
                            <h3><a href="{{url('course-details/'.$r->id)}}">{{$r->course_name}}</a></h3>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>          
        </div>
        <!-- End Here -->


        <script type="text/javascript">
            $(document).ready(function() {
                $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                    e.preventDefault();
                    $(this).siblings('a.active').removeClass("active");
                    $(this).addClass("active");
                    var index = $(this).index();
                    $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                    $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
                });
            });
        </script>