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
$options = [['code' => '0', 'label' => '佐藤'], ['code' => '1', 'label' => '田中']];
@endphp
<form action='' method="GET">
<div class="vue-select form-group">
    <h1>Vue Select</h1>
    <v-select v-bind:options="{{ json_encode($options) }}" :reduce="label => label.code" label="label" v-model="selected">
        <template #search="{attributes, events}">
            <input
              name="hoge"
              class="vs__search"
              :required="!selected"
              v-bind="attributes"
              v-on="events"
              v-model="selected"
            />
          </template>
    </v-select>
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