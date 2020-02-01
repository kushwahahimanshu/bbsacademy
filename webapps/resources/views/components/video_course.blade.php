         
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
                    News Grid Start
            *************************************-->
            <div class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="tg-twocolumns" class="tg-twocolumns">
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
                                <div id="tg-content" class="tg-content">
                                    <div class="tg-products">
                                        <div class="tg-sectionhead">
                                            <h2><span>People’s Choice</span>{{$content}}</h2>
                                        </div>
                                        
                                        <div class="tg-productgrid">
                                            @foreach($courses as $r)
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('video_cover_image/'.$r->cover)}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('video_cover_image/'.$r->cover)}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="{{ url('view-video/'.$r->id) }}">
                                                            <i class="icon-heart"></i>
                                                            <span>View Demo</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">{{$r->category}}</a></li>
                                                        </ul>
                                                        <!-- <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div> -->
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">{{$r->name}}</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">{{$r->author}}</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i>{{$r->price}}</ins>
                                                            <!-- <del><i class="fa fa-inr"></i> 27.20</del> -->
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="{{ url('view-video/'.$r->id) }}">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>View Details</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                        </div>
                                    </div>
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
                                                <li><a href="{{url('video')}}"><span>View All</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
                    News Grid End
            *************************************-->
        </main>
        <!--************************************
                Main End