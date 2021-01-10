<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Anywear-Login</title>
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
      <h3>Login</h3>
    </div>
<div class="container-fluid container-narrow-card">
  <div class="row">
    <div class="col-12">
      <ul class="login-social-icon">
        <li><a data-toggle="tooltip" data-placement="top" title="Login with Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a data-toggle="tooltip" data-placement="top" title="Login with G-mail" href="#"><i class="fab fa-google"></i></a></li>
        <li><a data-toggle="tooltip" data-placement="top" title="Login with Twitter" href="#"><i class="fab fa-twitter"></i></a></li>

      </ul>
    </div>
    <div class=" col-lg-3 col-md-12 col-sm-12 col-xs-12 text-center m-auto form-log-in">
        <form class="form-group" method="POST" action="<?php echo e(route('login.custom')); ?>">
		<?php echo csrf_field(); ?>
          <div class="input-with-icn">
          <input class="input-style mail-icn <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email" placeholder="E-mail" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus required>
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <span class="invalid-feedback" role="alert">
          <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		  <i class="far fa-envelope"></i>
        </div>
        <div class="input-with-icn">
          <input class="input-style lock-icn <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" type="Password" placeholder="password">
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		  <i class="fas fa-lock"></i>
        </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-4">
   <?php if(Route::has('password.request')): ?>
         <a class="password-foget" href="<?php echo e(route('password.request')); ?>">Forgot your password?</a>
                                <?php endif; ?>

  </div>
</div>
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 text-center m-auto">
      <button class="registration-signin-btn" type="submit">Sign in</button>
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-center mt-4 mb-4">
      <h5>new to Anywear</h5>
    <a class="register-btn" href="<?php echo e(route('register')); ?>">Register</a>
    </div>
  </div>
</div>
</div>



<?php /**PATH C:\xampp\htdocs\ecommerceV1\resources\views/auth/login.blade.php ENDPATH**/ ?>