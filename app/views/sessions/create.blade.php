@extends('layouts.master')

@section('content')
    <div class="row">

        <div class="col-sm-6 col-md-4 col-md-offset-4" id="form">
            <div class="account-wall">
                {{ Form::open(['route'=> 'sessions.store','class' => 'form-signin']) }}
                {{ Form::text('codigo', Input::old('user'), array('placeholder' => 'Nombre de Usuario','class' => 'form-control','id' => 'codigo','required','autofocus')) }}
                {{ Form::password('clave',array('placeholder' => 'Contraseña','class' => 'form-control', 'id' => 'clave' ,'required', 'autocomplete' => 'off')) }}
                <div class="input-group">
                    {{ Form::checkbox('remember', true,array('class' => 'form-control')) }} Recordarme
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="login">Ingresar</button>
                @if(Session::has('error'))
                    <span class="text-danger">{{Session::get('error')}}</span>
                @endif
                @if(Session::has('info'))
                    <span class="text-primary">{{Session::get('info')}}</span>
                @endif
                {{ Form::close() }}
            </div>
        </div>
    </div>


@stop
@section('css')
{{HTML::style('/css/login.css')}}
@stop
