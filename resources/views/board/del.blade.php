
@extends('layouts.helloapp')

@section('title', 'Board.Del')

@section('menubar')
    @parent
    Board 削除ページ
@endsection

@section('content')
<table>
    <form action="/board/del" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{ $form->id }}">
    <tr><th>person_id: </th><td>{{ $form->person_id }}</td></tr>
    <tr><th>title: </th><td>{{ $form->title }}</td></tr>
    <tr><th>message: </th><td>{{ $form->message }}</td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
</table>
@endsection

@section('footer')
    copyright 2019 tsubasa
@endsection
