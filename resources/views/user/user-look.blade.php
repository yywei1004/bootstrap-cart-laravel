@extends('layouts.backstage-template')
@section('css')
<link rel="stylesheet" href="{{ asset('css/user-look.css') }}">
@endsection
@section('main')
    <div class="container">
        <form action="/user/update/{{$user->id}}" method="POST">
            <div class="c-style">姓名</div>
            <div class="c-style">{{$user->name}}</div>
            <div class="c-style">信箱</div>
            <div class="c-style">{{$user->email}}</div>
            <div class="c-style">加入時間</div>
            <div class="c-style">{{$user->created_at}}</div>
            <div class="c-style">購買回數</div>
            <div class="c-style">{{count($user->order)}}</div>
            <label for="password">幫助使用者重設密碼</label>
            <input type="password" name="password" id="password">
            @csrf
            <div class="c-style">
                <button type="submit">修改密碼</button>
                <a href="/user">回列表頁</a>
            </div>
        </form>
    </div>
@endsection
