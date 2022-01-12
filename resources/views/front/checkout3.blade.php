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
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 100%"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="w-25 d-flex flex-column align-items-center position-relative">
                            <div class="progress-step bg-info text-white rounded-circle mb-2">3</div>
                            <span>填寫資料</span>
                            <div class="progress w-50 position-absolute">
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="w-25 d-flex flex-column align-items-center position-relative">
                            <div class="progress-step bg-light rounded-circle mb-2">4</div>
                            <span>完成訂購</span>
                        </div>
                        <hr>
                    </div>
                    <div class="mx-5">
                        <hr>
                        <h3>寄送資料</h3>
                        <form action="">
                            <div class="form-group">
                                <label for="dlv-name" class="dlv-title">姓名</label><br>
                                <input type="text" class="form-control" id="dlv-name" placeholder="王小明">
                            </div>
                            <div class="form-group order-count">
                                <label for="dlv-num" class="dlv-title">電話</label><br>
                                <input type="number" class="form-control" id="dlv-num" placeholder="0912345678">
                            </div>
                            <div class="form-group">
                                <label for="dlv-mail" class="dlv-title">Email</label><br>
                                <input type="email" class="form-control" id="dlv-mail" placeholder="abc123@gmail.com">
                            </div>
                            <div class="form-group order-count">
                                <label for="dlv-adr">地址</label><br>
                                <input type="number" class="form-control" id="dlv-adr" placeholder="郵遞區號">
                                <input type="text" class="form-control" id="dlv-adr" placeholder="城市">
                                <input type="text" class="form-control" id="dlv-adr" placeholder="地址">
                            </div>
                        </form>
                    </div>
                    <div class="order-lists">
                        <hr class="mx-5">
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
                            <hr class="w-100">
                            <div class="w-100 d-flex justify-content-between">
                                <a href="/checkout2" class="btn btn-info my-3">上一步</a>
                                <a href="/checkout4" class="btn btn-info my-3">下一步</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
