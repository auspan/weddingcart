@extends('auth.app')

@section('content')

        <section class="sectionmar" id="content">

            <div class="content-wrap contdeg">

                <div class="container clearfix">

                    <div class="accordion accordion-lg divcenter nobottommargin clearfix accordion-lgdiv">

                        <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Create your Account</div>
                        
                            <!--<form id="login-form" name="login-form" role="from" class="nobottommargin" action="{ url('/login') }}" method="post">
                                <div class="col_full">
                                    <label for="login-form-username">Username:</label>
                                    <input id="login-form-username" name="login-form-username" class="form-control" type="text">
                                </div>

                                <div class="col_full">
                                    <label for="login-form-password">Password:</label>
                                    <input id="login-form-password" name="login-form-password" value="" class="form-control" type="password">
                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                    <a href="{{ url('/password/reset') }}" class="fright">Forgot Password?</a>
                                </div>
                            </form>-->

                             <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                    <label for="register-form-username">Name:</label>
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                           <div class="col-md-12">
                                <input type="text" id="login-form-username" class="form-control" name="name" value="{{ old('name') }}">

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
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

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
                                <input type="password" class="form-control" name="password">

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
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <center>
                        <div class="form-group">
                           <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="Register">Register Now</button>
                            </div>
                        </div>            
                    </center>
                         <div class="line line-sm"></div>

                            <div class="center">
                                <h4 class="divcenterh4">or Login with:</h4>
                                <a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
                                    <span class="hidden-xs">or</span>
                                    <a href="#" class="button button-rounded si-google si-colored">Gmail</a>
                                </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>

    @stop