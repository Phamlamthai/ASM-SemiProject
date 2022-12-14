@extends('front.layout.master')
@section('title','Shop')

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

<!--Product shop section begin-->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">             
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
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="select-option">
                                <select class="sorting">
                                    <option value="">Default Sorting</option>
                                </select>
                                <select class="p-show">
                                    <option value="">Show:</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 text-right">
                            <p>Show 01->09 Of 36 Products</p>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="r??w">
                        @foreach ($products as $product )
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        {{-- <img src="front/img/products/{{$product->productImages[0]->path}} " alt=""> --}}
                                        @if($product->discount !=null)
                                        <div class="sale pp-sale">Sales</div>
                                        @endif
                                        <div class="icon">
                                        <i class="icon_heart_alt"></i> 
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="shop/product/{{$product->id}}">Quick-View</a></li>
                                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="category-name">{{$product->tag}}</div>
                                        <a href="shop/product/{{$product->id}}">
                                            <h5>{{$product->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                           @if($product->discount !=null)
                                            ${{$product->discoount}}
                                            <span>${{$product->price}} </span>
                                            @else
                                                ${{$product->price}}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="loading-more">
                    <i class="icon_loading"></i>
                    <a href="#">Loading More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Product shop section end-->


@endsection
