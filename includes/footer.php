<footer>
    <!-- footer-28 block -->
    <section class="w3l-footer-28-main">
        <div class="footer-28 section-gap">
            <div class="wrapper">
                <div class="midd-footer-28 align-center">
                    <div class="main-social-footer-28">
                        <a class="facebook" href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        <a class="twitter" href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        <a class="instagram" href="#instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                    </div>
                    <p class="copy-footer-28">&copy; 2019 . All rights reserved. Design by <a
                                href="https://gitlab.com/nwokolawrence6">Smart Devs</a></p>
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
