@extends('layout.index')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/about.css')}}">
@endsection

@section('title','About')

@section('content')
  <div class="about_photo">
    <img src="{{asset('/images/about.jpg')}}" alt="about写真">
  </div>
  <div class="about_content">
    <h2>About</h2>
    <h4>サービスについて</h4>
    <p>○○○○○○○○○○○○○○○<br>○○○○○○○○○○○○○○○○○○○<br>○○○○○○○○○○○○○○○<br>○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○<br>○○○○○○○○○○○○○○○○○○○</p>
  </div>
@endsection