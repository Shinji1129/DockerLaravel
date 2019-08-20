@extends('layouts.layout')

@section('content')
<body>
  <header id="">
　　　<h1>Laravel Project</h1>
  </header>
  <section id="serch">
    <div class="head"><h2>登録内容編集</h2></div>
  </section>
  <section id="list-table">
    <form action="" method="post">
      @csrf
      <input type="hidden" name="name" value="{{$member->name}}">
      <input type="hidden" name="email" value="{{$member->email}}">
      <input type="hidden" name="tel" value="{{$member->tel}}">
      <input type="hidden" name="addr" value="{{$member->addr}}">
      <input type="hidden" name="birth" value="{{$member->birth}}">
      @method('PATCH')
   <table class="list">
     <div class="@if($errors->has('name')) has-error @endif">
      <tr><th>名前<span>＊入力必須</span>@if($errors->has('name'))<span class="text-danger">{{ $errors->first('name')}}</span> @endif</th><td><input type="text" class="form" name="name" value="{{$member->name}}"></td></tr>
    </div>
    <div class="@if($errors->has('email')) has-error @endif">
      <tr><th>Email<span>＊入力必須</span>@if($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span>@endif</th><td><input type="text" class="form" name="email" value="{{$member->email}}"></td></tr>
    </div>
    <div class="@if($errors->has('tel')) has-error @endif">
      <tr><th>電話番号<span>＊ハイフンなし</span>@if($errors->has('tel'))<span class="text-danger">{{ $errors->first('tel') }}</span>@endif</th><td><input type="text" class="form" name="tel" value="{{$member->tel}}"></td></tr>
    </div>
      <tr><th>出身(都道府県)</th><td><input type="text" class="form" name="addr" value="{{$member->addr}}"></td></tr>
      <tr><th>誕生日</th><td><input type="text" class="form" name="birth" value="{{$member->birth}}"></td></tr>
   </table>
  </section>
  <section id="back">
    <input type="submit" class="btn edit-btn" value="編集内容確認">
      </form>
      <a href="{{ action('MemberController@getIndex') }}" class="btn list-btn">一覧へ戻る</a>
  </section>
  @endsection