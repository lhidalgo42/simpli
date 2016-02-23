@extends('layouts.master')
@section('content')
    @include('navs.nav1')
    @include('navs.nav2')
    {{Session::get('auth')[0]}}
@stop