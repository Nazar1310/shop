<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{route('index')}}"><img src="/img/logo.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="{{Route::current()->getName() == 'index'?'active':''}}"><a href="{{route('index')}}">Home</a></li>
                        <li class="{{Route::current()->getName() == 'products'?'active':''}}"><a href="{{route('products')}}">Products</a></li>
{{--                        <li><a href="{{route('products')}}">Products</a>--}}
{{--                            <ul class="dropdown">--}}
{{--                                <li><a href="#">Product1</a></li>--}}
{{--                                <li><a href="#">Product2</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="{{Route::current()->getName() == 'about'?'active':''}}"><a href="{{route('about')}}">About Us</a></li>
                        <li class="{{Route::current()->getName() == 'contact'?'active':''}}"><a href="{{route('contact')}}">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
{{--                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>--}}
                    <a href="{{route('shopping-cart')}}"><img src="/img/icon/cart.png" alt=""> <span class="countInCart">0</span></a>
                    <a href="{{route('shopping-cart')}}"><div class="price priceInCart">$0.00</div></a>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
