@extends('layouts.app')

@section('title', 'ダッシュボード')

@section('content')
<div class="line-chart">
	<h1>Line Chart</h1>
	<line-chart></line-chart>
</div>
@endsection

@section('css')
<link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('js')
<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="{{ mix('/js/app.js') }}" defer></script>
@endsection