@extends('layouts.layout')

@section('content')
<?php
var_dump($_FILES);
?>
  <header id="">
　　　<h1>Laravel Project</h1>
  </header>
  <section id="serch">
    <div class="head"><h2>参加者登録</h2></div>
  </section>
  <section id="list-table">
    <form action="" method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
   <table class="list">
       <div class="@if($errors->has('name')) has-error @endif">
       <tr><th>名前<span>＊入力必須</span>@if($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span> @endif</th><td><input type="text" class="form" name="name" value="{{old('name')}}"></td></tr>
       </div>
       <div class="@if($errors->has('email')) has-error @endif">
       <tr><th>Email<span>＊入力必須</span>@if($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span> @endif</th><td><input type="text" class="form" name="email" value="{{old('email')}}"></td></tr>
       </div>
       <div class="@if($errors->has('tel')) has-error @endif">
       <tr><th>電話番号<span>＊ハイフンなし</span>@if($errors->has('tel'))<span class="text-danger">{{ $errors->first('tel') }}</span> @endif</th><td><input type="text" class="form" name="tel" value="{{old('tel')}}"></td></tr>
       </div>
       <tr><th>出身(都道府県)</th><td><input type="text" class="form" id="addr" name="addr" value="{{old('addr')}}"></td></tr>
       <tr><th>誕生日</th><td><input type="text" class="form" name="birth" placeholder="2000/12/12" value="{{old('birth')}}"></td></tr>
       </table>
  </section>
  <section id="picture">
       <div class="section-wrap">
         <div class="pic-wrap">
       <div class="pic-title">画像</div>
       <div class="pic">
       <input type="file" class="form" name="image">
       </div>
       </div>
       <div class="com-wrap">
       <div class="pic-title">メモ</div>
       <div class="comment">
       <textarea type="text" class="" name="comment" placeholder="" value="{{old('comment')}}"></textarea>
       </div>
       </div>
       </div>
  </section>
  <section id="back">
    <input type="submit" class="btn create-btn" value="登録内容確認">
  </form>
      <a href="{{ action('MemberController@getIndex') }}" class="btn list-btn">一覧へ戻る</a>
  </section>
  @endsection
