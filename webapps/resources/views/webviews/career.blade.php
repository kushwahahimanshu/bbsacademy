   @extends('master')

@section('main_body')
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('{{ asset('assets/img/career-banner1.jpg') }}');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Career</h1>
                    <ul>
                        <li><a href="#">Home</a> -</li>
                        <li>Career</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->

        <div class="career-area">
            <div class="container">
                 <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 career-details">
                    <h2 class="title-default-left dark">Post Apply for</h2>
                    <div class="contact-form1" >
                        @if(Session::has('success'))
                         <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Alert!</h4>
                            {{Session('success')}}
                         </div>
                        @endif
                         <form  action="{{url('career_data')}}" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                                <fieldset class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <select class="form-control" name="post_type">
                                                <option>Select Job Category</option>
                                                @foreach($jobpost as $r)
                                                    <option value="{{ $r->id }}">{{ $r->post_name }}</option>  
                                                @endforeach   
                                            </select> 
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </fieldset>
                            <p>Take a job opportunity of a lifetime join BBS Academy. We are interested in hiring professionals for a long term and also provide an opportunity of quality job.</p>

                            <h4>How To Apply</h4>
                            <p>Candidates have to apply online and no other mode of application will be accepted.</p>

                            <h4>Procedure for applying online</h4>
                            <ul>
                                <li>Candidates are first required to go to the company’s website www.bbsacademy.com and click on the “Careers” option to open the page and then click to proceed button to their choice of desired vacancy.</li>
                                <li>Candidates will have to enter their basic details and thereby upload and submit the application form.</li>
                                <li>After submitting the form a registration number will appear.</li>
                                <li>The candidate has to take the print out or keep the registration number with him/her for further reference till final selection.</li>
                            </ul>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 resume-upload text-center">
                    <h2 class="title-default-left dark">Upload Your Resume</h2>
                        <div class="contact-form1">
                           
                                <fieldset class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="file" placeholder="Upload Your Resume*" class="form-control" name="image">
                                            <div class="help-block with-errors"></div>
                                            <p>Files must be less than 2 MB.<br>
                                            Allowed file types: pdf doc docx.</p>
                                        </div>
                                    </div>                                   
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group margin-bottom-none">
                                            <button type="submit" class="default-big-btn">Submit</button>
                                        </div>
                                    </div>                                    
                                </fieldset>
                            </form>
                        </div>
                        <h4>OR</h4>
                        <p>Send your updated resume at <a href="mailto:hr@bbsacademy.com">hr@bbsacademy.com</a><br>
                            Our HR team will contact shortly</p>
                </div>
            </div>         
        </div>




@stop

       


 
