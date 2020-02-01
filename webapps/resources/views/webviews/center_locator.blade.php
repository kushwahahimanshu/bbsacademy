@extends('master')

@section('main_body')
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('{{ asset('assets/img/our_branch.jpg') }}');" >
            <div class="container">
                <div class="pagination-area">
                    <h1>Center Locater</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Center Locater</li>
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
                            <a href="#" data-filter=".north">North</a>
                            <a href="#" data-filter=".east">East</a>
                            <a href="#" data-filter=".south">South</a>
                            <a href="#" data-filter=".west">West</a>
                        </div>
                    </div>
                </div>
                <div class="row featuredContainer">
                    @foreach($info as $data)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 {{ $data->region }}">
                            <div class="courses-box1">
                                <div class="single-item-wrapper">                                
                                    <div class="courses-content-wrapper">
                                        <h3 class="item-title"><a href="#">{{$data->city}}</a></h3>
                                        <p class="item-content">
                                            {{$data->address}}.<br>
                                            +91-{{$data->phone1}}<br>
                                            @if($data->phone2)+91-{{$data->phone2}}<br>@endif
                                            {{$data->email_1}}<br>
                                            @if($data->email_2){{$data->email_2}}@endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>         
        </div>





@stop