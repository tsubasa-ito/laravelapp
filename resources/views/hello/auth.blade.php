@extends('layouts.helloapp')

@section('title', 'Auth')

@section('menubar')
    @parent
    Authページ
@endsection

@section('content')
<p>{{$message}}</p>
<table>
    <form action="/hello/auth" method="POST">
    {{csrf_field()}}
    <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
    <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>
@endsection

@section('footer')
    copyright 2019 tsubasa.
@endsection
