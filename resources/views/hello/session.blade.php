
@extends('layouts.helloapp')

@section('title', 'Session')

@section('menubar')
    @parent
    Sessionpage.
@endsection

@section('content')
    <p>{{$session_data}}</p>
    <form action="/hello/session" method="POST">
    {{csrf_field()}}
    <input type="text" name="input">
    <input type="submit" name="send">
    </form>
@endsection

@section('footer')
    copyright 2019 tsubasa
@endsection
