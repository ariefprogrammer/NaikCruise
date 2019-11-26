    
    
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row">
        
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
            <div class="footer-single">
              <img src="<?php echo base_url('img3/footer-logo.png')?>" alt="">
              <p>Let's sailing with Naik Cruise and nikmati kemewahan kapal-kapal pesiar terbaik.</p>
            </div>
          </div>
        
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
            <div class="footer-single">
              <h6>Subscribe </h6>
              <form action="#" class="subscribe">
                <input type="text" name="subscribe" id="subscribe">
                <input type="submit" value="&#8594;" id="subs">
              </form>
              <p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
        
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <div class="footer-single">
              <h6>Branches</h6>
              <ul>
                <li><a href="#">Jabodetabek</a></li>
                <li><a href="#">Bandung</a></li>
                <li><a href="#">Yogyakarta</a></li>
                <li><a href="#">Surabaya</a></li>
                <li><a href="#">Bali</a></li>
                <li><a href="#">Cikarang</a></li>
                <li><a href="#">Karawang</a></li>
              </ul>
            </div>
          </div>
        
          <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
            <div class="footer-single">
              <h6>About NaikCruise</h6>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Terms and Condition</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Galery</a></li>
              </ul>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="copyright text-center">
              Copyright © 2019 <a href="https://www.his-travel.co.id/">HIS Travel Indonesia</a>.
            </p>
          </div>
        </div>
      </div>
    </footer>
    
    <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    <!-- Essential jQuery Plugins
    ================================================== -->

    <!-- Main jQuery -->
        <script src="js3/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
        <script src="js3/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
        <script src="js3/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
        <script src="js3/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
        <script src="js3/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
        <script src="js3/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
        <script src="js3/jquery-countTo.js"></script>
    <!-- jquery.appear -->
        <script src="js3/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- jquery easing -->
        <script src="js3/jquery.easing.min.js"></script>
    <!-- jquery easing -->
        <script src="js3/wow.min.js"></script>
    <script>
      var wow = new WOW ({
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       120,          // distance to the element when triggering the animation (default is 0)
        mobile:       false,       // trigger animations on mobile devices (default is true)
        live:         true        // act on asynchronously loaded content (default is true)
        }
      );
      wow.init();
    </script> 
    <!-- Custom Functions -->
        <script src="js3/custom.js"></script>
    
    <script type="text/javascript">
      $(function(){
        /* ========================================================================= */
        /*  Contact Form
        /* ========================================================================= */
        
        $('#contact-form').validate({
          rules: {
            name: {
              required: true,
              minlength: 2
            },
            email: {
              required: true,
              email: true
            },
            message: {
              required: true
            }
          },
          messages: {
            name: {
              required: "come on, you have a name don't you?",
              minlength: "your name must consist of at least 2 characters"
            },
            email: {
              required: "no email, no message"
            },
            message: {
              required: "um...yea, you have to write something to send this form.",
              minlength: "thats all? really?"
            }
          },
          submitHandler: function(form) {
            $(form).ajaxSubmit({
              type:"POST",
              data: $(form).serialize(),
              url:"process.php",
              success: function() {
                $('#contact-form :input').attr('disabled', 'disabled');
                $('#contact-form').fadeTo( "slow", 0.15, function() {
                  $(this).find(':input').attr('disabled', 'disabled');
                  $(this).find('label').css('cursor','default');
                  $('#success').fadeIn();
                });
              },
              error: function() {
                $('#contact-form').fadeTo( "slow", 0.15, function() {
                  $('#error').fadeIn();
                });
              }
            });
          }
        });
      });
    </script>
    </body>
</html>
