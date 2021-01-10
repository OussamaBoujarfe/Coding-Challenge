@extends('layouts.footer')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta  charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANYWEAR</title>
  <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!--Font awesome CDN-->
    <script src="https://kit.fontawesome.com/1d20b47144.js" crossorigin="anonymous"></script>
  <!--Styles-->
    <link rel="stylesheet" href="for/css/style.css">
    <link rel="stylesheet" href="for/css/animate.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <!--Owel carousel Style-->
  <link rel="stylesheet" href="for/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="for/owlcarousel/owl.theme.default.min.css">


</head>
<body>

  <div class="overlay"></div>
  <header>
    <div class="navigation-menu">
    <div class="burger-menu">
      <span class="line1"></span>
      <span class="line2"></span>
      <span class="line3"></span>
    </div>
    <!--user Container-->
    <div class="user-nav">
      <i class="fas fa-times"></i>
        <div class="search-menu">
          <input type="text" placeholder="Seacrh">
          <button><img src="for/assets/svg's/search.svg" alt=""></button>
        </div>
        <div class="menu-items">
          <div class="accordion" id="accordionExample">
            <div class="extended-list">
                  <button class="menu-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Account
                  </button>


              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body p-0">
                  <ul class="user-menu-list">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Compare</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="extended-list">
            <button  class="menu-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Shop
                  </button>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body p-0">
                  <ul class="store-menu-list p-0">
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Makeup</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <ul class="mobile-menu-links p-0">
            <li><a href="#">Stores</i></a></li>
            <li><a href="#">Contact us</i></a></li>
            <li><a href="#">About us </a></li>
          </ul>
        </div>
        <div class="sell-with-usbtn">
          <a href="_blank">Sell With Us</a>
        </div>
        <ul class="social-media-icons">
          <li><a href="_blank"><i class="fab fa-facebook"></i></a></li>
          <li><a href="_blank"><i class="fab fa-youtube"></i></a></li>
          <li><a href="_blank"><i class="fab fa-instagram"></i></a></li>
          <li><a href="_blank"><i class="fab fa-linkedin"></i></a></li>

        </ul>
      </div>
    <!--End user container-->
    <a class="navbar-brand" href="#">anywear</a>
    <nav>
      <ul class="icon-list">
        <li class="search-input">
          <img src="for/assets/svg's/search.svg" alt="">
          <div class="search-box">
            <input type="text" placeholder="search">
            <button type="submit"><img src="for/assets/svg's/search.svg" alt=""></button>
        </li>
        <li  class="nav-cart">
            <a href="{{route('product.shoppingCart')}}">
          <img  src="for/assets/svg's/bag.svg" alt=""></a>
          <span class="cart-count">{{Session::has('cart')? Session::get('cart')->totalQty : 0}}</span>
        </li>
        <!--Cart container-->
