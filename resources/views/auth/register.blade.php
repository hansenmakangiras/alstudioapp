@extends('layouts.auth')

@section('message')
    <p class="login-box-msg">Register a new membership</p>
@stop

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group has-feedback">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                   value="{{ old('name') }}" placeholder="Nama Anda" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group has-feedback">
            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                   name="username" value="{{ old('username') }}" placeholder="Username" required>

            @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ old('email') }}" placeholder="Email" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                   name="password" placeholder="Kata Sandi" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                   placeholder="Ulangi Kata Sandi" required>
        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms</a>
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="{{ route('login') }}" class="btn btn-block btn-success btn-social btn-flat"><i class="fa
        fa-lock"></i>
            Masuk Pengguna</a>
        {{--<a href="{{ route('register') }}" class="btn btn-block btn-social btn-danger btn-flat"><i class="fa--}}
        {{--fa-user-plus"></i>--}}
            {{--I already have a membership</a>--}}
    </div>
    <!-- /.social-auth-links -->

    {{--<a href="{{ route('password.request') }}">I forgot my password</a><br>--}}
@endsection
