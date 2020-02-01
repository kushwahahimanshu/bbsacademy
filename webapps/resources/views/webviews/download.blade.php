@extends('master')

@section('main_body')

	@include('components/page_title')
    <div class="publications-area">
            <div class="container">
                <div class="single-item col-md-3 col-sm-6">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="monthly"><img class="img-responsive" src=" {{asset('assets/img/monthly-magazine.jpg')}}" alt="Magazines"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="monthly">Monthly Magazines</a></h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="newslatter"><img class="img-responsive" src=" {{ asset('assets/img/newsletter.jpg')}}" alt="newsletter"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="newslatter">News Latter</a></h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="examcracker"><img class="img-responsive" src=" {{ asset('assets/img/main-exam-cracker.jpg')}}" alt="examcracker" style="width: 255px !important; height: 255px !important;"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="examcracker">Exam Cracker</a></h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="single-item col-md-3 col-sm-6">
                        <div class="single-item-wrapper">
                            <div class="publications-img-wrapper">
                                <a href="mock"><img class="img-responsive" src=" {{ asset('assets/img/Exam-Book.jpg')}}" alt="Books" style="width: 255px !important; height: 255px !important;"></a>
                            </div>
                            <div class="publications-content-wrapper">
                                <h3 class="item-title"><a href="mock">Mocs/Practice Test</a></h3>
                            </div>
                            
                        </div>
                    </div>

            </div>
        </div>
@stop

