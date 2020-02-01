@extends('master')

@section('main_body')
        <div class="inner-page-banner-area" style="background-image: url('{{ asset('assets/img/banner/5.jpg') }}');" >
            <div class="container">
                <div class="pagination-area">
                    <h1>Our Team</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Lecturers Area Start Here -->
        <div class="lecturers-area">
            <div class="container">
                <h2 class="title-default-left dark">Our Skilled Lecturers</h2>
            </div>
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                    @foreach($info as $data)
                    
                    <div class="single-item">
                        <div class="single-item-wrapper">
                            <div class="lecturers-img-wrapper">
                                <a href="#"><img class="img-responsive" src="{{asset($data->image)}}" alt="team"></a>
                            </div>
                            <div class="lecturers-content-wrapper">
                                <h3 class="item-title">{{$data->name}}</h3>
                                <span class="item-designation">{{$data->designation}}</span>
                                <ul class="lecturers-social">
                                    <li><a href="#" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <!-- Lecturers Area End Here -->
        @stop