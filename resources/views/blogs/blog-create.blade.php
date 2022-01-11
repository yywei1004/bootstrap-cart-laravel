@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/blog-create.css') }}">
@endsection
@section('main')
    <div class="container">
        <form action="/blog/store" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @method('DELETE') --}}
            <div class="row">
                <label for="title">文章標題</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="row">
                <label for="auther">文章作者</label>
                <input type="text" id="auther" name="auther">
            </div>
            <div class="row custom">
                <label for="content">文章內文</label>
                <textarea name="content" id="content" cols="50" rows="10"></textarea>
            </div>
            <div class="row">
                <label for="sign">簽名檔上傳</label>
                <input type="file" id="sign" name="sign">
            </div>
            <div class="row btn">
                <button type="submit">新增文章</button>
                <a href="/blog">取消</a>
            </div>
        </form>
    </div>
@endsection
