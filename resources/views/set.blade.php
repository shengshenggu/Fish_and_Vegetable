@extends('layouts.main')
@section('title', '首頁')

@section('content')
<div class="w3-container w3-teal">
  <h2>{{ $user->name }}</h2>
</div>

<form class="w3-container w3-card-4 w3-padding" method="post" action="{{ url('/setEnvironment') }}">
    {{ csrf_field() }}
    <div class="w3-input-group">
      <label class="w3-label w3-text-teal"><b>溫度上限</b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" value="{{ old('tmp_max') ? old('tmp_max') : $user->tmp_max }}" name="tmp_max">
      @if ($errors->has('tmp_max'))
            <ul class="w3-text-red w3-ul">
                @foreach ($errors->get('tmp_max') as $error)
                    <li><strong>{{ $error }}</li></strong>
                @endforeach
            </ul>
      @endif
    </div>
    <div class="w3-input-group">
      <label class="w3-label w3-text-teal"><b>溫度下限</b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" value="{{ old('tmp_min') ? old('tmp_min') : $user->tmp_min }}" name="tmp_min">
      @if ($errors->has('tmp_min'))
            <ul class="w3-text-red w3-ul">
                @foreach ($errors->get('tmp_min') as $error)
                    <li><strong>{{ $error }}</li></strong>
                @endforeach
            </ul>
      @endif
    </div>
    <div class="w3-input-group">
      <label class="w3-label w3-text-teal"><b>PH上限</b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" value="{{ old('ph_max') ? old('ph_max') : $user->ph_max }}" name="ph_max">
      @if ($errors->has('ph_max'))
            <ul class="w3-text-red w3-ul">
                @foreach ($errors->get('ph_max') as $error)
                    <li><strong>{{ $error }}</li></strong>
                @endforeach
            </ul>
      @endif
    </div>
    <div class="w3-input-group">
      <label class="w3-label w3-text-teal"><b>PH下限</b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" value="{{ old('ph_min') ? old('ph_min') : $user->ph_min }}" name="ph_min">
      @if ($errors->has('ph_min'))
            <ul class="w3-text-red w3-ul">
                @foreach ($errors->get('ph_min') as $error)
                    <li><strong>{{ $error }}</li></strong>
                @endforeach
            </ul>
      @endif
    </div>
    <div class="w3-input-group">
      <label class="w3-label w3-text-teal"><b>提醒週期</b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" value="{{ old('period') ? old('period') : $user->period }}" name="period">
      @if ($errors->has('period'))
            <ul class="w3-text-red w3-ul">
                @foreach ($errors->get('period') as $error)
                    <li><strong>{{ $error }}</li></strong>
                @endforeach
            </ul>
      @endif
    </div>
    <button class="w3-btn w3-theme">儲存</button>
</form>
@endsection
