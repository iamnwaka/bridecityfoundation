<!DOCTYPE html>
<html>
<?php include './includes/head.php' ?>
<body>
<!--head-->
<!--head-->
<!--header-->
<?php include './includes/nav.php' ?>
<!--//header-->
<!--contact-starts-->
<section class="w3l-form-41">
    <!-- /form-41-section -->
    <div class="form-41-mian section-gap">
        <div class="wrapper">
            <h3 class="cont-head">Get in touch with us</h3>
            <div class="d-grid align-form-map">
                <div class="form-inner-cont">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="form-input">
                            <label for="w3lName">Name*</label>
                            <input type="text" name="w3lName" placeholder="" required="" />
                        </div>
                        <div class="form-input">
                            <label for="w3lMessage">Message*</label>
                            <textarea placeholder="" name="w3lMessage" required=""></textarea>
                        </div>
                        <div class="form-input">
                            <label for="w3lSender">Email*</label>
                            <input type="email" name="w3lSender" placeholder="" required="" />
                        </div>
                        <div class="form-input">
                            <label class="container">
                                <p>Send me a copy</p>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <button type="submit" class="btn theme-button">Submit</button>

                    </form>
                </div>

                <div class="map">
                    <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7881.843609341887!2d7.560263!3d8.979343!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0506a01b393c1cc!2sBride%20City%20Cooperative!5e0!3m2!1sen!2sus!4v1575984587283!5m2!1sen!2sus"
                            frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact-end-->
<!--address-starts-->
<?php include './includes/footer.php' ?></body>
</html>
