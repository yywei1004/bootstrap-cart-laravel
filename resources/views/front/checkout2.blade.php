<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap Core CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- fontawesome Core CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- layout CSS -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/checkout.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="./index.html">
                <img src="https://scontent.frmq2-1.fna.fbcdn.net/v/t1.6435-9/33075240_1011226272364055_7334858862215823360_n.png?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=OXkV4LrgErQAX97nmr5&_nc_ht=scontent.frmq2-1.fna&oh=53cffe1507a1d9a623a73891a414583b&oe=61CC4FB9"
                    width="66px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./checkout1.html">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./login.html">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="w-25 d-flex flex-column align-items-center position-relative">
                            <div class="progress-step bg-info text-white rounded-circle mb-2">2</div>
                            <span>付款與運送方式</span>
                            <div class="progress w-50 position-absolute">
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="w-25 d-flex flex-column align-items-center position-relative">
                            <div class="progress-step bg-light rounded-circle mb-2">3</div>
                            <span>填寫資料</span>
                            <div class="progress w-50 position-absolute">
                                <div class="progress-bar bg-info rounded-lg" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <input class="mx-5" id="t-cat" type="radio" name="deliver" checked>
                            <label for="t-cat">黑貓宅配</label>
                        </div>
                        <div class="d-flex align-items-center">
                            <input class="mx-5" id="s2s" type="radio" name="deliver">
                            <label for="s2s">超商店到店</label>
                        </div>
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
                                <a href="./checkout1.html" class="btn btn-info my-3">上一步</a>                            
                                <a href="./checkout3.html" class="btn btn-info my-3">下一步</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="py-5">
            <div class="container d-flex flex-wrap flex-md-nowrap">
                <div class="row w-25">
                    <div class="col-12">
                        <div class="d-flex align-items-center">
                            <img class="w-25 h-25 mr-1" src="./img/logo.jpg" alt="">
                            <h4>純方手工餅乾</h4>
                        </div>
                        <p class="my-3">Air plant banjo lyft occupy retro adaptogen indego</p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 col-md-6 col-lg-3">
                        <ul class="footer-menu">
                            <li class="footer-menu-item">CATEGORIES</li>
                            <li class="footer-menu-item">First Link</li>
                            <li class="footer-menu-item">Second Link</li>
                            <li class="footer-menu-item">Third Link</li>
                            <li class="footer-menu-item">Fourth Link</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <ul class="footer-menu">
                            <li class="footer-menu-item">CATEGORIES</li>
                            <li class="footer-menu-item">First Link</li>
                            <li class="footer-menu-item">Second Link</li>
                            <li class="footer-menu-item">Third Link</li>
                            <li class="footer-menu-item">Fourth Link</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <ul class="footer-menu">
                            <li class="footer-menu-item">CATEGORIES</li>
                            <li class="footer-menu-item">First Link</li>
                            <li class="footer-menu-item">Second Link</li>
                            <li class="footer-menu-item">Third Link</li>
                            <li class="footer-menu-item">Fourth Link</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <ul class="footer-menu">
                            <li class="footer-menu-item">CATEGORIES</li>
                            <li class="footer-menu-item">First Link</li>
                            <li class="footer-menu-item">Second Link</li>
                            <li class="footer-menu-item">Third Link</li>
                            <li class="footer-menu-item">Fourth Link</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light py-1">
            <div class="container d-flex justify-content-between">
                <div class="copyright">
                    © 2020 Tailblocks — @knyttneve
                </div>
                <div class="community">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </footer>
    <!-- jquery Core JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- popper Core JS CND -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <!-- bootstrap Core JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    
    <script src="./js/checkout.js"></script>
</body>

</html>