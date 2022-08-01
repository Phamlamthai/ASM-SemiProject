@extends('front.layout.master')

@section('title','home')
@section('body')


<!--- hero section begin-->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-item set-bg" data-setbg="front/img/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span></span>
                        <h1>Black Friday</h1>
                        <p>PhamLamThai.com</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2><span>50%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-item set-bg" data-setbg="front/img/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span></span>
                        <h1>Black Friday</h1>
                        <p>PhamLamThai.com</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2><span>50%</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero section END-->

<!---Banner section begin-->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-4.jpg" alt="" style="width: 358px" height="301px">
                    <div class="inner-text">
                        <h4>Men's</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-5.jpg" alt="" style="width: 358px" height="301px">
                    <div class="inner-text">
                        <h4>Women's</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-3.jpg" alt="" style="width: 358px" height="301px">
                    <div class="inner-text">
                        <h4>Kid's</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Banner section End-->

<!---Women-Banner section begin-->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                    <h2>Women's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active">Cloting</li>
                        <li>Shoes</li>
                        <li>Accessories</li>
                        <li>Handbags</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">

                     @foreach ($womenProducts as $womenProduct)
                      
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="front/img/products/women-1.jpg" alt="">

                                @if($womenProduct->discount != null)
                                <div class="sale">Sale</div>
                                @endif

                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="product.html">Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="category-name">{{$womenProduct->tag}} </div>
                                <a href="#">
                                    <h5>{{$womenProduct->name}} </h5>
                                </a>
                                <div class="product-price">
                                    @if($womenProduct->discount != null)
                                        ${{$womenProduct->discount}}
                                        <span>${{$womenProduct->price}} </span>
                                    @else
                                    ${{$womenProduct->price}}
                                    @endif
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!---Women-Banner section End-->

<!---deal of the week section begin-->
<section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
             <h2>Deal of The Week</h2>
             <p>Loren ispun Dolor sit ament, consentator adipsiting alit sed ,<br> Do you like this?</p> 
             <div class="product-price">
                 $35.00
                 <span>HanBag</span>
             </div>
         </div>
         <div class="countdown-timer" id="countdown">
            <div class="cd-item">
                <span>56</span>
                <p>Days</p>
            </div>
            <div class="cd-item">
                <span>12</span>
                <p>Hours</p>
            </div>
            <div class="cd-item">
                <span>40</span>
                <p>Mins</p>
            </div>
            <div class="cd-item">
                <span>52</span>
                <p>Secs</p>
            </div>
        </div>
        <a href="#" class="primary-btn">Shop Now</a>
    </div>
</div>
</section>

<!---Deal of the week END-->

<!--man banner section begin-->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="active">Clothings</li>
                        <li>Handbag</li>
                        <li>Shoes</li>
                        <li>Accesories</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/man-1.jpg" alt="">
                            <div class="Sale"></div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name"> Coat</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $15.00
                                <span>$35.00</span>  
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/man-2.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt">     
                                </i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Shoes</div>
                            <a href="#">
                                <h5>GUang Shouaz</h5>
                            </a>
                            <div class="product-price">
                                $13.00
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/man-3.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Towel</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $40.00
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="front/img/products/man-4.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="product.html">Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">Towel</div>
                            <a href="#">
                                <h5>Converse Shoes</h5>
                            </a>
                            <div class="product-price">
                                $44.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="front/img/products/man-large.jpg">
                    <h2>Men's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--man banner section end-->

    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
            <div class="inslide-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection_1</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
            <div class="inslide-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection_2</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inslide-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection_3</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inslide-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection_4</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inslide-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection_5</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
            <div class="inslide-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection_6</a></h5>
            </div>
        </div>
    </div>
    <!---Insta section end off-->

    <section class="lastest-blog spad">
        <div class="container">
            <div class="row">
             <div class="col-lg-12">
                 <div class="section-title">
                     <h2>From the Blogs</h2>
                 </div>
             </div> 
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/latest-1.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 5 2022
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>The best street Style from London Codelearn Week</h4>
                        </a>
                        <p>Sed quia non mumqioan Mudeinagd indunt </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/latest-2.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 5 2022
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>Vogue's Uliminate Guide to autumn winter 2022 shoes</h4>
                        </a>
                        <p>Sed quia non \mumqioan Mudeinagd indunt </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/latest-3.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                May 6 2022
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="#">
                            <h4>How to brighten Your Wardten with A dash of Line</h4>
                        </a>
                        <p>Sed quia non mumqioan Mudeinagd indunt </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-1.jpg" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Free Shipping</h6>
                            <p>For all order over 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon2.jpg" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Delevery on time</h6>
                            <p>Its good have problems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-1.jpg" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Payment</h6>
                            <p>100% secue paymrny</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---- Latest Blog End-->-


@endsection