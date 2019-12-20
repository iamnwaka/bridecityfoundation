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
<div class="container mt-5">
          <div class="contact-top heading text-center">
                <h1>Contact us</h1>
          </div>
                <div class="map mt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7881.843609341887!2d7.560263!3d8.979343!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0506a01b393c1cc!2sBride%20City%20Cooperative!5e0!3m2!1sen!2sus!4v1575984587283!5m2!1sen!2sus"                        width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>

      <div class="container bg-light py-3 mt-5">
            <div class="contact-form head text-center mt-5 mb-5">
                    <h3>Contact Form</h3>
                    <p class="mt-2">If you would like to make an enquiry please send us a message. We look forward to hearing from you, in any regard.</p>
            </div>
            <form id="contact-form" method="post" action="contact.php" role="form">
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="form_name">Name *</label>
                                <input id="form_name" type="text" name="surname" class="form-control" placeholder="Please enter your name *" required="required" data-error="name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="form_phone">Phone</label>
                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
        
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="send a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-warning btn-send" value="Send message">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted"><strong>*</strong> These fields are required.</p>
                    </div>
                </div>
            </form>
        </div>
<!--contact-end-->
<!--address-starts-->
<?php include './includes/footer.php' ?></body>
</html>
