<footer>
    <!-- footer-28 block -->
    <section class="w3l-footer-28-main">
        <div class="footer-28 section-gap">
            <div class="wrapper">
                <div class="d-grid grid-col-4 footer-top-28">
                    <div class="footer-list-28">
                        <h6 class="footer-title-28">Menu Links</h6>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="#portfolio.html">Portfolio</a></li>
                            <li><a href="#team.html">Team</a></li>
                        </ul>
                    </div>
                    <div class="footer-list-28">
                        <ul>
                            <h6 class="footer-title-28">Website Links</h6>
                            <li><a href="#blog.html">Blog</a></li>
                            <li><a href="#blog-single.html">Blog Details</a></li>
                            <li><a href="#email-template.html">Email Template</a></li>
                            <li><a href="#timeline.html">Timeline</a></li>
                            <li><a href="#error.html">404</a></li>
                            <li><a href="#coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </div>
                    <div class="footer-list-28">
                        <ul>
                            <h6 class="footer-title-28">Shopping</h6>
                            <li><a href="#ecommerce.html">Ecommerce</a></li>
                            <li><a href="#ecommerce-single.html">Ecommerce Single</a></li>
                            <li><a href="#ecommerce-cart.html">Ecommerce Cart</a></li>
                        </ul>
                    </div>
                    <div class="footer-list-28">
                        <ul>
                            <h6 class="footer-title-28">Account</h6>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#appointment.html">Book Appointment</a></li>
                            <li><a href="#login.html">Login</a></li>
                            <li><a href="#signup.html">Register</a></li>
                        </ul>
                    </div>
                </div>
                <div class="midd-footer-28 align-center">
                    <div class="main-social-footer-28">
                        <a class="facebook" href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        <a class="twitter" href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        <a class="instagram" href="#instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                        <a class="google" href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        <a class="pinterest" href="#pinterest"><span class="fa fa-pinterest-p" aria-hidden="true"></span></a>
                    </div>
                    <p class="copy-footer-28">&copy; 2019 Clinical. All rights reserved. Design by <a
                                href="https://w3layouts.com">W3layouts</a></p>
                </div>
            </div>
        </div>
        <!-- //footer-28 block -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-arrow-up" aria-hidden="true"></span>
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
</footer>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/multislider.js"></script>
<script>
  $('#basicSlider').multislider({
    continuous: true,
    duration: 2000
  });
  $('#mixedSlider').multislider({
    duration: 800,
    interval: 3000
  });
</script>
