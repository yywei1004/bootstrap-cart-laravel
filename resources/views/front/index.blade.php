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
                <div class="row justify-content-center border-bottom">
                    <div class="col-12 col-md-3 p-5">
                        <div class="Pitchfork-logo text-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-100 h-100" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 p-5">
                        <h2>Shooting Stars</h2>
                        <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                            juice poutine.</p>
                        <a class="d-flex">
                            Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center border-bottom">
                    <div class="col-12 col-md-3 p-5">
                        <div class="service-logo text-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-100 h-100" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 p-5">
                        <h2>The Catalyzer</h2>
                        <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                            juice poutine.</p>
                        <a class="d-flex">
                            Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-3 p-5">
                        <div class="service-logo text-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-100 h-100" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 p-5">
                        <h2>The 400 Blows</h2>
                        <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                            juice poutine.</p>
                        <a class="d-flex">
                            Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="swiper" id="product-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="mycard">
                        <img class="w-100" src="https://placeholder.pics/svg/460x260" alt="">
                        <p>CATEGORY</p>
                        <h5>The Catalyzer</h5>
                        <p>$16.00</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        </div>
        </section>
    </main>
@endsection
