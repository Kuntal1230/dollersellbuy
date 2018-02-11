@extends('layouts.app')

@section('author', 'Name : Kuntal Gupta, E-mail : kuntal1230@gmail.com, Cell : +8801744968888')

@section('title', 'Login')

@section('class-login', 'current')

@section('session_message')
  <!--SESSION MESSAGES  -->
  <div class="row" style="margin-top: 20px;margin-right: 0px!important;">
      <div class="col-md-6 col-md-offset-3">
        <div style="margin-top: 20px;" class="text-center">
        </div>
      </div>
  </div>
  <!--  SESSION MESSAGES END -->
@endsection

@section('content')
  <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

                        <ul class="tab-nav tab-nav2 center clearfix">
                            <li class="inline-block"><a href="#tab-login">Login</a></li>
                            <li class="inline-block"><a href="#tab-register">Register</a></li>
                        </ul>

                        <div class="tab-container">

                            <div class="tab-content clearfix" id="tab-login">
                                <div class="panel panel-default nobottommargin">
                                    <div class="panel-body" style="padding: 40px;">
                                        <form id="login-form" name="login-form" class="nobottommargin" action="{{ route('login') }}" method="post">
                                          {{ csrf_field() }}

                                            <h3>Login to your Account</h3>
                                            <div class="col_full{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email">E-mail:</label>
                                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required />
                                                @if ($errors->has('email'))
                                                   <span class="help-block">
                                                       <strong>{{ $errors->first('email') }}</strong>
                                                   </span>
                                                @endif
                                            </div>

                                            <div class="col_full{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password">Password:</label>
                                                <input type="password" id="password" name="password" value="{{ old('name') }}" class="form-control" required />
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col_full nobottommargin">
                                                <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login"><i class="fa fa-send"></i> Login</button>
                                                <a href="member/password/reset.html" class="fright">Forgot Password?</a>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content clearfix" id="tab-register">
                                <div class="panel panel-default nobottommargin">
                                    <div class="panel-body" style="padding: 40px;">
                                        <h3>Register for an Account</h3>

                                        <form id="register-form" name="register-form" class="nobottommargin" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="col_full{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="register-form-name">Name:</label>
                                                <input type="text" id="register-form-name" name="name" required value="{{ old('name') }}" class="form-control" />
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col_full{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="register-form-email">Email Address:</label>
                                                <input type="text" id="register-form-email" name="email" required value="{{ old('email') }}" class="form-control" />
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col_full{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                <label for="register-form-phone">Phone Number:</label>
                                                <input type="text" id="register-form-phone" name="phone" required value="{{ old('phone') }}" class="form-control" />
                                                @if ($errors->has('phone'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col_full{{ $errors->has('address') ? ' has-error' : '' }}">
                                                <label for="address">Address:</label>
                                                <textarea name="address" id="address" required cols="30" rows="3" class="form-control"></textarea>
                                                @if ($errors->has('address'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col_full{{ $errors->has('image') ? ' has-error' : '' }}">
                                                <label for="image">Profile Picture:</label>
                                                <input type="file" name="image" required id="image" class="form-control">
                                                @if ($errors->has('image'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('image') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col_full{{ $errors->has('nid') ? ' has-error' : '' }}">
                                                <label for="nid">NID or Passport Picture:</label>
                                                <input type="file" name="nid" required id="nid" class="form-control">
                                                @if ($errors->has('nid'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('nid') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col_full{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="register-form-password">Choose Password:</label>
                                                <input type="password" id="register-form-password" name="password" required  class="form-control" />
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col_full">
                                                <label for="register-form-repassword">Re-enter Password:</label>
                                                <input type="password" id="register-form-repassword" name="password_confirmation" class="form-control" />
                                            </div>

                                            <div class="col_full nobottommargin">
                                                <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register"><i class="fa fa-send"></i> Register Now</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
@endsection
