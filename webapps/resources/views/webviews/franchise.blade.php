   @extends('master')

@section('main_body')
        <!-- Inner Page Banner Area Start Here -->
        <!-- Inner Page Banner Area Start Here -->
        <!-- <div class="inner-page-banner-area" style="background-image: url('{{ asset('assets/img/our_branch.jpg') }}');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Franchise</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Franchise</li>
                    </ul>
                </div>
            </div>
        </div>  -->
        <!-- Inner Page Banner Area End Here -->
        <div class="slider1-area overlay-default">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <?php $count = 1; ?>
                    @foreach($info as $data)
                        <img src="{{asset($data->image)}}" alt="slider" title="#slider-direction-{{ $count }}" />
                        <?php $count++; ?>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="franchise-area">
            <div class="container-fluid">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                      <div class="list-group">
                        <?php $count = 1; ?>
                        @foreach($test as $r)
                        <a href="#" title="BBS Academy" class="list-group-item  @if($count == 1) active @endif"><i class="fa fa-pencil"></i>{{$r->title}}</a>
                          <?php $count++; ?>
                        @endforeach 
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bhoechie-tab">
                        <?php $count = 1; ?>
                        <!-- flight section -->
                        @foreach($test as $r)
                          <div class="bhoechie-tab-content @if($count == 1) active @endif">
                              <h3>{{$r->title}}</h3>
                              <p>{!! $r->content !!}</p>
                          </div>
                          <?php $count++; ?>
                        @endforeach
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                       <button type="button" class="default-big-btn btn-franchisee" data-toggle="modal"       data-target="#FranchiseeModal">Apply for Franchisee</button>
                      <div class="ad-banner">
                           <img src="{{asset('assets/img/franchise-ad-banner.jpg')}}" alt="" class="img-responsive">
                     </div>
                     <div class="video-area2 overlay-video bg-common-style video-margin-top" style="background-image: url('assets/img/banner/5.jpg');">
                        <div class="video-content">
                          <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=foW60RSA1dA"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                     </div>
                    </div>
                </div>
            </div>         
        </div>

<!-- model 2 -->
<div id="FranchiseeModal" class="modal fade" role="dialog" tabindex="-1" style="z-index: 999999999">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header  bg-primary">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title text-center">Apply for Franchisee</h4>
            </div>
            <div class="modal-body">
                <div class="contact-form1">
                    <form id="franchisee-form" action="{{url('apply_frenchise')}}" method="post">
                            {{csrf_field()}}
                                                    
                        <fieldset class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Franchisee will be taken</label>
                                    <div class="radio radio-success col-md-5">
                                        <input type="radio" value="Individual" class="radio" name="frtaken" id="individual" checked=""> 
                                        <label for="individual">Individual</label>
                                    </div>
                                    <div class="radio radio-success col-md-7">
                                        <input type="radio" value="Group of Individual" class="radio" name="frtaken" id="groupindividual"> 
                                        <label for="groupindividual">Group of Individual</label>
                                    </div>                                            
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>No of People</label>
                                    <input type="text" placeholder="No of People" class="form-control" name="people" id="people" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <l0abel>Name of Individual </label>
                                    <input type="text" placeholder="Individual Name*" class="form-control" name="name" id="form-name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Your Email ID</label>
                                    <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Your Mobile no.</label>
                                    <input type="text" placeholder="Mobile*" class="form-control" name="mobile" id="mobile" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Franchisee for the city</label>
                                    <input type="text" placeholder="Enter City" class="form-control" name="city" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>State in which above city</label>
                                    <select class="form-control" name="state">
                                        <option value="">Select State</option>
                                                                                <option value="1">Andaman and Nicobar Islands</option>
                                                                                <option value="2">Andhra Pradesh</option>
                                                                                <option value="3">Arunachal Pradesh</option>
                                                                                <option value="4">Assam</option>
                                                                                <option value="5">Bihar</option>
                                                                                <option value="6">Chandigarh</option>
                                                                                <option value="7">Chhattisgarh</option>
                                                                                <option value="8">Dadra and Nagar Haveli</option>
                                                                                <option value="9">Daman and Diu</option>
                                                                                <option value="10">Delhi</option>
                                                                                <option value="11">Goa</option>
                                                                                <option value="12">Gujarat</option>
                                                                                <option value="13">Haryana</option>
                                                                                <option value="14">Himachal Pradesh</option>
                                                                                <option value="15">Jammu and Kashmir</option>
                                                                                <option value="16">Jharkhand</option>
                                                                                <option value="17">Karnataka</option>
                                                                                <option value="19">Kerala</option>
                                                                                <option value="20">Lakshadweep</option>
                                                                                <option value="21">Madhya Pradesh</option>
                                                                                <option value="22">Maharashtra</option>
                                                                                <option value="23">Manipur</option>
                                                                                <option value="24">Meghalaya</option>
                                                                                <option value="25">Mizoram</option>
                                                                                <option value="26">Nagaland</option>
                                                                                <option value="29">Odisha</option>
                                                                                <option value="31">PUDUCHERRY</option>
                                                                                <option value="32">Punjab</option>
                                                                                <option value="33">Rajasthan</option>
                                                                                <option value="34">Sikkim</option>
                                                                                <option value="35">Tamil Nadu</option>
                                                                                <option value="36">Telangana</option>
                                                                                <option value="37">Tripura</option>
                                                                                <option value="38">Uttar Pradesh</option>
                                                                                <option value="39">Uttarakhand</option>
                                                                                <option value="41">West Bengal</option>
                                                                            </select>                                            
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" placeholder="Address 1*" class="form-control" name="address1" id="address1" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Address 2*" class="form-control" name="address2" id="address2" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Office Space</label>
                                    <div class="radio radio-success col-md-6">
                                        <input type="radio" value="Own" class="radio" name="space" id="own" checked=""> 
                                        <label for="own">Own</label>
                                    </div>
                                    <div class="radio radio-success col-md-6">
                                        <input type="radio" value="Rented" class="radio" name="space" id="rented"> 
                                        <label for="rented">Rented</label>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Area (sq. ft.)</label>
                                    <div class="radio radio-success col-md-4">
                                        <input type="radio" value="500-1000" class="radio" name="area" id="aria1" checked=""> 
                                        <label for="aria1">500-1000</label>
                                    </div>
                                    <div class="radio radio-success col-md-4">
                                        <input type="radio" value="1000-1500" class="radio" name="area" id="aria2"> 
                                        <label for="aria2">1000-1500</label>
                                    </div>
                                    <div class="radio radio-success col-md-4">
                                        <input type="radio" value="1500-2000" class="radio" name="area" id="aria3"> 
                                        <label for="aria3">1500-2000</label>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Degree colleges in city</label>
                                    <input type="text" placeholder="No. of Degree Colleges" class="form-control" name="degcolleges" id="colleges" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Engg. colleges in city</label>
                                    <input type="number" placeholder="No. of Engg. Colleges" class="form-control" name="engcolleges" id="engcolleges" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Schools in city</label>
                                    <input type="text" placeholder="No. of Schools" class="form-control" name="schools" id="schools" required="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                <div class="form-group margin-bottom-none">
                                    <button type="submit" class="default-big-btn">Submit</button>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                                <div class="form-response"></div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


         






@stop

       


 
