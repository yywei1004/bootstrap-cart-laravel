@extends('layouts.front-template')
@section('main')
    <main>
        <section id="carousel">
            <div class="swiper" id="carousel-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="./img/pic-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="swiper-slide">
                        <img src="./img/pic-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="swiper-slide">
                        <img src="./img/pic-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>
        </section>

        <section id="service-2" data-aos="fade-up">
            <div class="container m-auto ">
                @foreach ($article as $item)
                    <div class="row justify-content-center border-bottom">
                        <div class="col-12 col-md-5 p-5">
                            <h2>{{ $item->title }}</h2>
                            <p>{{ $item->content }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <div class="swiper" id="product-swiper">
            <div class="swiper-wrapper">
                @foreach ($product as $item)
                    <div class="swiper-slide">
                        <div class="mycard">
                            <img class="w-100" src="{{ $item->imgs[0]->image_path }}" alt="">
                            <h5>{{ $item->name }}</h5>
                            <p>售價:{{ $item->price }}</p>
                            <p>{{ $item->intro }}</p>
                            <p>庫存:{{ $item->stock }}</p>
                            <button onclick="addtocart({{ $item->id }})">加入購物車</button>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        </div>
        </section>
    </main>
@section('js')
    <script>
        function addtocart(product_id) {
            var formdata = new FormData()
            formdata.append('_token', ' {{ csrf_token() }}')
            formdata.append('product_id', product_id)
            fetch('/addtocart', {
                    method: 'POST',
                    body: formdata
                })
                .then(response => response.text())
                .catch(error => console.error('Error:', error))
                .then(text => {
                    alert(text)
                });
        }
    </script>
@endsection
@endsection
