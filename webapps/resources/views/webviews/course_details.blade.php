@extends('master')

@section('main_body')
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('{{ asset('assets/img/our_branch.jpg') }}');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Course</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Course Details</li>
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
                        <a href="#" title="{{$r->tab_name}}" class="list-group-item  @if($count == 1) active @endif"><i class="fa fa-pencil"></i>{{$r->tab_name}}</a>
                          <?php $count++; ?>
                        @endforeach 
                      </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                        <?php $count = 1; ?>
                        <!-- flight section -->
                        @foreach($test as $r)
                          <div class="bhoechie-tab-content @if($count == 1) active @endif">
                              <h3>{{$r->tab_name}}</h3>
                              <p>{!! $r->content !!}</p>
                          </div>
                          <?php $count++; ?>
                        @endforeach
                    </div>
                </div>
            </div>         
        </div>
@stop

       


 
