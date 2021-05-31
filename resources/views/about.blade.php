@extends('layout.index')

@section('title','About')

@section('content')
  <div class="about_content">
    <div class="about_photo">
      <img src="{{asset('/images/about.jpg')}}" alt="about写真">
    </div>
    <div class="about_sentence">
      <h2>About</h2>
      <h4>サービスについて</h4>
      <p>○○○○○○○○○○○○○○○<br>○○○○○○○○○○○○○○○○○○○<br>○○○○○○○○○○○○○○○<br>○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○○<br>○○○○○○○○○○○○○○○○○○○</p>
    </div>
  </div>
@endsection