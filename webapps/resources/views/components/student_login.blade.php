<!DOCTYPE html>
<html class="no-js" lang="">
	<head>

		@include('common.meta')
		@include('common.css')
	</head>
	<body style="background-color: rgba(0,0,0,0);">
		<!-- Main Body Area Start Here -->
		<div id="wrapper">
            <div class="about-page2-area loginpage" style="background-image:url('assets/img/login-bg.jpg'); min-height: 100vh;">
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
			                <div class="account-box">
			                <div class="logo-area">
			                    <a href="\bbs"><img class="img-responsive" src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
			                </div>                
			                    <form class="form-signin row" action="{{route('login')}}" method="POST">
			                    	{{csrf_field()}}
			                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
			                            <h2 class="title">Student Login</h2>
			                            <hr class="colorgraph">
			                        </div>
			                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-xs-12 col-sm-12 col-md-12">
			                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus />
			                            @if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
			                        </div>
			                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-xs-12 col-sm-12 col-md-12">
			                            <input type="password" name="password" class="form-control" placeholder="Password" required />
			                            @if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
			                        </div>
			                        
			                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
			                            <label class="text-dark">
			                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} value="remember-me" />
			                                Keep me signed in
			                            </label>
			                        </div>  
			                        <div class="form-group col-xs-6 col-sm-6 col-md-6">
			                            <input class="btn btn-lg btn-block btn-warning" type="submit" value=" LOGIN ACCOUNT">
			                               
			                        </div>
			                        <div class="col-xs-6 col-md-6">
			                        <a href="{{url('student_registration')}}" class="btn btn-success btn-block btn-lg">
			                                CREATE ACCOUNT</a>
			                        </div>
			                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
			                            <a href="" class="text-dark">Forgot Password?</a>
			                        </div> 
			                        <div class="col-xs-12 col-sm-12 col-md-12">
			                           <hr class="colorgraph">      
			                        </div>   
			                         
			                    <div class="col-xs-6 col-md-6">
			                        <a href="#" class="btn btn-danger btn-block btn-lg">
			                                Login with Google</a>
			                    </div>
			                    <div class="col-xs-6 col-md-6">
			                        <a href="#" class="btn btn-primary btn-block btn-lg">
			                                Login with Facebook</a>
			                    </div>                               
			                    </form> 

			                </div>
			            </div>
			            
			        </div>
			    </div>
            </div>

		</div>
		@include('common.js')
	</body>
</html>