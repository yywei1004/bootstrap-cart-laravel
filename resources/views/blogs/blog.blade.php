@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection
@section('main')
    <div class="function-area">
        <a class="create-msg" href="/blog/create">新增貼文</a>
    </div>
    @foreach ($articles as $item)
        <div id="message">
            <div class="message-card">
                <div class="msg-info">
                    <div class="title">{{$item->title}}</div>
                    <div class="auther">{{$item->auther}}</div>
                    <div class="post-time">{{$item->created_at}}</div>
                    <a href="/blog/edit/{{$item->id}}" class="edit">編輯</a>
                    <a href="/blog/delete/{{$item->id}}" class="delete">刪除</a>
                </div>
                <div class="msg-contnet">
                    {{$item->content}}
                </div>
            </div>
        </div>
    @endforeach
@endsection
