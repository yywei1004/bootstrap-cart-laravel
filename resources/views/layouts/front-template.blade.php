<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 插件規模越大的，放越上面 -->
    <!-- bootstrap Core CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- swiper Core CSS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- fontawesome Core CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AOS Core CSS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- animate.min.css Core CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" 
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- layout CSS -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/layout.css">
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://cf.shopee.tw/file/b7ac5ef08340bf4652c94fb968e67dc1"
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
                        <a class="nav-link" href="checkout1">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('main')
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
    <!-- swiper Core JS CDN -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- parallax.js Core JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <!-- AOS Core JS CDN -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- lettering.min.js Core JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js" 
        integrity="sha512-9ex1Kp3S7uKHVZmQ44o5qPV6PnP8/kYp8IpUHLDJ+GZ/qpKAqGgEEH7rhYlM4pTOSs/WyHtPubN2UePKTnTSww==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- textillate Core JS CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js"
		integrity="sha512-0bHMhYsdpiur1bT84kDH4D7cpxFQ9O7uA5yxVAqWC87h552Xt0swX4M+ZlXMKE8oPVRIJ5lAwXWO2UWeDwJJOw=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- 自己寫的 swiper JS -->
    <script src="./js/swiper.js"></script>
    <!-- 自己寫的 parallax.js -->
	<script src="./js/parallax.js"></script>
	<!-- 自己寫的 AOS JS -->
	<script src="./js/AOS.js"></script>
	<!-- 自己寫的 textillate.js -->
	<script src="./js/textillate.js"></script>
    @yield('js')
</body>

</html>