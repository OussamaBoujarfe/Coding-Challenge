<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="for/assets/svg's/fav.svg" type="image/x-icon">

   <title>Anywear</title>
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
  <div class="overlay"></div>
    <div class="container-fluid p-0 page-card">
    <div class="bread-cumber text-center">
      <h3>cart</h3>
    </div>
      <div class="container-fluid container-narrow-card">
        <!--shopping cart area start -->
        <div class="shopping_cart_area">
          <div class="container">
              <form method="">
                  <?php if(Session::has('cart')): ?>
                  <div class="row">
                      <div class="col-12">
                          <div class="table_desc">

                              <div class="cart_page table-responsive">
                             <table>

                              <thead>
                                  <tr>
                                      <th class="product_remove">Delete</th>
                                      <th class="product_thumb">Image</th>
                                      <th class="product_name">Product</th>
                                      <th class="product-price">Price</th>
                                      <th class="product_quantity">Quantity</th>
                                      <th class="product_name">Size</th>
                                      <th class="product_total">Total</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>

                                      <td class="product_remove"><a href="<?php echo e(route('product.destroy', ['id' => $product['item']['id']])); ?>"><i class="fa fa-trash-o"></i></a></td>
                                      <td class="product_thumb"><a href="#"><img src="<?php echo e($product['item']['imagePath']); ?>" alt=""></a></td>
                                      <td class="product_name"><a href="#"><?php echo e($product['item']['title']); ?></a></td>
                                      <td class="product-price"><?php echo e($product['price']); ?></td>
                                      <td class="product_quantity"><label></label> <input min="1" max="100" value="<?php echo e($product['qty']); ?>" type="number"></td>
                                     <td> <select class="product_name">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                      </select></td>
                                      <td class="product_total"><?php echo e($product['price']*$product['qty']); ?></td>


                                  </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                          </table>
                              </div>
                              <div class="cart_submit">
                                  <button type="submit">update cart</button>
                              </div>
                  </div>
               </div>
           </div>
           <?php else: ?>
           <div class="row">
            <div class="col-12">
                <div class="table_desc">
<h2>No items</h2>
                    <div class="cart_page table-responsive">
                    </div>
                </div>
            </div>
        </div>

           <?php endif; ?>
      </div>
    </div>
     <!--coupon code area start-->
     <div class="coupon_area">
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="coupon_code left">
                  <h3>Coupon</h3>
                  <div class="coupon_inner">
                      <p>Enter your coupon code if you have one.</p>
                      <input placeholder="Coupon code" type="text">
                      <button type="submit">Apply coupon</button>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-6">
              <div class="coupon_code right">
                  <h3>Cart Totals</h3>
                  <div class="coupon_inner">
                     <div class="cart_subtotal">
                         <p>Subtotal</p>
                     <p class="cart_amount"><?php echo e($totalPrice ?? ''); ?></p>
                     </div>
                     <div class="cart_subtotal ">
                         <p>Shipping</p>
                         <p class="cart_amount"><span>Flat Rate:</span> Free</p>
                     </div>
                    <!-- <a href="#">Calculate shipping</a>-->

                     <div class="cart_subtotal">
                         <p>Total</p>
                         <p class="cart_amount"><?php echo e($totalPrice ?? ''); ?></p>
                     </div>
                     <div class="checkout_btn">
                     <a href="<?php echo e(route('checkout')); ?>">Proceed to Checkout</a>
                     </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--coupon code area end-->
  </div>










   <!--Bootstrap CDN-->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <!--Owel carousel js-->
   <script src="fpr/owlcarousel/owl.carousel.min.js"></script>
   <script src="for/js/main.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ecommerceV1\resources\views/shop/shopping-cart.blade.php ENDPATH**/ ?>