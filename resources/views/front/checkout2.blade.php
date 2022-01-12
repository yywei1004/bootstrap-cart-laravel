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
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 100%"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="w-25 d-flex flex-column align-items-center position-relative">
                            <div class="progress-step bg-info text-white rounded-circle mb-2">2</div>
                            <span>付款與運送方式</span>
                            <div class="progress w-50 position-absolute">
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <hr>
                    </div>
                    <form action="/checkout3" method="POST">
                        @csrf
                        <div class="mx-5">
                            <hr>
                            <h3>付款方式</h3>
                            <div class="d-flex align-items-center">
                                <input class="mx-5" id="credit-card" type="radio" name="pay" checked>
                                <label for="credit-card">信用卡付款</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input class="mx-5" id="atm" type="radio" name="pay">
                                <label for="atm">網路 ATM</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input class="mx-5" id="cs-code" type="radio" name="pay">
                                <label for="cs-code">超商代碼</label>
                            </div>
                            <hr>
                            <h3>運送方式</h3>
                            <div class="d-flex align-items-center">
                                <input class="mx-5" id="t-cat" type="radio" name="deliver" onclick="changefee(1)" checked>
                                <label for="t-cat">黑貓宅配</label>
                            </div>
                            <div class="d-flex align-items-center">
                                <input class="mx-5" id="s2s" type="radio" name="deliver" onclick="changefee(2)">
                                <label for="s2s">超商店到店</label>
                            </div>
                        </div>
                        <div class="order-lists">
                            <hr class="mx-5">
                            <div class="order-price px-5 mb-3 d-flex flex-column align-items-end">
                                <div class="order-qty">
                                    <span>數量</span>
                                    <span class="qty">{{$merch}}</span>
                                </div>
                                <div class="order-subtotal">
                                    <span>小計</span>
                                    <span class="subtotal">$ {{$sum}}</span>
                                </div>
                                <div class="order-fee">
                                    <span>運費</span>
                                    <span class="fee">$ 200</span>
                                </div>
                                <div class="order-total">
                                    <span>總計</span>
                                    <span class="total">$ {{$sum + 200}}</span>
                                </div>
                                <hr class="w-100">
                                <div class="w-100 d-flex justify-content-between">
                                    <a href="/checkout1" class="btn btn-info my-3">上一步</a>
                                    <button type="submit" class="btn btn-info my-3">下一步</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </main>
@endsection
