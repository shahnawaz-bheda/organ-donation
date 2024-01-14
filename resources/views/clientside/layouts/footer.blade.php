<!-- footer -->
<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="navbar-brand" href="/">Organ <span style="color:#2caee2">D</span>onation</a>
            </div>
            
            <ul class="mt-3">
              <li><a href="tel:(+91) 95583 62840"><span class="fa fa-phone"></span> (+91) 95583 62840</a></li>
              <li><a href="mailto:shahnawazbheda@gmail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
              shahnawazbheda@gmail.com</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Navigation</h6>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About Us</a></li>  
              @if(Auth::guard('web')->check())
              <li><a href="/my-donations">My Donations</a></li>
              <li><a href="/profile">My Profile</a></li>
              @endif
              <li><a href="/contact">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Useful Links</h6>
            <ul>
            <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
              <li><a href="/donate">Donate an Organ</a></li>
              @if(Auth::guard('web')->check())
              <li><a href="/donations">Request an Organ</a></li>
              @endif
            </ul>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Subscribe to our Newsletter </h6>
            <p>Enter your email and receive the latest news, updates and special offers from us.</p>

            <form action="#" class="subscribe" method="post">
              <input type="email" name="email" placeholder="Your Email Address" required="">
              <button class="btn btn-style btn-primary w-100 mt-3">Subscibe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //footer -->

  <!-- copyright -->
  <section class="w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© <script>document.write(new Date().getFullYear());</script> Organ Donation Laravel Project. Design by <a
            href="#" target="_blank">
            Shahnawaz Bheda</a></p>

        <div class="col-lg-4 main-social-footer-29">
          <a href="https://www.facebook.com/shahnawaz.bheda" class="facebook"><span class="fa fa-facebook"></span></a>
          <a href="https://twitter.com/BhedaShahnawaz" class="twitter"><span class="fa fa-twitter"></span></a>
          <a href="https://www.instagram.com/i_nawaz_khatri/" class="instagram"><span class="fa fa-instagram"></span></a>
          <a href="https://in.linkedin.com/in/shahnawaz-bheda-7771141a3" class="linkedin"><span class="fa fa-linkedin"></span></a>
        </div>

      </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
  <!--//footer-->
  <!-- Template JavaScript -->
  <script src="{{url('clientside/assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('clientside/assets/js/theme-change.js')}}"></script>
  <script src="{{url('clientside/assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('clientside/assets/js/jquery.countup.js')}}"></script>
  <script>
    $('.counter').countUp();
  </script>

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->


  <script src="{{url('clientside/assets/js/bootstrap.min.js')}}"></script>

</body>

</html>