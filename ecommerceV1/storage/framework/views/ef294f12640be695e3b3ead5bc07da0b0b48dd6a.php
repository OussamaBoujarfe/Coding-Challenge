<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANYWEAR</title>
  <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!--Font awesome CDN-->
    <script src="https://kit.fontawesome.com/1d20b47144.js" crossorigin="anonymous"></script>
  <!--Styles-->
    <link rel="stylesheet" href="for/css/style.css">
    <link rel="stylesheet" href="for/css/animate.css">
  <!--Owel carousel Style-->
  <link rel="stylesheet" href="for/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="for/owlcarousel/owl.theme.default.min.css">


</head>
<body>
    <header>
        <div class="navigation-menu">
        <nav>
            <ul class="icon-list">
              <li class="search-input">
                <img src="for/assets/svg's/search.svg" alt="">
                <div class="search-box">
                  <input type="text" placeholder="search">
                  <button type="submit"><img src="for/assets/svg's/search.svg" alt=""></button>
              </li>
              <li id="navCart" class="nav-cart"> <a href="<?php echo e(route('product.shoppingCart')); ?>">
                <img src="for/assets/svg's/bag.svg" alt=""></a>
              <span class="cart-count"><?php echo e(Session::has('cart')? Session::get('cart')->totalQty : 0); ?></span>
              </li>
              <!--Cart container-->
             <!-- <div class="cart-container">
                <i id="cart-close" class="fas fa-times cart-close-botton"></i>
                <div class="cart-container-inner">
                  <h6>Cart</h6>
                  <ul class="cart-items">
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
                  <a href="">view cart <i class="fa fa-shopping-bag"></i></a>
                  <a href="">checkout <i class="fas fa-external-link-alt"></i></a>

                  </div>
                </div>

              </div>-->
              <!--end cart container-->
              <li class="user-drop-down">
                <img src="for/assets/svg's/user.svg" alt="">

                <div class="user-container">
                <?php if(Route::has('login')): ?>
                  <div class="user-default-button">
                   <?php if(auth()->guard()->check()): ?>

                   <a href="<?php echo e(url('/logout')); ?>" >LOGOUT</a>

                      <a style="background-color: rgb(95, 123, 177)" href="#">Profile</a>
                      <a style="background-color: rgb(95, 123, 177)" href="#">Orders</a>
                      <a style="background-color: rgb(95, 123, 177)" href="#">Wishlist</a>
                      <a style="background-color: rgb(95, 123, 177)" href="#">Compare</a>

                  <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>">Sign in</a>
                   <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Create account</a>
                    <?php endif; ?>
                    <?php endif; ?>
                    </div>
                <?php endif; ?>

                    <p>Welcome to<br>ANYWEAR</p>
                  </div>
              </li>
            </ul>
          </nav>
        </div>
    </header>
<div class="container-fluid p-0 page-card">
  <div class="bread-cumber text-center">
    <h3>Shop</h3>
  </div>
