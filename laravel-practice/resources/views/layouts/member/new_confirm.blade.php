@extends('layouts.layout')

@section('content')
  <header id="">
　　　<h1>Laravel Project</h1>
  </header>
  <section id="serch">
    <div class="head"><h2>登録内容確認</h2></div>
  </section>
  <section id="list-table">
  <form action="" method="post">
    @csrf
    <input type="hidden" name="name" value="{{$name}}">
    <input type="hidden" name="email" value="{{$email}}">
    <input type="hidden" name="tel" value="{{$tel}}">
    <input type="hidden" name="addr" value="{{$addr}}">
    <input type="hidden" name="birth" value="{{$birth}}">
   <table class="list">
       <tr><th>名前</th><td>{{$name}}</td></tr>
       <tr><th>Email</th><td>{{$email}}</td></tr>
       <tr><th>電話番号</th><td>{{$tel}}</td></tr>
       <tr><th>住所</th><td>{{$addr}}</td></tr>
       <tr><th>誕生日</th><td>{{$birth}}</td></tr>
   </table>
  </section>
  <section id="back">
      <input type="submit" class="btn create-btn" value="登録">
  </form>
      <a href="{{ action('MemberController@new_Index') }}">一覧へ戻る</a>
  </section>
  @endsection