@extends('layouts.main')
@section('title', '首頁')

@section('content')
<div class="w3-container w3-teal">
  <h2>{{ $user->name }}</h2>
</div>

<!-- 開關的區塊, 設定樣式為switch.css -->
<div class="w3-card-4 w3-container">
    <p class="w3-xxlarge w3-margin-top w3-text-theme">開關</p>
    <label class="switch">
      <input id="switch" type="checkbox" onchange="switch_change()" {{ $user->status ? 'checked' : ''}}>
      <div class="slider"></div>
    </label>

    <p id="other"></p>
    <p id="now"></p>

    <p id="tmp" class="w3-xxlarge w3-margin-top w3-text-theme">溫度: {{ $user->environment->tmp or 'null' }}</p>
    <p id="ph" class="w3-xxlarge w3-margin-top w3-text-theme">PH: {{ $user->environment->ph or 'null' }}</p>
    <p id="period" class="w3-xxlarge w3-margin-top w3-text-theme">提醒時間: {{ $user->period or '0'}}</p>
</div>

@include('main_js')

@endsection
