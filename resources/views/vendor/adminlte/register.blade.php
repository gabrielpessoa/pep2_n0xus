@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
            <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('tipo') ? 'has-error' : '' }}">
                    <!-- <input type="tipo" name="tipo" class="form-control" value="{{ old('tipo') }}"
                           placeholder="{{ 'Tipo'}}">
                    <span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
                    @if ($errors->has('tipo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tipo') }}</strong>
                        </span>
                    @endif -->
                    <select class="form-control" name="tipo">
                        <option value="" disabled="">Escolha um tipo</option>
                        <option value="" disabled>---</option>
                        <option value="aluno">Aluno</option>
                        <option value="gerente">Gerente</option>
                        <option value="instrutor">Instrutor</option>
                    </select>
                </div>
                <div class="form-group has-feedback {{ $errors->has('endereco') ? 'has-error' : '' }}">
                    <input type="endereco" name="endereco" class="form-control" value="{{ old('endereco') }}"
                           placeholder="{{ 'endereço'}}">
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                    @if ($errors->has('endereco'))
                        <span class="help-block">
                            <strong>{{ $errors->first('endereco') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('telefone') ? 'has-error' : '' }}">
                    <input type="telefone" name="telefone" class="form-control" value="{{ old('telefone') }}"
                           placeholder="{{ 'telefone'}}">
                    <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                    @if ($errors->has('telefone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('telefone') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('cpf') ? 'has-error' : '' }}">
                    <input type="cpf" name="cpf" class="form-control" value="{{ old('cpf') }}"
                           placeholder="{{ 'cpf'}}">
                    <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                    @if ($errors->has('cpf'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cpf') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('queixa') ? 'has-error' : '' }}">
                    <input type="queixa" name="queixa" class="form-control" value="{{ old('queixa') }}"
                           placeholder="{{ 'queixa'}}">
                    <span class="glyphicon glyphicon-question-sign form-control-feedback"></span>
                    @if ($errors->has('queixa'))
                        <span class="help-block">
                            <strong>{{ $errors->first('queixa') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('patologia') ? 'has-error' : '' }}">
                    <input type="patologia" name="patologia" class="form-control" value="{{ old('patologia') }}"
                           placeholder="{{ 'patologia'}}">
                    <span class="glyphicon glyphicon-pushpin form-control-feedback"></span>
                    @if ($errors->has('patologia'))
                        <span class="help-block">
                            <strong>{{ $errors->first('patologia') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit"
                        class="btn btn-primary btn-block btn-flat"
                >{{ trans('adminlte::adminlte.register') }}</button>
            </form>
            <div class="auth-links">
                <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    @yield('js')
@stop
