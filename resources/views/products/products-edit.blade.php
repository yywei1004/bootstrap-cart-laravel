@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection
@section('main')
    <div class="container">
        <form action="/products/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <label for="image">商品圖片</label>
                <input type="file" id="images" name="image" multiple onchange="imgupload()">
            </div>
            <div id="uploaded-img">
                @foreach ($product->imgs as $img)
                    <div class="img-card">
                        <div class="delete-img" onclick="imgdelete(this,'{{ $img->image_path }}')">X</div>
                        <img src="{{ $img->image_path }}" alt="">
                        <input type="text" value="{{ $img->image_path }}" hidden>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <label for="name">商品名稱</label>
                <input type="text" id="name" name="name" value="{{ $product->name }}">
            </div>
            <div class="row">
                <label for="price">商品售價</label>
                <input type="number" id="price" name="price" value="{{ $product->price }}">
            </div>
            <div class="row">
                <label for="stock">商品庫存</label>
                <input type="number" id="stock" name="stock" value="{{ $product->stock }}">
            </div>
            <div class="row custom">
                <label for="intro">商品介紹</label>
                <textarea name="intro" id="intro" cols="50" rows="10">{{ $product->intro }}</textarea>
            </div>
            <div class="row btn">
                <button type="submit">修改商品</button>
                <a href="/products">取消</a>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script>
        var input = document.querySelector('#images');
        var uploaded = document.querySelector('#uploaded-img')

        function imgupload() {
            var formdata = new FormData()
            formdata.append('_token', ' {{ csrf_token() }}')
            for (let i = 0; i < input.files.length; i++) {
                console.log(input.files[i]);
                formdata.append('img[]', input.files[i])
            }
            fetch('/products/imgUpload', {
                    method: 'POST',
                    body: formdata
                })
                .then(response => response.json())
                .catch(error => console.error('Error:', error))
                .then(response => {
                    console.log('Success:', response)
                    response.forEach(element => {
                        uploaded.innerHTML += `
                        <div class="img-card">
                            <div class="delete-img" onclick="imgdelete(this,'${element}')">X</div>
                            <img src="${element}" alt="">
                            <input type="text" name="img[]" value="${element}" hidden>
                        </div>`
                    });
                });
        }

        function imgdelete(element, path) { //element:this所指向的標籤 path:${element}圖片路徑
            var choice = confirm('確定邀刪除圖片?');
            if (choice) {
                var formdata = new FormData()
                formdata.append('_token', ' {{ csrf_token() }}')
                formdata.append('path', path) //將後面的路徑放進前面的path以便傳進後端
                fetch('/products/imgDelete', {
                    method: 'POST',
                    body: formdata
                })
                element.parentElement.remove()
            }
        }
    </script>
@endsection
