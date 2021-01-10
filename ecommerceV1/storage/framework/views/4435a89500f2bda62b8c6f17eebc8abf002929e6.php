<?php echo $__env->yieldContent('contente'); ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="row mb-6">
            <div class="col-md-12 m-auto">
                <section id="footer">
                    <div class="container-fluid p-0 footer-section">
                      <div class="row">
                        <div class="col-12 product-title-footer text-center d-block mt-3">
                          <h2>Keep connected</h2>
                        </div>
                        <div class="col-12 text-center d-block">
                          <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                        <div class="col-12 text-center footer-form">
                          <form action="#">
                            <div class="input-with-icn-footer">
                              <i class="far fa-envelope"></i>
                              <input class="input-footer" type="text" placeholder="Your email address">
                              <button type="submit">subscribe</button>
                            </div>

                          </form>
                        </div>
                        <div class="col-12">
                          <div class="footer_social">
                            <ul class="footer-social-icons">
                              <li> <a href=""> <i class="fab fa-facebook-f"></i></a></li>
                              <li> <a href=""> <i class="fab fa-twitter"></i></a></li>
                              <li> <a href=""> <i class="fab fa-youtube"></i></a></li>
                              <li ><a href=""> <i class="fab fa-google"></i></a></li>
                              <li> <a href=""> <i class="fab fa-instagram"></i></a></li>
                            </ul>
                          </div>
                        </div>

                        <div class="col-12 footer-bottom">
                          <div class="row">
                            <div class="col-lg-6">
                              <a class="navbar-brand-footer" href="#">anywear</a>
                              <p>Copyright © 2020 Braga. <a href="#">Rights Reserved.</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

            </div>
            </div>



  <!--Bootstrap CDN-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Owel carousel js-->
    <script src="for/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="for/js/main.js"></script>
    <script>
      $('document').ready(function(){
        $('.product-gallery-filter-cards').isotope({
    itemSelector: '.filter',
    layoutMode: 'fitRows',
  });

  $('.filter-button').on('click', function() {
  var selector = $(this).attr('data-filter');
    $('.product-gallery-filter-cards').isotope({
      filter: selector
    });
    return false
  })
      })
    </script>




</body>
</html>
<?php /**PATH C:\Users\Oussama Boujarfe\ecommerceV1\resources\views/layouts/footer.blade.php ENDPATH**/ ?>