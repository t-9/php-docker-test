@extends('adminlte::page')

@section('title', 'ダッシュボード')

@section('content_header')
    <h1>ダッシュボード</h1>
@stop

@section('content')
    <p>ようこそ.</p>
    <p>{{$cachetest}}回目の訪問です</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop