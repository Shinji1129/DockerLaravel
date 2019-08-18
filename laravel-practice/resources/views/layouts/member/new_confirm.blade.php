@extends('layouts.layout')

@section('content')
<?php
var_dump($_FILES);
?>
  <header id="">
　　　<h1>Laravel Project</h1>
  </header>
  <section id="serch">
    <div class="head"><h2>登録内容確認</h2></div>
  </section>
  <section id="list-table">
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="name" value="{{$name}}">
    <input type="hidden" name="email" value="{{$email}}">
    <input type="hidden" name="tel" value="{{$tel}}">
    <input type="hidden" name="addr" value="{{$addr}}">
    <input type="hidden" name="birth" value="{{$birth}}">
    <input type="hidden" name="image" value="{{$image}}">
    <input type="hidden" name="comment" value="{{$comment}}">
  <table class="list">
       <tr><th>名前</th><td>{{$name}}</td></tr>
       <tr><th>Email</th><td>{{$email}}</td></tr>
       <tr><th>電話番号</th><td>{{$tel}}</td></tr>
       <tr><th>住所</th><td>{{$addr}}</td></tr>
       <tr><th>誕生日</th><td>{{$birth}}</td></tr>
   </table>
  </section>
  <section id="picture">
    <div class="section-wrap">
    <div class="pic-wrap">
    <div class="pic-title">画像</div>
   <div class="pic">
<img src="{{asset('$image')}}">
    </div>
</div>
<div class="com-wrap">
<div class="pic-title">メモ</div>
    <div class="comment">
      {{$comment}}
    </div>
  </div>
  </div>
  </section>
  <section id="back">
      <input type="submit" class="btn create-btn" value="登録">
  </form>
      <a href="{{ action('MemberController@new_Index') }}">一覧へ戻る</a>
  </section>
  @endsection
