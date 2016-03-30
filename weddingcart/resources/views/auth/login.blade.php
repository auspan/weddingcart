@extends('auth.app')

@section('content')
		<!-- Content
		============================================= -->
		<section class="sectionmar" id="content">

			<div class="content-wrap contdeg">

				<div class="container clearfix">

					<div class="accordion accordion-lg divcenter nobottommargin clearfix accordion-lgdiv">
						<div class="acctitle">
							<i class="acc-closed icon-lock3"></i>
							<i class="acc-open icon-unlock"></i>Login to your Account
						</div>
						<div class="acc_content clearfix acc_content">
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        		{!! csrf_field() !!}
                    			<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
									<div class="col-md-12">
										<label for="login-form-username">E-Mail Address</label>
										<input type="email" id="login-form-username" value="" class="form-control" name="email" value="{{ old('email') }}">
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
                        		</div>
			                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    		    	<div class="col-md-12">
										<label for="login-form-password">Password</label>
										<input type="password" id="login-form-password" value="" class="form-control" name="password">
										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
		                                @endif
        		                    </div>
		                        </div>

								<div class="form-group">
									<div class="col-md-12">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember"> Remember Me
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
								   <div class="col_full nobottommargin">
											<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
											<a href="{{ url('/password/reset') }}" class="fright">Forgot Password?</a>
										</div>
								</div>
                   
                            
								<div class="line line-sm"></div>

								<div class="center">
									<h4 class="divcenterh4">or Login with:</h4>
									<a href="{{ url('/social/auth/redirect', ['facebook']) }}" class="button button-rounded si-facebook si-colored">Facebook</a>
										<span class="hidden-xs">or</span>
										<a href="{{ url('/social/auth/redirect', ['google']) }}" class="button button-rounded si-google si-colored">Google</a>
										</div>
								</div>
							</form>
							<div class="acctitle acctitlec">
								<i class="acc-closed icon-user4"></i>
								<i class="acc-open icon-ok-sign"></i>Don't have an Account? Register Now
							</div>


							<div class="acc_content clearfix div_con">
							

							<form class="form-horizontal" class="nobottommargin" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                    <label for="register-form-username">Name:</label>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           <div class="col-md-12">
                                <input type="text" id="register-form-username" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <label for="register-form-EmailAddress">E-Mail Address:</label>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="col-md-12">
                                <input type="email" id="register-form-EmailAddress" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     <label for="register-form-password">Password:</label>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input type="password" id="register-form-password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <label for="register-form-confirmpassword">Confirm Password:</label>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                           <div class="col-md-12">
                                <input type="password" id="register-form-confirmpassword" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                           <div class="col_full nobottommargin">
                           		<center>
                                    <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="Register">Register Now</button>
                                </center>
                            </div>
                        </div>            
                    </form>
						</div>


						</div>
					</div>
				</div>
			</div>

		</section>
		@stop
		