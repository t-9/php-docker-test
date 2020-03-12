@extends('layouts.app')

@section('title', 'ダッシュボード')

@section('content')
<div class="pie-chart">
	<h1>Pie Chart</h1>
	<pie-chart v-bind:data="[234, 266, 273, 54, 22, 22, 22]" v-bind:bg-color="['#f87559', '#f873279', '#f87979', '#f87a79', '#f879aa','#f87009', '#00ffff']" v-bind:labels="['January', 'February', 'March', 'April', 'May', 'June', 'July']"></pie-chart>
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