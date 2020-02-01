<section style="margin-top: 15px;">
	<div class="container video1">
        <div class="row">
         <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right">
          <h3><b style="color: green;">{{$courses->category}}</b></h3>
          <div class="row">
          	<div class="col-md-8">
          		 @php
                       if(!empty($courses->image))
                      { @endphp 
                        <img src="{{asset('ebook/image/'.$courses ->image)}}" style="height: 300px; width: 300px;">
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
          	<div class="col-md-4">
		  		<h2 style="color: blue">{{ $courses->title }}</h2>
		        <p><b>By</b> {{ $courses->author }}</p>
		        @if(Auth::user())
			        @if($is_bought == 0)
		        		<hr class="hr">
			        	<h4><span style="font-weight: bold;">Price : ₹ {{ $courses->price }}</span></h4>
						<a class="btn btn-danger" href="{{ url('demo/'.$courses->id) }}" style="width: 100%;">View Demo</a>
			        	<a class="btn btn-danger" href="{{ url('buy-course/3/'.$courses->id) }}" style="width: 100%; margin-top:10px;">Buy Now</a>
					@else
						<hr class="hr">
			        	<a class="btn" href="{{ url('read-now/'.$courses->id) }}" style="width: 100%; margin-top:10px;">Read Now</a>
		        	@endif
		        @else
		        	<h4><span style="font-weight: bold;">Price : ₹ {{ $courses->price }}</span></h4>
		        	<a class="btn btn-danger" href="{{ url('demo/'.$courses->id) }}" target="_blank" style="width: 100%; ">View Demo</a>
              <a class="btn btn-danger" href="{{ url('buy-course/'.$courses->id) }}" style="width: 100%; margin-top:10px;">Buy Now</a>	        	
	        	@endif
		        <hr class="hr"> </div></div>
            <div class="row">
               <h3>Description</h3>
               <p>{!! $courses->description !!}</p>
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
                                                <li><a href="javascript:void(0);"><span>IBPS</span><em>4856</em></a></li>
                                                <li><a href="javascript:void(0);"><span>SSC</span><em>8654</em></a></li>
                                                <li><a href="javascript:void(0);"><span>Insurance</span><em>6247</em></a></li>
                                                <li><a href="javascript:void(0);"><span>Railways</span><em>888654</em></a></li>
                                                <li><a href="javascript:void(0);"><span>Difence</span><em>873144</em></a></li>
                                                <li><a href="javascript:void(0);"><span>Others</span><em>18465</em></a></li>                                               
                                                <li><a href="{{url('books')}}"><span>View All</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
        </div>
      </div>
  	</div>
</section>

