@extends('layouts.layout')

@section('content')
  <header id="">
　　　<h1>Laravel Project</h1>
<div class="nav"><a href="top.html" class="btn list-btn">ログアウト</a>
  <a href="user_confirm.html" class="btn list-btn">管理者情報</a></div>
  </header>
  <section id="serch">
    <div class="head"><h2>参加者名簿一覧</h2></div>
      <form action="" method="get">
        <div class="serch-wrap">
          <div class="serch">
            <input type="text" name="keyword" class="key-form" value="" placeholder="検索キーワード">
          </div>
          <div class="key">
            <input type="submit" value="検索"  class="btn serch-btn">
          </div>
            <a href="new_index.html" class="btn create-btn">新規登録</a>
      </div>
  </section>
  <section id="list-table">
   <table class="list">
     <thead>
       <tr>
       <th>ID</th>
       <th>名前</th>
       <th>Email</th>
       <th>電話番号</th>
       <th colspan="5"></th>
      </tr>
     </thead>
     <tbody>
       @foreach($members as $member)
       <tr>
         <td>{{$member->id}}</td>
         <td>{{$member->name}}</td>
         <td>{{$member->email}}</td>
         <td>{{$member->tel}}</td>
         <td><a href="detaile.html" class="btn detail-btn">詳細</a></td>
         <td><a href="edit_index.html"  class="btn edit-btn">編集</a></td>
         <td><form action="" method="">
          <input type="submit" value="削除" class="btn dell-btn"></td>
       </tr>
       @endforeach
     </tbody>
   </table>
  </section>

  <!-- page controll -->
  <div class="pager">
  {!! $members->render() !!}
  </div>
@endsection