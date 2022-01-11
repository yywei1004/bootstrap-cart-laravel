@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog-create.css') }}">
@endsection
@section('main')
    <div class="container">
        <form action="/blog/update/{{$article->id}}" method="POST">
            @csrf
            <div class="row">
                <label for="title">文章標題</label>
                <input type="text" id="title" name="title" value="{{$article->title}}">
            </div>
            <div class="row">
                <label for="auther">文章作者</label>
                <input type="text" id="auther" name="auther" value="{{$article->auther}}">
            </div>
            <div class="row custom">
                <label for="content">文章內文</label>
                <textarea name="content" id="content" cols="50" rows="10">{{$article->title}}</textarea>
            </div>
            <div class="row btn">
                <button type="submit">編輯文章</button>
                <a href="/blog">取消</a>
            </div>
        </form>
    </div>
@endsection
