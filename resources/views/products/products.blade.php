@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection
@section('main')
    <div class="function-area">
        <a class="create-pdt" href="/products/create">新增商品</a>
    </div>
    <div class="product">
        @foreach ($products as $item)
            <div class="product-card">
                <div class="pdt-img">
                    {{-- style="background-image: url('{{@$item->imgs[0]->image_path}}')" --}}
                    {{-- @foreach ($item->imgs as $img)
                    <img src="{{@$img->image_path}}" alt="">
                    @endforeach --}}
                    @foreach ($item->imgs as $img)
                        <div class="img-card">
                            <img src="{{ $img->image_path }}" alt="">
                            <input type="text" value="{{ $img->image_path }}" hidden>
                        </div>
                    @endforeach
                </div>
                <div class="pdt-info">
                    <div class="name">商品名稱:{{ $item->name }}</div>
                    <div class="price">商品價格:{{ $item->price }}</div>
                    <div class="intro">商品介紹:{{ $item->intro }}</div>
                    <div class="stock">商品庫存:{{ $item->stock }}</div>
                    <div class="manage">
                        <a href="/products/edit/{{ $item->id }}" class="edit">編輯</a>
                        <a href="/products/delete/{{ $item->id }}" class="delete">刪除</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
