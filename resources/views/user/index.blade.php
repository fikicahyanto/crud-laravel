@extends('layout')
@section('title','halaman list user')
@section('content')
<h3>Module : {{ $module}}</h3>
{{session('message')}}

<table border="1">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>aksi</th>
    </tr>
    @foreach ($user as $user)
        <tr>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{link_to('user/'.$user->id.'/edit','Edit')}}</td>
        </tr>
    @endforeach
</table>
@endsection