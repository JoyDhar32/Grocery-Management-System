<style>
    .hotline p i{
        color:#16542E;
    }
    .text-container{
        max-width: 260px; /* Adjust the max width as per your requirement */
    overflow: hidden;
    white-space: nowrap;
    }
    .truncate {
    text-overflow: ellipsis;
}
</style>
<div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="{{route('home.index')}}"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories & Products
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                <li class="has-children">
                                    @foreach($categories as $category)
                                    <a href="{{route('product.category',[$category->slug])}}"><i class="surfsidemedia-font-dress"></i>{{$category->name}}</a>
                                        
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-md-9">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                          
                                                            <li><span class="submenu-title">Trending & Best Selling</span>
                                                            </li>
                                                        @foreach($products as $product)
                                                        
                                                            <li class="text-container"><a class="dropdown-item nav-link nav_item truncate "
                                                                    href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></li>
                                                                   
                                               @endforeach
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                          
                                                            <li><span class="submenu-title">Popular & Featured</span>
                                                            </li>
                                                        @foreach($products1 as $product)
                                                        
                                                            <li  class="text-container"><a class="dropdown-item nav-link nav_item truncate"
                                                                    href="{{route('product.details',['slug'=>$product->slug])}}">{{$product->name}}</a></li>
                                                                   
                                               @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <div class="header-banner2">
                                                    <img src="{{asset('assets/imgs/shop/FRIED-038-2.jpg')}}"
                                                        alt="menu_banner1">
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{asset('assets/imgs/shop/DIP-012-2.jpg')}}"
                                                        alt="menu_banner2">
                                                 
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{asset('assets/imgs/shop/LAS-017-2.jpg')}}"
                                                        alt="menu_banner1">
                                                
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                @endforeach

                                </li>
                            </ul>
                            
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block" >
                        <nav>
                            <ul>
                                <li><a class="{{ Request::url() == route('home.index') ? 'active' : '' }}"
                                        href="{{ route('home.index') }}">Home </a></li>
                                <li><a class="{{ Request::url() == route('home.about') ? 'active' : '' }}"
                                        href="{{ route('home.about') }}">About Us</a></li>
                                <li><a class="{{ Request::url() == route('shop') ? 'active' : '' }}"
                                        href="{{ route('shop') }}">Shop</a></li>
                                {{-- <li><a href="blog.html">Blog </a></li> --}}
                                <li><a class="{{ Request::url() == route('home.contact') ? 'active' : '' }}"
                                        href="{{ route('home.contact') }}">Contact</a></li>

                                        @auth
                                <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                 
                                        @if (Auth::user()->utype == 'ADM')
                               
                                            <ul class="sub-menu">
                                            
                                                <li><a href="{{route('admin.products')}}">Products</a></li>
                                                <li><a href="{{route('admin.categories')}}">Categories</a></li>
                                                <li><a href="{{route('admin.allorders')}}">All-Orders</a></li>
                                                <li><a href="{{route('admin.orders_history')}}">Order-History</a></li>
                                                <li><a href="{{route('admin.users')}}">Users</a></li>
                                                <li><a href="{{route('admin.subscriber')}}">Subscriber</a></li>
                                                <li><a href="{{route('admin.messages')}}">Messages</a></li>
                                                <li>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="post">
                                                        @csrf
                                                        <input type="submit" class="text-start" style="color:red;background:transparent;font-weight:bold;border:none;font-size:18px;margin-top:0" value="Logout"
                                                            onclick="event.preventDefault(; this.closest('form').submit();)"/>
                                                    </form>
                                                </li>
                                            </ul>
                                        @else
                                            <ul class="sub-menu">
                                                <li><a href="{{route('user.myorders')}}">My Orders</a></li>
                                      
                                                <li>
                                                    <form action="{{ route('logout') }}" method="post">
                                                        @csrf
                                                        <input type="submit" class="text-start" style="color:red;background:transparent;font-weight:bold;border:none;font-size:18px;margin-top:0" value="Logout"
                                                            onclick="event.preventDefault(; this.closest('form').submit();)"/>
                                                    </form>
                                                </li>
                                            </ul>
                                        @endif
                                    
                                </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
                
                <div class="hotline d-none d-lg-block">
                    <p><i class="fa fa-shopping-cart" style="font-size:24px"></i><span><a href="{{route('exclusive.deals')}}"> Exclusive Deals </a></p>
                </div>
           
            </div>
        </div>
    </div>
</div>
