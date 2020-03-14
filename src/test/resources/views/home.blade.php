@extends('layouts.app')

@section('title', 'ダッシュボード')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div id="example">
</div>
@php
$options = [['code' => '0', 'label' => '佐藤'], ['code' => '1', 'label' => '田中'], ['code' => '2', 'label' => '東雲']];
$options2 = [['code' => '0', 'label' => '光美'], ['code' => '1', 'label' => '由香里'], ['code' => '2', 'label' => '有栖']];
$test_name = 'test';
@endphp
<form action='' method="GET">
<div class="vue-select form-group">
    <h1>Vue Select</h1>
    <p>苗字</p>
    <v-sel v-bind:opts="{{ json_encode($options) }}" v-bind:sel="'1'" :nm="'test'"></v-sel>
    <p>名前</p>
    <v-sel v-bind:opts="{{ json_encode($options2) }}" v-bind:sel="'2'" :nm="'test2'"></v-sel>
  </div>
  <button type="submit">aaa</button>
</form>
@endsection

@section('css')
<link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('js')
<script src="/js/manifest.js"></script>
<script src="/js/vendor.js"></script>
<script src="{{ mix('/js/app.js') }}"></script>
@endsection