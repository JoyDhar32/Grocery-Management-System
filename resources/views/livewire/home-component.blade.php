<div>
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                
               {{-- Slider Section --}}
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated"> trade-in proposition</h4>
                                    <h2 class="animated fw-900">Unbeatable Value</h2>
                                    <h1 class="animated fw-900 text-brand" style="color:#16542E !important;">On Frozen Foods</h1>
                                    <p class="animated" style="color:black !important;font-weight:bold">Embrace the frozen magic! Discover convenience and flavor with our exceptional selection of frozen foods</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="{{route('product.category',['slug' => 'frozen-food'])}}"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="{{asset('assets/imgs/slider/frozen_food.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 {{-- Slider Section --}}
                 <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated"> Our Exceptional trade-in offer </h4>
                                    <h2 class="animated fw-900">Supper value deals</h2>
                                    <h1 class="animated fw-900 text-brand" style="color:#16542E !important;">On Fresh Foods</h1>
                                    <p class="animated" style="color:black !important;font-weight:bold">Delicious, nutritious, and bursting with flavor, our fresh foods bring the farm-to-table experience right to your plate.</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="{{route('product.category',['slug' => 'fresh-food'])}}"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="{{asset('assets/imgs/slider/fresh_food.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 {{-- Slider Section --}}
                 <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Our Unbeatable Trade-in Deal</h4>
                                    <h2 class="animated fw-900">Supper value deals</h2>
                                    <h1 class="animated fw-900 text-brand" style="color:#16542E !important;">On Beverage</h1>
                                    <p class="animated" style="color:black !important;font-weight:bold">Quench your thirst with delightful sips of flavor! Experience the refreshing taste of our beverages, crafted with care.</p>
                                    <a class="animated btn btn-brush btn-brush-3" href="{{route('product.category',['slug' => 'beverage'])}}"> Shop Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="{{asset('assets/imgs/slider/beverages.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    





            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>

      


        <section class="product-tabs section-padding position-relative wow fadeIn animated mt-50">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Best Selling</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Featured</button>
                        </li>
                    </ul>
                   
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
              
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-cart-wrap mb-30">
                                    
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$product->slug])}}">
                                                <img class="default-img" src="{{asset('assets/imgs/shop') }}/{{ $product->images }}-1.jpg" alt="Product Image">
                                                <img class="hover-img" src="{{asset('assets/imgs/shop') }}/{{ $product->images }}-2.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                    
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Best Seller</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                       
                                        <h2>
                                            <a
                                                href="{{ route('product.details', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                        </h2>
                                   
                                        <div class="product-price">
                                            <span>${{$product->regular_price}} </span>
                                            <span class="old-price">${{$product->old_price}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                  
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="#" wire:click.prevent="store({{$product->id,}},'{{$product->name}}',{{$product->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                     
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            @foreach($populars as $popular)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-cart-wrap mb-30">
                                    
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$popular->slug])}}">
                                                <img class="default-img" src="{{asset('assets/imgs/shop') }}/{{ $popular->images }}-1.jpg" alt="">
                                                <img class="hover-img" src="{{asset('assets/imgs/shop') }}/{{ $popular->images }}-2.jpg" alt="">
                                            </a>
                                        </div>
                                    
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Popular</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href=""></a>
                                        </div>
                                        <h2>
                                            <a
                                                href="{{ route('product.details', ['slug' => $popular->slug]) }}">{{ $popular->name }}</a>
                                        </h2>
                                   
                                        <div class="product-price">
                                            <span>${{$popular->regular_price}} </span>
                                            <span class="old-price">${{$popular->old_price}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                  
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="#" wire:click.prevent="store({{$popular->id,}},'{{$popular->name}}',{{$popular->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            
                            
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->



                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            @foreach($featured as $feature)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-cart-wrap mb-30">
                                    
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$feature->slug])}}">
                                                <img class="default-img" src="{{asset('assets/imgs/shop') }}/{{ $feature->images }}-1.jpg" alt="Product Image">
                                                <img class="hover-img" src="{{asset('assets/imgs/shop') }}/{{ $feature->images }}-2.jpg" alt="Product Image">
                                            </a>
                                        </div>
                                    
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Featured</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                       
                                        <h2>
                                            <a
                                                href="{{ route('product.details', ['slug' => $feature->slug]) }}">{{ $feature->name }}</a>
                                        </h2>
                                   
                                        <div class="product-price">
                                            <span>${{$feature->regular_price}} </span>
                                            <span class="old-price">${{$feature->old_price}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                  
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="#" wire:click.prevent="store({{$feature->id,}},'{{$feature->name}}',{{$feature->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                     
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>




        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">

@foreach($new_arrivals as $new_arrival)
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{route('product.details',['slug'=>$new_arrival->slug])}}">
                                        <img class="default-img" src="{{asset('assets/imgs/shop') }}/{{ $new_arrival->images }}-1.jpg" alt="">
                                        <img class="hover-img" src="{{asset('assets/imgs/shop') }}/{{ $new_arrival->images }}-2.jpg" alt="">
                                    </a>
                                </div>
                     
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="product-details.html">{{$new_arrival->name}}</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>${{$new_arrival->regular_price}} </span>
                                    <span class="old-price">${{$new_arrival->old_price}} </span>
                                </div>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>
            </div>
        </section>


        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach($category as $cat)
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{route('product.category',['slug'=>$cat->slug])}}"><img src="{{asset('assets/imgs/shop') }}/{{ $cat->images }}-1.jpg" alt=""></a>
                            </figure>
                            <h5><a href="{{route('product.category',['slug'=>$cat->slug])}}">{{$cat->name}}</a></h5>
                        </div>
        @endforeach
                    </div>
                </div>
            </div>
        </section>
 


        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-1.png" alt="">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-2.png" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-3.png" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-4.png" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-5.png" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="assets/imgs/theme/icons/feature-6.png" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

</div>
