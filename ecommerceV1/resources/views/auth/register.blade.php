<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Anywear-Register</title>
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
      <h3>Registration</h3>
    </div>
<div class="container-fluid container-narrow-card sign-up-form">

<form method="POST" action="{{ route('register') }}">
        {{csrf_field()}}

  <div class="row main-sing-up-info">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center sign-up-input">

        <input type="text" class=" @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name">
  @error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
 </span>
 @enderror

  </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center sign-up-input">
        <input type="email" class=" @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">
  @error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
 </span>
 @enderror

  </div>
  <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center sign-up-input">
    <input type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
 @error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
	</div>
<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center sign-up-input">
  <input type="password"  name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
</div>
</div>
<div class="row">
  <div class="col-lg-5 text-center m-auto form-check-box">
    <div class="container-check-box">
    <h6>Seller</h6>
    <div class="seller-check-box" data-toggle="collapse" href="#seller-check-box" role="button" aria-expanded="false" aria-controls="collapseExample">
      <input class="switch" type="checkbox" name="role" value="Seller">
    </div>
  </div>
    <div class="container-check-box">
      <h6>Buyer</h6>
      <input class="switch" type="checkbox" name="role" value="Buyer">
  </div>
  </div>

</div>
    <div class="collapse main-sing-up-info" id="seller-check-box">
      <div class="row main-sing-up-info">
        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center sign-up-input ">
            <input type="text" name="fname" placeholder="First Name" value="{{ old('fname') }}">
      </div>
      <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center sign-up-input">
        <input type="text" name="lname" placeholder="Last Name"value="{{ old('lname') }}">
    </div>
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center sign-up-input">
      <input type="text" name="sname" placeholder="Store Name"value="{{ old('sname') }}">
    </div>
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center sign-up-input">
      <input type="text" name="surl" placeholder="Store Url" value="https://Anywear.com/"  aria-required="true" value="{{ old('surl') }}">

    </div>
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center sign-up-input">
      <input type="text" name="phone" placeholder="Phone Number" aria-required="true" value="{{ old('phone') }}">
    </div>
    </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 text-center m-auto">
          <button class="registration-signin-btn" type="submit">Sign up</button>
        </div>
      </div>
</form>
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
   <script src="for/js/main.js"></script>
</body>
</html>
