@extends('layouts.auth')
@section('message')
    <p class="login-box-msg">Welcome Admin</p>
@stop

@section('content')
    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf
        <div class="form-group has-feedback">
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : ''
            }}" placeholder="Password" name="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember Me
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
    </form>

    <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="{{ route('login') }}" class="btn btn-block btn-primary btn-social btn-flat"><i class="fa
        fa-lock"></i>
            User
            Login</a>
        <a href="{{ route('register') }}" class="btn btn-block btn-social btn-danger btn-flat"><i class="fa
        fa-user-plus"></i>
            Register a new
            membership</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="{{ route('password.request') }}">I forgot my password</a><br>
    {{--<a href="{{ route('login') }}" class="text-center">Register a new membership</a>--}}

@endsection
