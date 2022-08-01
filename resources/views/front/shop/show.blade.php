@extends('front.layout.master')

@section('title','Product')

@section('body')

<!--Breadcrumb BEGIN-->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home">Home</i></a>
                    <a href="shop.html">Shop</a>
                    <span>Detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb END-->

<!--productshop section begin-->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-categories">
                        <li><a href="#">Men's</a></li>
                        <li><a href="#">WoMen's</a></li>
                        <li><a href="#">Kid's</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label>
                                Calkvin
                                <input type="checkbox" id="bc-calvin" name="">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label>
                                LamThai
                                <input type="checkbox" id="bc-calvin" name="">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label>
                                Kelvin
                                <input type="checkbox" id="bc-calvin" name="">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label>
                                Black
                                <input type="checkbox" id="bc-calvin" name="">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="filter-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ul-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                            <div class="ul-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="8" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="8" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label class="cs-black" for="cs-black">black</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label class="cs-violet" for="cs-violet">Violet</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue">
                            <label class="cs-blue" for="cs-blue">Blue</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-red">
                            <label class="cs-red" for="cs-red">Red</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label class="cs-yellow" for="cs-yellow">Yellow</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-green">
                            <label class="cs-green" for="cs-green">Green</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Size</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">S</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="m-size">M</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="L-size">
                            <label for="L-size">L</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size">
                            <label for="xs-size">XL</label>
                        </div>
                        
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Tags</h4>
                    <div class="fw-tags">
                        <a href="#">Towel</a>
                        <a href="#">Shoes</a>
                        <a href="#">Coat</a>
                        <a href="#">Dresser</a>
                        <a href="#">Bag</a>
                        <a href="#">Handbag</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="front/img/product-single/product-1.jpg">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="front/img/product-single/product-1.jpg">
                                    <img src="front/img/product-single/product-1.jpg" alt="">
                                </div>
                                <div class="pt " data-imgbigurl="front/img/product-single/product-1.jpg">
                                    <img src="front/img/product-single/product-2.jpg" alt="">
                                </div>
                                <div class="pt " data-imgbigurl="front/img/product-single/product-1.jpg">
                                    <img src="front/img/product-single/product-3.jpg" alt="">
                                </div>
                                <div class="pt " data-imgbigurl="front/img/product-single/product-1.jpg">
                                    <img src="front/img/product-single/product-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>Notes</span>
                                <h3>Pure Pineapple</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-0"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <p>Khoong can click vao vi no se khong hien thi data dau ma mat cong</p>
                                <h4>$495.00<span>$635.00</span></h4>
                            </div>
                            <div class="pd-color">
                                <h4>color</h4>
                                <div class="pd-color-choose">
                                    <div class="cc-item">
                                        <input type="radio" id="cc-black">
                                        <label for="cc-black" class="cc-black"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-yellow">
                                        <label for="cc-yellow" class="cc-yellow"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-violet">
                                        <label for="cc-violet" class="cc-violet"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-size-choose">
                                <div class="sc-item">
                                <input type="radio" id="sm-size"> 
                                <label for="sm-size">S</label>
                                </div>
                                <div class="sc-item">
                                <input type="radio" id="md-size"> 
                                <label for="md-size">M</label>
                                </div>
                                <div class="sc-item">
                                <input type="radio" id="lg-size"> 
                                <label for="lg-size">l</label>
                                </div>
                                <div class="sc-item">
                                <input type="radio" id="xl-size"> 
                                <label for="xl-size">Xl</label>
                                </div>
                            </div>
                            <div class="quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="#" class="primary-btn pd-cart">Add to cart</a>
                                </div>
                            </div>
                            <ul class="pd-tags">
                                <li><span>Categories</span>:More Accessories, Wallets cases</li>
                                <li><span>Tags</span>: More Clothings,T-shirt,Women</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">Sku: 00012</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist"> 
                            <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">Description</a></li>
                            <li><a href="#tab-2" data-toggle="tab" role="tab">Specification</a></li>
                            <li><a href="#tab-3" data-toggle="tab" role="tab">Customer Reviews</a></li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                            <div class="product-content">
                                <div class="row">
                                    <div class="col-lg-7">
                                    <h5>Introduction</h5> 
                                    <p>The clothes someone wears tell us about their cultural identity and life status. When we need to describe someone to someone else, we talk about their outer beauty/appearance and inner qualities/personality. While describing someone’s appearance, the first thing that comes up is the clothes. If you wonder how to describe clothes, this post is for you.  </p>
                                    <h5>Features</h5>
                                    <p>Suppose you are a salesperson at a clothing store or an apparel business person. In that case, you must know how to describe clothes to sell your product to the customers. And even while shopping, you may need to describe your desired clothes to the salesperson to get them quickly.B</p>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="front/img/product-single/tab-desc.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel">
                            <div class="specification-table">
                                <table>
                                    <tr>
                                    <td class="p-category">Rating</td>
                                    <td>
                                        <div class="pd-rating">
                                            <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i>  
                                            <i class="fa fa-star"></i>  
                                            <i class="fa fa-star"></i>  
                                            <i class="fa fa-star-0"></i>  
                                            <span>(5)</span> 
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="p-category">Price</td>
                                        <td>
                                            <div class="p-price">$485.00</div>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td class="p-category">Add To cart</td> 
                                    <td class="cart-add">Add to cart</td>
                                    </tr>
                                    <tr>
                                        <td class="p-category">
                                            Availibity
                                        </td>
                                        <td>
                                            <div class="p-stock">22 In Stock</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-category">weight</td>
                                        <td>
                                            <div class="p-weight">1,3kg</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-category">Size</td>
                                        <td>
                                            <div class="p-size">Xxl</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-category">Color</td>
                                        <td>
                                            <div class="cs-color">Xxl</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-category">Sku</td>
                                        <td>
                                            <div class="p-code">00123</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel">
                            <div class="Customer-review-option">
                                <h4> 2 Comments</h4>
                            <div class="comment-option">
                                <div class="co-item">
                                    <div class="avatar-pic">
                                        <img src="front/img/product-single/avatar-1.png" alt="">                     
                                    </div>
                                    <div class="avatar-text">
                                        <div class="at-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-0"></i>
                                        </div>
                                        <h5>brandom <span>31 July 2022</span></h5>
                                        <div class="at-reply">
                                            Nice
                                        </div>
                                    </div>
                                </div>
                                <div class="co-item">
                                    <div class="avatar-pic">
                                        <img src="front/img/product-single/avatar-1.png" alt="">                     
                                    </div>
                                    <div class="avatar-text">
                                        <div class="at-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-0"></i>
                                        </div>
                                        <h5>brandom <span>31 July 2022</span></h5>
                                        <div class="at-reply">
                                            Nice
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="personal-rating">
                                <h6>Your rating</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i>  
                                    <i class="fa fa-star"></i>  
                                    <i class="fa fa-star"></i>  
                                    <i class="fa fa-star-0"></i>  
                                </div>
                            </div>
                            <div class="leave-comment">
                                <h4>Leave a comment</h4>
                                <form action="" class="comment-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Name" >
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Email" >
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea placeholder="messages"></textarea>
                                            <button type="submit" class="site-btn">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--productshop section end-->



@endsection