<div class="container-fluid container-narrow-card">
  <div class="row">
    <div class="col-lg-3 col-md-3">
      <div class="shop-filter">
        <h5>Category</h5>
        <div class="accordion mb-4 mt-4" id="accordionExample">
          <div class="card-filter">
            <div id="headingOne">
              <h2 class="mb-0">
                <button class="filter-btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Women
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <ul class="filter-sub-category">
                  <li><a href="_blank">Skirts <span>(2)</span></a></li>
                  <li><a href="_blank">Dress <span>(12)</span></a></a></li>
                  <li><a href="_blank">Shirt <span>(8)</span></a></a></li>
                  <li><a href="_blank">Jeans <span>(9)</span></a></a></li>

                </ul>
              </div>
            </div>
          </div>
          <div class="card-filter">
            <div id="headingTwo">
              <h2 class="mb-0">
                <button class="filter-btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Men
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="card-body">
                  <ul class="filter-sub-category">
                    <li><a href="_blank">T-shirt <span>(2)</span></a></li>
                    <li><a href="_blank">Jeans <span>(12)</span></a></a></li>
                    <li><a href="_blank">Shirt <span>(8)</span></a></a></li>
                    <li><a href="_blank">Polo <span>(9)</span></a></a></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card-filter">
            <div id="headingThree">
              <h2 class="mb-0">
                <button class="filter-btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Kids
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <ul class="filter-sub-category">
                  <li><a href="_blank">T-shirt <span>(2)</span></a></li>
                  <li><a href="_blank">Jeans <span>(12)</span></a></a></li>
                  <li><a href="">Shirt <span>(8)</span></a></a></li>
                  <li><a href="" value="Jacket">Jacket <span>(9)</span></a></a></li>

                </ul>
            </div>
          </div>
        </div>
        <div class="card-filter">
          <div id="headingFour">
            <h2 class="mb-0">
              <button class="filter-btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Acessories
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              <ul class="filter-sub-category">
                <li><a href="_blank">Hand Made <span>(2)</span></a></li>
                <li><a href="_blank">Ring <span>(12)</span></a></a></li>
                <li><a href="_blank">Glasses <span>(8)</span></a></a></li>
                <li><a href="_blank">Bagpack <span>(9)</span></a></a></li>

              </ul>
          </div>
        </div>
      </div>
      <div class="card-filter">
        <div id="headingFive">
          <h2 class="mb-0">
            <button class="filter-btn  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Make up
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
          <div class="card-body">
            <ul class="filter-sub-category">
              <li><a href="_blank">Hand Made <span>(2)</span></a></li>
              <li><a href="_blank">Ring <span>(12)</span></a></a></li>
              <li><a href="_blank">Glasses <span>(8)</span></a></a></li>
              <li><a href="_blank">Bagpack <span>(9)</span></a></a></li>

            </ul>
        </div>
      </div>
    </div>
      </div>
      <div class="filter-price-range mb-4 mt-4 ">
        <h5>Price</h5>
        <div class="slidecontainer">
          <input type="range" min="500" max="5000" value="1" class="slider" id="myRange">
          <button class="filter-sub" type="submit">Filter</button>
        </div>
      </div>
      <div class="Filter-size mb-4 mt-4">
        <h5>Size</h5>
        <ul>
          <li>
            <span>S</span>
            <div class="fliter-check-box-container">
              <input class="filter-check-box" type="checkbox">
            </div>
          </li>
          <li>
            <span>M</span>
            <div class="fliter-check-box-container">
              <input class="filter-check-box" type="checkbox">
            </div>
          </li>
          <li>
            <span>L</span>
            <div class="fliter-check-box-container">
            <input class="filter-check-box" type="checkbox">
          </div>
          </li>
          <li>
            <span>XL</span>
            <div class="fliter-check-box-container">
              <input class="filter-check-box" type="checkbox">
            </div>
          </li>
        </ul>

      </div>
    </div>
  </div>
  <div class="col-lg-9">
      <?php $__currentLoopData = $products->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="row">
        <?php $__currentLoopData = $productChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 col-sm-6">
            <div class="product-card">
              <div class="product-card-img">
                <img src="<?php echo e($product->imagePath); ?>" alt="">
                  <ul class="product-card-options">
                    <li><button  data-toggle="tooltip" data-placement="bottom" title="Add to wishlist"><i class="far fa-heart"></i></button></li>
                    <li><button  data-toggle="tooltip" data-placement="bottom" title="Add to compare"><i class="fas fa-retweet"></i></button></li>
                    <li  data-toggle="tooltip" id="myButton" data-placement="bottom" title="Quick view"><a href="#"  data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i></a></li>
                  </ul>
                  <?php if($product->sale): ?>
                  <span class="sale-item-box">Sale</span>
                  <?php endif; ?>
              </div>
              <div class="product-card-content">
                <div class="product-card-inner-content">
                  <a href="#"><?php echo e($product->title); ?></a>
                  <p><?php echo e($product->description); ?></p>
              <div class="product-price-rate">

                <span> <strike>4,000 EGP</strike> </span>

                <span><?php echo e($product->price); ?> EGP</span>

              </div>
              </div>
              <div class="add-to-cart-btn">
                <a href="<?php echo e(route('product.addToCart',['id'=>$product->id])); ?>">add to cart</a>
              </div>
            </div>

            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="col-12">
        <nav aria-label="Page navigation example">
            <div class="pagination justify-content-center" >
                <?php echo $products->render(); ?>

            </div>

        </nav>
      </div>

</div>
</div>
<div class="modal fade bd-example-modal-xl" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-5 product-thumbnail text-center">
              <div class="imgBox"><a href="for/assets/product14.jpg" class="image-link"><img class="img-fluid mb-2"  src="for/assets/product14.jpg" alt=""></a></div>
              <div class="owl-carousel mb-3">
                <div class="item"><a href="for/assets/product14.jpg" target="imgBox"><img class="img-responsive" src="for/assets/product14.jpg" alt=""></a></div>
                <div class="item"><a href="for/assets/product10.jpg" target="imgBox"><img class="img-responsive" src="for/assets/product10.jpg" alt=""></a></div>
                <div class="item"><a href="for/assets/product12.jpg" target="imgBox"><img class="img-responsive" src="for/assets/product12.jpg" alt=""></a></div>
                <div class="item"><a href="for/assets/product10.jpg" target="imgBox"><img class="img-responsive" src="for/assets/product10.jpg" alt=""></a></div>
              </div>
            </div>
          <div class="col-md-7 col-lg-6">
            <h2>Water proof jacket</h2>
            <div class="modal-price mb-4">
            <span style="color: red;"> <strike>4,000 EGP</strike> </span>
            <span>3,500 EGP </span>
          </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione iste libero quisquam distinctio rem. Hic repellendus consequatur, perferendis fuga dolorem impedit velit maxime eius nobis delectus vero. Assumenda, voluptate quis!</p>
            <div class="variet-selects">
              <h5>Size</h5>
              <div class="varient-select-options">
                <select class="form-control mb-3">
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="S">XL</option>
                </select>
                <h5>Color</h5>
                <select class="form-control mb-3">
                  <option value="">Red</option>
                  <option value="">blue</option>
                  <option value="">white</option>
                  <option value="">Black</option>
                  <option value="">Yellow</option>
                </select>
              </div>
              <div class="modal-add-cart">
                <input min="1" max="100" step="1" value="1" type="number" >
                <button type="submit">add to cart</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>





        <!--Start Modal box-->

        <!--End modal box-->

<!--Bootstrap CDN-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--Owel carousel js-->
<script src="for/owlcarousel/owl.carousel.min.js"></script>
<!--Istope-->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="for/js/main.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ecommerceV1\resources\views/shop/index.blade.php ENDPATH**/ ?>