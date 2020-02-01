<!DOCTYPE html>
<html class="no-js" lang="">
	<head>

		@include('common.meta')
		@include('common.css')
	</head>
	<body style="background-color: rgba(0,0,0,0);">
		<!-- Main Body Area Start Here -->
		<div id="wrapper">
       

    
<!-- About Page 2 Area Start Here -->
			<div class="about-page2-area loginpage" style="background-image: url('assets/img/login-bg.jpg');">
			    <div class="container">
			        <a href="/bbs" class="pop-close"><img src="{{asset('assets/img/cancel.png')}}" alt="" />
			        </a>
			          <div class="row about-page2-inner">
			                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			                    <div class="about-page-img-holder">
			                       <img src="{{asset('assets/img/student-login.png')}}" class="img-responsive" alt="Student Login">
			                    </div>
			                    <div class="content-box about-page2-inner text-white">
			                        <ul>
			                            <li>Online Tests: Bank, SSC & Others</li>
			                            <li>Current Affairs: National & International</li>
			                            <li>Ebooks: Important updates & Exam Analysis</li>
			                            <li>Videos: Recorded Lectures for all projects</li>
			                        </ul>
			                    </div>
			                    <div class="about-page-img-holder">
			                       <img src="{{asset('assets/img/appstore_download.png')}}" class="img-responsive" alt="Student Login">
			                    </div>                    
			                </div>
			                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> 
					                @if(Session::has('success'))
						            <div class="alert alert-success alert-dismissible">
						                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						                <h4><i class="icon fa fa-check"></i> Alert!</h4>
						                {{Session('success')}}
						              </div>
						            @endif                       
			                    <div class="account-box">                
			                     <div class="logo-area">
			                         <a href="/bbs"><img class="img-responsive" src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
			                    </div>
			                    <form action="{{url('std_reg')}}" method="post"  role="form" class="register-form row">
			                    	{{csrf_field()}}
			                        <div class="col-xs-12 col-sm-12 col-md-12">
			                            <h2 class="title">Student Sign Up</h2>
			                            <hr class="colorgraph">
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-6">
			                            <div class="form-group">
			                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-6">
			                            <div class="form-group">
			                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-12 col-md-12">
			                            <div class="form-group">
			                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" >
			                            </div>
			                            <div class="form-group">
			                                <input type="text" name="phone" id="display_name" class="form-control" placeholder="Mobile No" >
			                            </div>
			                            
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-6">
			                            <div class="form-group">
			                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-6">
			                            <div class="form-group">
			                                <input type="password" name="confirm_pass" id="password_confirmation" class="form-control" placeholder="Confirm Password" >
			                            </div>
			                        </div>
			                       
			                        <div class="col-xs-12 col-sm-12 col-md-12">
			                            <label>
			                                <input type="checkbox" value="remember-me" />
			                                I agree to the <a href="#" class="text-dark">Terms and Conditions</a> including all services.
			                            </label>  
			                                                         
			                        </div>

			                        <div class="form-group col-xs-6 col-sm-6 col-md-6">
			                            <button class="btn btn-success btn-block btn-lg" type="submit">
			                                    CREATE ACCOUNT </button>
			                        </div>  
			                        <div class="col-xs-12 col-sm-12 col-md-12">
			                            <label>Have a account? <a href="{{url('student_login')}}" class="text-warning">
			                                Login Now</a></label>
			                            <hr class="colorgraph">      
			                        </div>   
			                             
			                        <div class="col-xs-6 col-md-6">
			                            <a href="#" class="btn btn-danger btn-block btn-lg">
			                                    Signup with Google</a>
			                        </div>
			                        <div class="col-xs-6 col-md-6">
			                            <a href="#" class="btn btn-primary btn-block btn-lg">
			                                    Signup with Facebook</a>
			                        </div>
			                    </form>
			                       
			                    </div>
			                </div>
			                
			            </div>
			    </div>
			</div>
<!-- About Page 2 Area End Here -->
        </div>
		@include('common.js')
	</body>
</html>