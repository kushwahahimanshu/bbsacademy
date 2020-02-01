@extends('master')

@section('main_body')
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('{{ asset('assets/img/our_branch.jpg') }}');" >
            <div class="container">
                <div class="pagination-area">
                    <h1>Media And Events</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Media and Events</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->

        <div class="centers-area">
            <div class="container" id="inner-isotope">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="isotop-classes-tab isotop-btn">
                            <a href="#" data-filter="*" class="current">All</a>
                            <a href="#" data-filter=".academic">Academic Events</a>
                            <a href="#" data-filter=".non-academic">Non-Academic Events</a>
                            <a href="#" data-filter=".press">Press Coverage</a>
                        </div>
                    </div>
                </div>
                <div class="row featuredContainer">
                    @foreach($info as $data)
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 {{$data->event_type}}">
                        <div class="gallery-box">
                            <img src="{{asset($data->image)}}" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="{{asset($data->image)}}" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>         
        </div>





@stop