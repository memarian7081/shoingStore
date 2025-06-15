@extends('layouts.app')
@section('content')
    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h4> <em>دسته بندی محصولات</em></h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <p>تجربه خریدی فوق العاده در فروشگاه ما <a rel="nofollow" href="https://www.toocss.com/" target="_blank"></a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="service-item ">
                        <img src="assets/images/orange-juice.png" alt="" style="width: 20%">
                        <div class="icon"></div>
                        <h4>نوشیدنی</h4>
                        <p>در  این پلتفرم  اکسپرس شما می‌توانید مجموعه‌های خوشنام و بزرگی را مشاهده کند که با انواع و اقسام نوشیدنی‌های خود، شما را به وجد خواهند آورد. کاله، وارنا، آپادا، رامک، عالیس، سن ایچ، چوپان، میهن، دومینو، پگاه و غیره جزء برندهای معتبر موجود در این پلتفرم هستند.</p>
                        <div class="text-button">
                            <a href="{{route('filter.drinks')}}">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item ">
                        <img src="assets/images/foods.jpg" alt="" style="width: 20%">
                        <div class="icon"></div>
                        <h4>مواد غذایی</h4>
                        <p>کالاهای سوپرمارکتی جزو مهم‌ترین و پر تنوع‌ترین محصولات کاربردی هستند. هر نوع کالای سوپرمارکتی که به آن نیاز دارید، در دیجی کالا موجود است؛ از انواع محصولات روزمره مثل خوار و بار و مواد پروتئینی گرفته تا هر محصول مرتبط به پذیرایی مثل دمنوش‌ها، نوشیدنی‌ها، شیرینی و خشکبار و انواع تنقلات.</p>
                        <div class="text-button">
                            <a href="{{route('filter.foods')}}">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item ">
                        <img src="assets/sh.webp" alt="" style="width: 40%">
                        <div class="icon"></div>
                        <h4>شوینده و بهداشتی</h4>
                        <p> در فروشگاه دیجی کالا می‌توانید انواع دستمال نظافت یکبار مصرف یا دستکش نظافت از جمله وسایل مناسب برای بهداشت خانگی را خریداری کنید. این محصولات به شکلی طراحی شده‌اند تا ضدحساسیت باشند.</p>
                        <div class="text-button">
                            <a href="{{route('filter.canned')}}">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item ">
                        <img src="assets/images/canned food.jpeg" alt="" style="width: 40%">
                        <div class="icon"></div>
                        <h4>کنسرو و غذای آماده</h4>
                        <p>گاهی اوقات مشغله‌های زندگی آنقدر زیاد می‌شود که زمان زیادی برای آماده کردن غذا باقی نمی‌ماند. در این شرایط، در نظر گرفتن انواع کنسرو و غذای آماده می‌تواند بسیار مفید باشد و به شما کمک کند که در کمترین زمان ممکن غذا فراهم کنید. </p>
                        <div class="text-button">
                            <a href="{{route('filter.detergents')}}">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h4>ما در این فروشگاه چه خدماتی را عرضه میکنیم</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <p>در این فروشگاه ما از بهترین برند ها برای شما محصولات را عرضه نموده ایممو</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Maintance Problems</a></h4>
                                <p>Lorem Ipsum Text</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">24/7 Support &amp; Help</a></h4>
                                <p>Lorem Ipsum Text</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Fixing Issues About</a></h4>
                                <p>Lorem Ipsum Text</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-item">
                                <h4><a href="#">Co. Development</a></h4>
                                <p>Lorem Ipsum Text</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor idunte ut labore et dolore adipiscing  magna.</p>
                            <div class="gradient-button">
                                <a href="#">Start 14-Day Free Trial</a>
                            </div>
                            <span>*No Credit Card Required</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-image">
                        <img src="assets/images/about-right-dec.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="clients" class="the-clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-7 align-self-center">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>David Martino Co</h4>
                                                        <span class="date">30 November 2021</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Financial Apps</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>May Catherina</h4>
                                                        <span class="date">27 November 2021</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Business &amp; Economics</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.7</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Random User</h4>
                                                        <span class="date">24 November 2021</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">New App Ecosystem</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">3.9</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>Mark Amber Do</h4>
                                                        <span class="date">21 November 2021</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span class="category">Web Development</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">4.3</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>David Martino</h4>
                                                                    <span>CEO of David Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“CTO, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Jake H. Nyo</h4>
                                                                    <span>CTO of Digital Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“May, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>May C.</h4>
                                                                    <span>Founder of Catherina Co.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Random Staff</h4>
                                                                    <span>Manager, Digital Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src="assets/images/quote.png" alt="">
                                                                <p>“Mark, Lorem ipsum dolor sit amet, consectetur adpiscing elit, sed do eismod tempor idunte ut labore et dolore magna aliqua darwin kengan
                                                                    lorem ipsum dolor sit amet, consectetur picing elit massive big blasta.”</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src="assets/images/client-image.jpg" alt="">
                                                                <div class="right-content">
                                                                    <h4>Mark Am</h4>
                                                                    <span>CTO, Amber Do Company</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pricing" class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h4>We Have The Best Pre-Order <em>Prices</em> You Can Get</h4>
                        <img src="assets/images/heading-line-dec.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">$12</span>
                        <h4>Standard Plan App</h4>
                        <div class="icon">
                            <img src="assets/images/pricing-table-01.png" alt="">
                        </div>
                        <ul>
                            <li>Lorem Ipsum Dolores</li>
                            <li>20 TB of Storage</li>
                            <li class="non-function">Life-time Support</li>
                            <li class="non-function">Premium Add-Ons</li>
                            <li class="non-function">Fastest Network</li>
                            <li class="non-function">More Options</li>
                        </ul>
                        <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item-pro">
                        <span class="price">$25</span>
                        <h4>Business Plan App</h4>
                        <div class="icon">
                            <img src="assets/images/pricing-table-01.png" alt="">
                        </div>
                        <ul>
                            <li>Lorem Ipsum Dolores</li>
                            <li>50 TB of Storage</li>
                            <li>Life-time Support</li>
                            <li>Premium Add-Ons</li>
                            <li class="non-function">Fastest Network</li>
                            <li class="non-function">More Options</li>
                        </ul>
                        <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-item-regular">
                        <span class="price">$66</span>
                        <h4>Premium Plan App</h4>
                        <div class="icon">
                            <img src="assets/images/pricing-table-01.png" alt="">
                        </div>
                        <ul>
                            <li>Lorem Ipsum Dolores</li>
                            <li>120 TB of Storage</li>
                            <li>Life-time Support</li>
                            <li>Premium Add-Ons</li>
                            <li>Fastest Network</li>
                            <li>More Options</li>
                        </ul>
                        <div class="border-button">
                            <a href="#">Purchase This Plan Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