<!--
        <div class="cart-container">
          <i id="cart-close" class="fas fa-times cart-close-botton"></i>
          <div class="cart-container-inner">
            <h6>Cart</h6>

            <ul class="cart-items">

              <li>
                <div class="cart-products">
                  <img src="" alt="product">
                  <div class="cart-product-details">
                    <a href="_blank"></a>
                    <span> x</i></span> <span><strong></strong></span>
                  </div>
                  <button type="reset"><i class="far fa-times-circle"></i></button>
                </div>
              </li>

              <li>
                <div class="cart-products">
                  <img src="for/assets/product14.jpg" alt="product">
                  <div class="cart-product-details">
                    <a href="_blank">Product name</a>
                    <span>1 x</i></span> <span><strong>200 EGP</strong></span>
                  </div>
                  <button type="reset"><i class="far fa-times-circle"></i></button>
                </div>
              </li>
            </ul>

            <ul class="cart-container-prices">
              <li>
                <span>Sub total:</span>
                <span class="price">400 EGP</span>
              </li>
              <li>
                <span>Total:</span>
                <span class="price">400 EGP</span>
              </li>
            </ul>
            <div class="cart-container-btn">
              <a >view cart <i class="fa fa-shopping-bag"></i></a>
              <a href="">checkout <i class="fas fa-external-link-alt"></i></a>

            </div>
          </div>

        </div>-->

        <!--end cart container-->
        <li class="user-drop-down">
          <img src="for/assets/svg's/user.svg" alt="">

          <div class="user-container">
		  @if (Route::has('login'))
            <div class="user-default-button">
             @auth

             <a href="{{ url('/logout') }}" >LOGOUT</a>

                <a style="background-color: rgb(95, 123, 177)" href="#">Profile</a>
                <a style="background-color: rgb(95, 123, 177)" href="#">Orders</a>
                <a style="background-color: rgb(95, 123, 177)" href="#">Wishlist</a>
                <a style="background-color: rgb(95, 123, 177)" href="#">Compare</a>

			@else
              <a href="{{ route('login') }}">Sign in</a>
			 @if (Route::has('register'))
              <a href="{{ route('register') }}">Create account</a>
			  @endif
              @endauth
              </div>
          @endif

              <p>Welcome to<br>ANYWEAR</p>
            </div>
        </li>
      </ul>
    </nav>
  </div>
  <!--Start Slider-->
  <div class="owl-carousel main-slider">
    <div class="item">
      <img src="for/assets/1.jpg" href="{{url('/shop')}}" alt="">
      <div class="slider-inner-container">
        <h4 class="animate__animated animate__fadeInLeft animate__delay-.5s">Get 30% off & free shipping</h4>
        <h1 class="animate__animated animate__fadeInLeft animate__delay-1s">Summer sale</h1>
        <p class="animate__animated animate__fadeInLeft animate__delay-1s">An exclusive selection of this season’s trends.</p>
        <span class="animate__animated animate__fadeInLeft animate__delay-.5s">Exclusively online</span>
        <a href="{{ route('product.index') }}" class="animate__animated animate__fadeInLeft animate__delay-.8s" >Shop now</a>
      </div>
    </div>
    <div class="item">
      <img src="for/assets/3.jpg" href="{{url('/shop')}}" alt="">
      <div class="slider-inner-container">
        <h4>Get 30% off & free shipping</h4>
        <h1>Summer sale</h1>
        <p>An exclusive selection of this season’s trends.</p>
        <span>Exclusively online</span>
        <a href="{{url('/shop')}}">Shop Now</a>
      </div>
    </div>
  </div>
  <!--End Slider-->
  </header>
  <section id="main">
    <div class="container-fluid m-auto ">
      <div class="row mb-5">
        <div class="col-xs-12 col-md-4 col-lg-4">
          <div class="banner-category">
            <img src="for/assets/bn-8-1.jpg" alt="">
            <div class="banner-inner">
              <h1>Women<br>Lookbook</h1>
              <a href="{{url('/shop')}}">Shop Now</a>
            </div>

          </div>
        </div>
        <div class="col-xs-12 col-md-4 col-lg-4">
          <div class="banner-category">
            <img src="for/assets/bn-8-2.jpg" alt="">
            <div class="banner-inner">
              <h1>Men<br>Collection</h1>
              <a href="{{url('/shop')}}">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-4 col-lg-4">
          <div class="banner-category">
            <img src="for/assets/bn-8-3.jpg" alt="">
            <div class="banner-inner">
              <h1>Older Kids<br>7-14 years</h1>
              <a href="{{url('/shop')}}">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">

      <div class="row mb-5">
        <div class="col-lg-12 m-auto">
          <div class="main-section-offer">
            <span>final clearance: take 20% off 🔥🔥 use code "Spring20"</span>
           </div>
        </div>
      </div>

      <div class="container">
      <div class="row  mb-5">
        <div class="col-12 product-title text-center mb-5">
          <h2>featured Products</h2>

        </div>
        @foreach($products as $product)
        <div class="col-md-3 col-sm-6 ">

                  <div class="product-card">
                    <div class="product-card-img">
                      <img src="{{$product->imagePath}}" alt="">
                        <ul class="product-card-options">
                          <li><button  data-toggle="tooltip" data-placement="bottom" title="Add to wishlist"><i class="far fa-heart"></i></button></li>
                          <li><button  data-toggle="tooltip" data-placement="bottom" title="Add to compare"><i class="fas fa-retweet"></i></button></li>
                          <li  data-toggle="tooltip" id="myButton" data-placement="bottom" title="Quick view"><a href="#"  data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a></li>
                        </ul>
                        @if($product->sale)
                        <span class="sale-item-box">Sale</span>
                        @endif
                    </div>
                    <div class="product-card-content">
                      <div class="product-card-inner-content">
                        <a href="#">{{$product->title}}</a>
                        <p>{{$product->description}}</p>
                    <div class="product-price-rate">

                      <span> <strike>4,000 EGP</strike> </span>

                      <span>{{$product->price}} EGP</span>>

                    </div>
                    </div>
                    <div class="add-to-cart-btn">
                      <a href="{{route('product.addToCart1',['id'=>$product->id])}}">add to cart</a>
                    </div>
                  </div>

                  </div>
        </div>
        @endforeach
    </div>
</div>
</div>
          </div>

      <div class="row mb-5">
        <div class="col-md-12 m-auto">
          <div class="banner">
            <a href="#">
              <img src="for/assets/banner5.jpg">
            </a>
            <div class="banner-inner-content">
              <h3>Spring collection</h3>
              <h2>up to 50%</h2>
              <p>
                an exclusive collection of this season's cloth
                <span>exclusively online!</span>
              </p>
              <a href="{{url('/shop')}}">shop now</a>
            </div>
          </div>

        </div>
        </div>
        <div class="container ">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-12 product-title text-center mb-5">
              <h2>Our categories</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center m-auto product-gallery-filter-list ">
            <ul>
              <li class="filter-button" data-filter="*" >All</li>
              <li class="filter-button" data-filter=".shoe" >Shoe</li>
              <li class="filter-button" data-filter=".backpacks" >All</li>
              <li class="filter-button" data-filter=".accessories" >All</li>
            </ul>
          </div>
        </div>
          <div class="row product-gallery-filter-cards">
            @foreach($products as $product)
            <div class="col-md-3 col-sm-6 filter backpacks">
              <div class="product-card">
                <div class="product-card-img">
                    <img src="{{$product->imagePath}}" alt="">
                    <ul class="product-card-options">
                      <li><button  data-toggle="tooltip" data-placement="bottom" title="Add to wishlist"><i class="far fa-heart"></i></button></li>
                      <li><button  data-toggle="tooltip" data-placement="bottom" title="Add to compare"><i class="fas fa-retweet"></i></button></li>
                      <li  data-toggle="tooltip" id="myButton" data-placement="bottom" title="Quick view"><a href="#"  data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a></li>
                    </ul>
                    @if($product->sale)
                    <span class="sale-item-box">Sale</span>
                    @endif
                </div>
            <div class="product-card-content">
                  <div class="product-card-inner-content">
                    <a href="#">{{$product->title}}</a>
                    <p>{{$product->description}}</p>
                <div class="product-price-rate">

                  <span> <strike>4,000 EGP</strike> </span>

                  <span>{{$product->price}} EGP</span>

                </div>
                </div>
                <div class="add-to-cart-btn">
                  <a href="#">add to cart</a>
                </div>
            </div>

              </div>
    </div>
    @endforeach
                </div>
              </div>




