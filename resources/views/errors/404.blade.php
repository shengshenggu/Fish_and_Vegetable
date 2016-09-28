@extends('layouts.plant')
@section('title', '404')

@section('content')
<a href="{{ url('/') }}"><img src="{{ url('/404.jpg') }}" width="100%" height="100%"></a>
@endsection