@extends('layout')
@section('title','Input User')
@section('content')
    {{Form::model($user,['url'=>'user'])}}
    @include('user.validation')

    @include('user.form')

    {{Form::close()}}
@endsection