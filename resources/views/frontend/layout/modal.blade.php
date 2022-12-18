<!-- login Modal start-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modaldialog">
        <!-- /.container start -->
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xs-12 controlform">
                    <!--<h4>Click "Create new account?"</h4>-->
                    <div class="flip">
                        <div class="card">
                            <div class="face front" id="myModelLogin">
                                <div class="panel panel-default">
                                    <form method="post" action="{{url('users/login')}}"
                                          class="form-horizontal loginform">
                                        {{csrf_field()}}
                                        <button type="button" class="close fa fa-close" data-dismiss="modal"></button>
                                        <!--<h1 class="text-center"></h1>-->
                                        <img src="{{ asset('frontend/photo/logo/logo.png') }}"
                                             class="text-center center-block" alt="">
                                        <br>
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                               placeholder="Enter email" required>
                                        <label for="pwd">Password</label>
                                        <input type="password" name="password" class="form-control" id="pwd"
                                               placeholder="Enter password" required>
                                        <div class="">
                                            <input type="checkbox" class="pull-left remember"
                                                   name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <a style="text-decoration: none;">Remember me</a>
                                            <a href="{{ url('/password/reset') }}" class="pull-right right forget">Forget
                                                Password</a>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container end-->
    </div>
</div>
<!-- login Modal end -->

<!-- Register Modal start -->
<div class="modal fade" id="myModalRegister" role="dialog">
    <div class="modal-dialog modaldialog">
        <!-- /.container start -->
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xs-12 controlform">
                    <div class="flip">
                        <div class="card">
                            <div class="face front">
                                <div class="panel panel-default">
                                    <form method="post" action="{{url('users/register')}}"
                                          class="form-horizontal loginform">
                                        {{csrf_field()}}
                                        <button type="button" class="close fa fa-times" data-dismiss="modal"></button>
                                        <!--<h1 class="text-center">LOGO</h1>-->
                                        <img src="{{ asset('frontend/photo/logo/logo.png') }}"
                                             class="text-center center-block" alt="">
                                        <br>
                                        <label>Username</label>
                                        <input class="form-control" name="name" placeholder="Username" required/>
                                        <label>Email</label>
                                        <input class="form-control" name="email" placeholder="Email" required/>
                                        <label>Password</label>
                                        <input class="form-control" name="password" placeholder="Password" required/>
                                        <label>Confirm Password</label>
                                        <input class="form-control" name="password_confirmation"
                                               placeholder="Confirm Password" required/>
                                        <button type="submit" class="btn btn-primary btn-block">SIGN UP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Modal end -->

<!-- forgetpassword Modal start -->
<div class="modal fade" id="forgetpwdmodal" role="dialog">
    {{--<div class="modal-dialog modaldialog">--}}
    {{--<!-- /.container start -->--}}
    {{--<div class="container-fluid">--}}
    {{--<div class="row ">--}}
    {{--<div class="col-xs-12 controlform">--}}
    {{--<div class="flip">--}}
    {{--<div class="card">--}}
    {{--<div class="face front">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Reset Password</div>--}}
    {{--<div class="panel-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--<form class="form-horizontal" role="form" method="POST">--}}
    {{--action="{{ route('password.email') }}">--}}
    {{--{{ csrf_field() }}--}}

    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-control" name="email"--}}
    {{--value="{{ old('email') }}" required>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-md-6 col-md-offset-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--Send Password Reset Link--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
</div>
{{--forgetpassword modal end--}}

<!-- resetpassword Modal start -->
<div class="modal fade" id="pwdresetmodal" role="dialog">
    {{--<div class="modal-dialog modaldialog">--}}
    {{--<!-- /.container start -->--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Reset Password</div>--}}

    {{--<div class="panel-body">--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{--<form class="form-horizontal" role="form" method="POST"--}}
    {{--action="{{ route('password.request') }}">--}}
    {{--{{ csrf_field() }}--}}

    {{--<input type="hidden" name="token" value="{{ $token }}">--}}

    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-control" name="email"--}}
    {{--value="{{ $email or old('email') }}" required autofocus>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-control" name="password"--}}
    {{--required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
    {{--<label for="password-confirm" class="col-md-4 control-label">Confirm--}}
    {{--Password</label>--}}
    {{--<div class="col-md-6">--}}
    {{--<input id="password-confirm" type="password" class="form-control"--}}
    {{--name="password_confirmation" required>--}}

    {{--@if ($errors->has('password_confirmation'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-md-6 col-md-offset-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--Reset Password--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /.container end-->--}}

    {{--</div>--}}
</div>
{{--resetpassword modal end--}}
