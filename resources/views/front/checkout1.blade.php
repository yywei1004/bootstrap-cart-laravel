@extends('layouts.front-template')
@section('css')
    <link rel="stylesheet" href="./css/checkout.css">
@endsection
@section('main')
    <main class="py-5 bg-secondary">
        <div class="container">
            <div class="card">
                <h2 class="card-header">購物車</h2>
                <div class="card-body">
                    <div class="d-flex">
                        <div class="w-25 d-flex flex-column align-items-center position-relative">
                            <div class="progress-step bg-info text-white rounded-circle mb-2">1</div>
                            <span>確認購物車</span>
                            <div class="progress w-50 position-absolute">
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="w-25 d-flex flex-column align-items-center position-relative">
                            <div class="progress-step bg-light rounded-circle mb-2">2</div>
                            <span>付款與運送方式</span>
                            <div class="progress w-50 position-absolute">
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 0"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="w-25 d-flex flex-column align-items-center position-relative">
                            <div class="progress-step bg-light rounded-circle mb-2">3</div>
                            <span>填寫資料</span>
                            <div class="progress w-50 position-absolute">
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 0"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="w-25 d-flex flex-column align-items-center position-relative">
                            <div class="progress-step bg-light rounded-circle mb-2">4</div>
                            <span>完成訂購</span>
                        </div>
                    </div>
                    <hr>
                    <h4 class="mx-5">訂單明細</h4>
                    <div class="order-lists">
                        <div class="order-list">
                            <div class="order-item d-flex justify-content-between">
                                <div class="order-item-info w-50 d-flex align-items-center mx-5">
                                    <img class="w-25" src="./img/pic-1.jpg" alt="">
                                    <div class="order-product-name ml-5">
                                        伯爵紅茶
                                        <!-- <span class="order-product-color" style="color: #415">#41551</span> -->
                                    </div>
                                </div>
                                <div class="order-item-total d-flex align-items-center w-25">
                                    <div class="order-count w-50">
                                        <button class="order-btn reduce">-</button>
                                        <input class="order-input w-25" type="number" value="1">
                                        <button class="order-btn add">+</button>
                                    </div>
                                    <span class="order-item-price sr-only">60</span>
                                    <div class="order-item-subtotal">$
                                        <span>60</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="mx-5">
                        </div>
                        <div class="order-list">
                            <div class="order-item d-flex justify-content-between">
                                <div class="order-item-info w-50 d-flex align-items-center mx-5">
                                    <img class="w-25" src="./img/pic-2.jpg" alt="">
                                    <div class="order-product-name ml-5">
                                        奶油曲奇
                                        <!-- <span class="order-product-color" style="color: #415">#41551</span> -->
                                    </div>
                                </div>
                                <div class="order-item-total d-flex align-items-center w-25">
                                    <div class="order-count w-50">
                                        <button class="order-btn reduce">-</button>
                                        <input class="order-input w-25" type="number" value="1">
                                        <button class="order-btn add">+</button>
                                    </div>
                                    <span class="order-item-price sr-only">70</span>
                                    <div class="order-item-subtotal">$
                                        <span>70</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="mx-5">
                        </div>
                        <div class="order-list">
                            <div class="order-item d-flex justify-content-between">
                                <div class="order-item-info w-50 d-flex align-items-center mx-5">
                                    <img class="w-25" src="./img/pic-3.jpg" alt="">
                                    <div class="order-product-name ml-5">
                                        杏仁球
                                        <!-- <span class="order-product-color" style="color: #415">#41551</span> -->
                                    </div>
                                </div>
                                <div class="order-item-total d-flex align-items-center w-25">
                                    <div class="order-count w-50">
                                        <button class="order-btn reduce">-</button>
                                        <input class="order-input w-25" type="number" value="1">
                                        <button class="order-btn add">+</button>
                                    </div>
                                    <span class="order-item-price sr-only">80</span>
                                    <div class="order-item-subtotal">$
                                        <span>80</span>
                                    </div>
                                </div>
                            </div>
                            <hr class="mx-5">
                        </div>
                        <div class="order-price px-5 mb-3 d-flex flex-column align-items-end">
                            <div class="order-qty">
                                <span>數量</span>
                                <span class="qty">5</span>
                            </div>
                            <div class="order-subtotal">
                                <span>小計</span>
                                <span class="subtotal">$ 50</span>
                            </div>
                            <div class="order-fee">
                                <span>運費</span>
                                <span class="fee">$ 60</span>
                            </div>
                            <div class="order-total">
                                <span>總計</span>
                                <span class="total">$ 500</span>
                            </div>
                            <div class="w-100 d-flex justify-content-between">
                                <a href="./index.html" class="btn btn-info my-3">回首頁</a>
                                <a href="./checkout2.html" class="btn btn-info my-3">下一步</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script src="./js/checkout.js"></script>
@endsection
