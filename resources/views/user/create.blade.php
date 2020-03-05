@extends('layout')
@section('title','Input User')
@section('content')
    {{Form::open(['url'=>'user'])}}
    
    @include('user.validation')
    @include('user.form')

    {{Form::close()}}
@endsection