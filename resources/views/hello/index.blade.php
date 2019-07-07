{{-- <html>
<head>
<title>Blade/Index</title>
<style>
    body {
    font-size: 16pt;
    color: #999;
    }
    h1 {
        font-size: 50pt;
        text-align: right;
        color: #f6f6f6;
        margin: -20px 0px -30px 0px;
        letter-spacing: -4pt;
    }
</style>
</head>
<body>
    <h1>Blade/Index</h1>
    @isset ($msg)
    <p>こんにちは。{{ $msg }}さん。</p>
    @else
    <p>何か描いてください。</p>
    @endisset

    <form method= "POST" action="/hello">
        {{ csrf_field() }}
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html> --}}

@extends('layout.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    indexpage
@endsection

@section('content')
    <p>this is content</p>
    <p>many contents OK</p>

    <ul>
    @each('components.item', $data, 'item')
    </ul>
@endsection

@section('footer')
    copyright 2019 tsubasa
@endsection
