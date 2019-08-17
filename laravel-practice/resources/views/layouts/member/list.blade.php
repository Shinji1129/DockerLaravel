@extends('layouts.layout')

@section('content')
  <header id="">
　　　<h1>Laravel Project</h1>
<div class="nav"><a href="" class="btn list-btn">ログアウト</a>
  <a href="" class="btn list-btn">管理者情報</a></div>
  </header>
  <section id="serch">
    <div class="head"><h2>参加者名簿一覧</h2></div>
      <form action="" method="get">
        <div class="serch-wrap">
          <form action="" method="get">
          <div class="serch">
            <input type="text" name="keyword" class="key-form" value="" placeholder="検索キーワード">
          </div>
          <div class="key">
            <input type="submit" value="検索"  class="btn serch-btn">
          </div>
          </form>
            <a href="{{ action('MemberController@new_Index') }}" class="btn create-btn">新規登録</a>
        <!-- フラッシュ・メッセージ -->
        @if (session('flash_message'))
          <div class="flash-message">
            {{ session('flash_message') }}
          </div>
        @endif

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
       <th colspan="3"></th>
      </tr>
     </thead>
     <tbody>
       @foreach($members as $member)
       <tr>
         <td>{{$member->id}}</td>
         <td>{{$member->name}}</td>
         <td>{{$member->email}}</td>
         <td>{{$member->tel}}</td>
         <td><a href="" class="btn detail-btn">詳細</a></td>
         <td><a href="{{ action('MemberController@edit_index',[$member->id]) }}"  class="btn edit-btn">編集</a></td>
         <td>
         <form action="/member/delete/{{$member->id}}" method="post">
         @csrf
          <input type="submit" value="削除" class="btn dell-btn">
          </form>
        </td>
       </tr>
       @endforeach
     </tbody>
   </table>
  </section>

  <!-- page controll -->
  <div class="pager">
  {{ $members->links() }}
  </div>

@endsection