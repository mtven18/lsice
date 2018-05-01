@extends('layout.auth_layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">

    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
    
                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
    
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
    
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
    
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
    
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
    
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->


    <div class="row">
        <div class="col-md-4 col-md-offset-4 login_cont">
            @if (session('error'))
                <span class="help-block" style="text-align: center;">
                    <strong style="color: white;">{{ session('error') }}</strong>
                </span>
            @endif
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group">
                        <label for="email" class="col-md-3">E-mail</label>
                        <div class="col-md-9">
                            <input required class="form-control inputs_login" id="email" name="email" placeholder="E-mail" type="email">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="password" class="col-md-3">Пароль</label>
                        <div class="col-md-9">
                            <input required class="form-control inputs_login" id="password" name="password" placeholder="Пароль" type="password">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-default login_btn">
                                Вход
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 forgot_or_reg">
                        <a href="{{ route('password.request') }}">
                            Восстановить пароль
                        </a>
                        <span> Или </span>
                        <a href="{{ route('register') }}">
                            Зарегистрироваться.
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
