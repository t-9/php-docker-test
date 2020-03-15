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
@php
$options = [['value' => '0', 'label' => '佐藤'], ['value' => '1', 'label' => '田中'], ['value' => '2', 'label' => '東雲']];
$options2 = [['value' => '0', 'label' => '光美'], ['value' => '1', 'label' => '由香里'], ['value' => '2', 'label' => '有栖']];
$test_name = 'test';
@endphp
<form action='' method="GET">
  <div class="form-group">
    <h1>Vue Select</h1>
    <p>苗字</p>
    <v-sel :options="{{ json_encode($options) }}" :value="'1'" :name="'test'" :required="true"></v-sel>
    <p>名前</p>
    <v-sel :options="{{ json_encode($options2) }}" :value="''" :name="'test2'"></v-sel>
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