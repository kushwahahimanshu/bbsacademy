         
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
                                            @foreach($books as $r)
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('ebook/image/'.$r->image)}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('ebook/image/'.$r->image)}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="{{ url('demo/'.$r->id) }}">
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
                                                            <h3><a href="javascript:void(0);">{{$r->title}}</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">{{$r->author}}</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i>{{$r->price}}</ins>
                                                            <!-- <del><i class="fa fa-inr"></i> 27.20</del> -->
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="{{ url('view-book/'.$r->id) }}">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>View Details</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-02.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-02.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Children’s Book</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                            <del><i class="fa fa-inr"></i> 27.20</del>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-03.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-03.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Comic</a></li>
                                                            <li><a href="javascript:void(0);">Adventure</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-04.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-04.jpg')}}"  alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Fantacy &amp; Horor</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-05.jpg')}}"  alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-05.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Children’s Book</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                            <del><i class="fa fa-inr"></i> 27.20</del>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-06.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-06.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Comic</a></li>
                                                            <li><a href="javascript:void(0);">Adventure</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-07.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-07.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Adventure</a></li>
                                                            <li><a href="javascript:void(0);">Fiction</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                            <del><i class="fa fa-inr"></i> 27.20</del>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-08.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-08.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Fantacy &amp; Horor</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-09.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-09.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Children’s Book</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                            <del><i class="fa fa-inr"></i> 27.20</del>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-10.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-10.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Comic</a></li>
                                                            <li><a href="javascript:void(0);">Adventure</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-11.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-11.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Adventure</a></li>
                                                            <li><a href="javascript:void(0);">Fiction</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                            <del><i class="fa fa-inr"></i> 27.20</del>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                                <div class="tg-postbook">
                                                    <figure class="tg-featureimg">
                                                        <div class="tg-bookimg">
                                                            <div class="tg-frontcover"><img src="{{asset('assets/ecom/images/books/img-12.jpg')}}" alt="image description"></div>
                                                            <div class="tg-backcover"><img src="{{asset('assets/ecom/images/books/img-12.jpg')}}" alt="image description"></div>
                                                        </div>
                                                        <a class="tg-btnaddtowishlist" href="javascript:void(0);">
                                                            <i class="icon-heart"></i>
                                                            <span>Buy Now</span>
                                                        </a>
                                                    </figure>
                                                    <div class="tg-postbookcontent">
                                                        <ul class="tg-bookscategories">
                                                            <li><a href="javascript:void(0);">Adventure</a></li>
                                                            <li><a href="javascript:void(0);">Fun</a></li>
                                                        </ul>
                                                        <div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>
                                                        <div class="tg-booktitle">
                                                            <h3><a href="javascript:void(0);">Help Me Find My Stomach</a></h3>
                                                        </div>
                                                        <span class="tg-bookwriter">By: <a href="javascript:void(0);">Angela Gunning</a></span>
                                                        
                                                        <span class="tg-bookprice">
                                                            <ins><i class="fa fa-inr"></i> 25.18</ins>
                                                        </span>
                                                        <a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
                                                            <i class="fa fa-shopping-basket"></i>
                                                            <em>Buy Now</em>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div> -->
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
                                                <?php $count=DB::table('ebooks')->where('category',$r->name)->count();
                                                //dd($count); ?>
                                                <li><a href="{{url('bookcategory/'.$r->name)}}"><span>{{$r->name}}</span><em>{{$count}}</em></a></li>
                                                @endforeach
                                                                           
                                                <li><a href="{{url('books')}}"><span>View All</span></a></li>
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