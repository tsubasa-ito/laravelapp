
@extends('layouts.helloapp')

@section('title', 'Board/Index')

@section('menubar')
    @parent
    ボードページ
@endsection

@section('content')
<table>
    <tr><th>Data</th><th>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
    @endforeach
</table>
@endsection

@section('footer')
    copyright 2019 tsubasa
@endsection
