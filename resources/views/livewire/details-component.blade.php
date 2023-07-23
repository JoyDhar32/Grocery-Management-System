<div>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ route('home.index') }}" rel="nofollow">Home</a>
                    <span>  <a href="{{ route('shop') }}" rel="nofollow">Shop</a></span> 
                    <span></span>{{$product->name}}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img class="default-img"
                                                    src="{{ asset('assets/imgs/shop') }}/{{ $product->images }}-1.jpg"
                                                    alt="Product Image">


                                            </figure>

                                        </div>

                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $product->name }}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Stock Status: <strong color:green>{{$product->stock_status}}</strong></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                {{-- <span class="font-small ml-5 text-muted"> (25 reviews)</span> --}}
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">{{ $product->regular_price }}</span></ins>
                                                <ins><span
                                                        class="old-price font-md ml-15">{{ $product->old_price }}</span></ins>
                                                {{-- <span class="save-price  font-md color3 ml-15">25% Off</span> --}}
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product->short_description }}</p>
                                        </div>

                                        {{-- <div class="attr-detail attr-color mb-15">
                                            <strong class="mr-10">Color</strong>
                                            <ul class="list-filter color-filter">
                                                <li><a href="#" data-color="Red"><span
                                                            class="product-color-red"></span></a></li>
                                                <li><a href="#" data-color="Yellow"><span
                                                            class="product-color-yellow"></span></a></li>
                                                <li class="active"><a href="#" data-color="White"><span
                                                            class="product-color-white"></span></a></li>
                                                <li><a href="#" data-color="Orange"><span
                                                            class="product-color-orange"></span></a></li>
                                                <li><a href="#" data-color="Cyan"><span
                                                            class="product-color-cyan"></span></a></li>
                                                <li><a href="#" data-color="Green"><span
                                                            class="product-color-green"></span></a></li>
                                                <li><a href="#" data-color="Purple"><span
                                                            class="product-color-purple"></span></a></li>
                                            </ul>
                                        </div> --}}
                                  
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                    

                                            <div class="product-extra-link2">
                                                <button type="button"
                                                    class="button button-add-to-cart" wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})">Add
                                                    to
                                                    cart</button>
                                         
                                            </div>
                                        
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">SKU: <a href="">{{ $product->SKU }}</a></li>
                                            <li class="mb-5">Tags: <a href="#" rel="tag">Grocery Item</a>, 
                                            
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                            href="#Description">Description</a>
                                    </li>
                              
                               
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            <p>
                                                {{ $product->description }}
                                            </p>
                                        </div>
                                    </div>

                                
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Related products</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach ($rproducts as $rproduct)
                                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                <div class="product-cart-wrap small hover-up">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{ route('product.details', ['slug' => $rproduct->slug]) }}"
                                                                tabindex="0">
                                                                <img class="default-img" src="{{asset('assets/imgs/shop') }}/{{ $rproduct->images }}-1.jpg" alt="Product Image">
                                                                <img class="hover-img" src="{{asset('assets/imgs/shop') }}/{{ $rproduct->images }}-2.jpg" alt="Product Image">
                                                                    
                                                            </a>
                                                        </div>
                                                        {{-- Pending work
                                                            
                                                            <div class="product-action-1">
                                                            <a aria-label="Quick view"
                                                                class="action-btn small hover-up"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#quickViewModal"><i
                                                                    class="fi-rs-search"></i></a>
                                                            <a aria-label="Add To Wishlist"
                                                                class="action-btn small hover-up" href="wishlist.php"
                                                                tabindex="0"><i class="fi-rs-heart"></i></a>
                                                            <a aria-label="Compare" class="action-btn small hover-up"
                                                                href="compare.php" tabindex="0"><i
                                                                    class="fi-rs-shuffle"></i></a>
                                                        </div> --}}

                                                        <div
                                                            class="product-badges product-badges-position product-badges-mrg">
                                                            <span class="hot">Hot</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <h2><a href="product-details.html"
                                                                tabindex="0">{{ $rproduct->name }}
                                                            </a></h2>
                                                        <div class="rating-result" title="90%">
                                                            <span>
                                                            </span>
                                                        </div>
                                                        <div class="product-price">
                                                            <span>${{ $rproduct->regular_price }} </span>
                                                            <span
                                                                class="old-price">${{ $rproduct->regular_price }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                @foreach($categories as $category)
                                <li><a href="{{route('product.category',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                

                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach ($nproducts as $nproduct)
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img class="default-img" src="{{asset('assets/imgs/shop') }}/{{ $nproduct->images }}-1.jpg" alt="Product Image">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a
                                                href="{{ route('product.details', ['slug' => $nproduct->slug]) }}">{{ $nproduct->name }}</a>
                                        </h5>
                                        <p class="price mb-0 mt-5">${{ $nproduct->regular_price }}</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:90%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>



</div>
