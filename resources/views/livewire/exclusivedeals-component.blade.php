<div>
    <style>
        nav svg{
            height:20px;
        }
    nav .hidden{
        display:block;
    }
    .wishlisted{
        background: #F15412 !important;
        border: 1px solid transparent !important;
    }
    .wishlisted i{
        color: #fff !important;
    }
    </style>
        <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="/" rel="nofollow">Home</a>
                        <span></span> Exclusive Deals
                    </div>
                </div>
            </div>
            <section class="mt-50 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shop-product-fillter">
                                <div class="totall-product">
                                    <p> We found <strong class="text-brand">{{$products->total()}}</strong> items for you!</p>
                                </div>
                               
                            </div>
    
                            <div class="row product-grid-3">
                                @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                                        <img class="default-img" src="{{asset('assets/imgs/shop') }}/{{ $product->images }}-1.jpg" alt="{{$product->name}}">
                                                        <img class="hover-img" src="{{asset('assets/imgs/shop') }}/{{ $product->images }}-2.jpg" alt="{{$product->name}}">
                                                    </a>
                                                </div>
                                           
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot" style="background:green">InStock</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                              
                                                <h2>
                                                    <a
                                                        href="{{ route('product.details', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                                </h2>
                                                <div class="product-price">
                                                    <span>{{ $product->regular_price }}$ </span>
                                                    <span class="old-price"> {{$product->old_price}} </span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    @if($witems->contains($product->id))
                                                    
                                                    <a aria-label="Remove from Wishlist" class="action-btn hover-up wishlisted"
                                                    href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fi-rs-heart"></i></a>
                                                    @else
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="#" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fi-rs-heart"></i></a>
    @endif
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="#" wire:click.prevent="store({{$product->id,}},'{{$product->name}}',{{$product->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
    
                            </div>
                            <!--pagination-->
                            <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                                {{ $products->links() }}
                                {{-- <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fi-rs-angle-double-small-right"></i></a></li>
                                    </ul>
                                </nav> --}}
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
        </main>
    
    </div>