@extends('layouts.app')

@section('title', 'ダッシュボード')

@section('content')
<button-counter></button-counter>
@endsection

@section('css')
<link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('js')
<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="{{ mix('/js/app.js') }}" defer></script>
@endsection