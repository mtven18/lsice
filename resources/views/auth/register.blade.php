@extends('layout.auth_layout')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/register_style.css') }}">

    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
    
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
    
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
    
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
    
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
    
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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
    
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->



    <div class="row">
        <div class="col-md-6 col-md-offset-3 reg_cont">
            <h4 class="reg_info">Регистрация</h4>
            @if (session('error'))
                <span class="help-block">
                    <strong>{{ session('error') }}</strong>
                </span>
            @endif
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-row">
                    <div class="form-group">
                        <label for="first_name" class="col-md-4">Имя <span class="required_field">*</span></label>
                        <div class="col-md-8">
                            <input required class="form-control inputs_reg" id="first_name" name="first_name" placeholder="Имя" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="last_name" class="col-md-4">Фамилия <span class="required_field">*</span></label>
                        <div class="col-md-8">
                            <input required class="form-control inputs_reg" id="last_name" name="last_name" placeholder="Фамилия" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email" class="col-md-4">E-mail <span class="required_field">*</span></label>
                        <div class="col-md-8">
                            <input required class="form-control inputs_reg" id="email" name="email" placeholder="E-mail" type="email">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone" class="col-md-4">Телефон <span class="required_field">*</span></label>
                        <div class="col-md-8">
                            <input required class="form-control inputs_reg" id="phone" name="phone" pattern="[0-9]{6,18}" placeholder="Например: 780090080" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="company" class="col-md-4">Компания</label>
                        <div class="col-md-8">
                            <input class="form-control inputs_reg" id="company" name="company" placeholder="Компания" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="address_1" class="col-md-4">Адрес 1 <span class="required_field">*</span></label>
                        <div class="col-md-8">
                            <input required class="form-control inputs_reg" id="address_1" name="address_1" placeholder="Адрес 1" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="address_2" class="col-md-4">Адрес 2</label>
                        <div class="col-md-8">
                            <input class="form-control inputs_reg" id="address_2" name="address_2" placeholder="Адрес 2" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="index" class="col-md-4">Индекс</label>
                        <div class="col-md-8">
                            <input class="form-control inputs_reg" id="index" name="index" placeholder="Индекс" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="country" class="col-md-4">Страна <span class="required_field">*</span></label>
                        <div class="col-md-8">
                            <select name="country" required class="form-control inputs_reg" id="country">
                                @foreach(\App\Country::all() as $country)
                                    <option value="{{ $country->id }}" @if($country->iso_code_2 == 'RU') selected @endif >{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="region" class="col-md-4">Регион/Область <span class="required_field">*</span></label>
                        <div class="col-md-8">
                            <select name="region" required class="form-control inputs_reg" id="region">
                                <option value="" disabled selected hidden>Выберите Регион/Область</option>
                                @foreach(\App\Country::where('iso_code_2', 'RU')->first()->regions()->orderBy('name')->get() as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password" class="col-md-4">Пароль <span class="required_field">*</span></label>
                        <div class="col-md-8">
                            <input required class="form-control inputs_reg" id="password" name="password" placeholder="Пароль" type="password">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="password_confirmation" class="col-md-4">Повторите пароль <span class="required_field">*</span></label>
                        <div class="col-md-8">
                            <input required class="form-control inputs_reg" id="password_confirmation" name="password_confirmation" placeholder="Повторите пароль" type="password">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-default login_btn">
                                Регистрация
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')

    <script>

        $('select[name="country"]').on('change', function (e) {
            
            var country = $(e.currentTarget.options[e.currentTarget.selectedIndex]).val();
            $.ajax({
                url: '/regions',
                method: 'POST',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': country
                },
                success: function (data) {
                    console.log(data[0]);
                    $('select[name="region"]').html('<option value="" disabled selected hidden>Выберите Регион/Область</option>');
                    for (var i = 0; i < data.length; i++) {
                        $('select[name="region"]').append('<option value="' + data[i]['id'] + '">' + data[i]['name'] + '</option>');
                    };
                },
                error: function (err) {
                    console.log(err);
                }
            });

        });

        $('input[name=phone]').on('input', function (e) {
            if(Number($(e.currentTarget).val()) <= 0 || isNaN(Number($(e.currentTarget).val()))) {
                $(e.currentTarget).val($(e.currentTarget).val().substring(0, $(e.currentTarget).val().length - 1));
            }
        });

    </script>

@endsection