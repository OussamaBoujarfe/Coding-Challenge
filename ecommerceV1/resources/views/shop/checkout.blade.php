<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <h3>checkout</h3>
    </div>
    <div class="container-fluid container-narrow-card">
        <div class="row">
        <!--Start Belling Details-->
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="billing-details text-center">
              <h5>belling details</h5>
              <form action="">
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <label>First name <span>*</span></label>



                  <input type="text" value="">
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <label>last name <span>*</span></label>
                    <input type="text">
                  </div>
                  <div class="col-12">
                    <label>governorate <span>*</span></label>
                    <select>
                      <option value="">Cairo</option>
                      <option value="">Cairo</option>
                      <option value="">Cairo</option>
                      <option value="">Cairo</option>

                    </select>
                  </div>
                  <div class="col-12">
                    <label>Address <span>*</span></label>
                    <input type="text" placeholder="House number, and street name">
                  </div>
                  <div class="col-12">
                    <input type="text" placeholder="Apartment">
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <label>Phone number <span>*</span></label>
                    <input type="tel">
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <label>E-mail address <span>*</span></label>
                    <input type="email">
                  </div>

                  <div class="col-12 text-left create-account-accordion mb-2">
                    <div class="create-account-accordion-btn">
                    <input type="checkbox" class="filter-check-box" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="#collapseOne">
                    <span>Create an account?</span>
                  </div>
                    <div class="collapse" id="collapseOne">
                      <div class="card card-body">
                        <div class="row">
                          <div class="col-12">
                            <label>E-mail <span>*</span></label>
                            <input type="text">
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <label>password <span>*</span></label>
                            <input type="password">
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <label>confirm password <span>*</span></label>
                            <input type="password">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 text-left create-account-accordion mb-4">
                    <div class="create-account-accordion-btn">
                    <input type="checkbox" class="filter-check-box" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="#collapseTwo">
                    <span>Ship to another address</span>
                  </div>
                    <div class="collapse" id="collapseTwo">
                      <div class="card card-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="col-12">
                              <label>Address <span>*</span></label>
                              <input type="text" placeholder="House number, and street name">
                            </div>
                            <div class="col-12">
                              <input type="text" placeholder="Apartment">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <label>Order notes</label>
                  <textarea></textarea>
                </div>
              </div>
            </form>
            </div>
          </div>
           <!--End belling details-->
           <!--Start total and Payment-->
           <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="billing-details">
                <h5>your orders</h5>
                    <form action="{{route('checkout')}}" method="post">
                        @if(Session::has('cart'))
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td> {{$product['item']['title']}}<strong> × {{$product['qty']}}</strong></td>
                                        <td> {{$product['price']}}</td>
                                    </tr>
                                   @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>${{$total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td><strong>Free</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Order Total</th>
                                        <td><strong>${{$total}}</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                            @endif
                        </div>
                        <div class="payment_method">
                            <div class="cash-on-delivery">
                              <input class="filter-check-box" type="checkbox">
                              <span>Cash on delivery</span>
                            </div>
                            <div class="order_button">
                              <button type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Processed credit card
                              </button>
                                <div class="collapse" id="collapseThree">
                                    <div class="card card-body">
                                      <div class="row">
                                        <div class="col-12">
                                          <label>Card number</label>
                                          <input type="text" placeholder="valid card">
                                        </div>
                                        <div class="col-6">
                                          <label>Expiration Date</label>
                                          <input type="text" placeholder="MM/YY">
                                        </div>
                                        <div class="col-6">
                                          <label>CV CODE</label>
                                          <input type="text" placeholder="CVC">
                                        </div>
                                        <div class="col-12 text-center">
                                          <button type="submit">Pay</button>
                                        </div>

                                    </div>
                                    </div>
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










   <!--Bootstrap CDN-->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <!--Owel carousel js-->
   <script src="for/owlcarousel/owl.carousel.min.js"></script>
   <script src="forjs/main.js"></script>
</body>
</html>