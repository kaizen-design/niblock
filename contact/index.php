<?php require '../partials/constants.php'; ?>
<?php 
  $title = 'Contact Niblock - Bristol, Indiana'; 
  $description = 'We’d love to discuss your project to see how we might be able to help.';
?>
<?php require '../partials/head.php'; ?>
  <body>
    <div class="page-wrapper">
      <?php require '../partials/header.php'; ?>

      <!--Contact Section-->
      <section class="contact-section">
        <div class="auto-container">
          <div class="sec-title-two">
            <h2>Let’s Talk About Your Project</h2>
          </div>
          <div class="row clearfix">
            <!--Form Column-->
            <div class="form-column col-md-7 col-sm-12 col-xs-12">
              <div class="inner-column">
                <div class="text">
                  We’d love to discuss your project to see how we might be able to help.
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                  <div class="required">
                    Fields marked with an * are required
                  </div>
                  <!--Contact Form-->
                  <form method="post" action="<?= $path ?>sendemail.php" id="contact-form">
                    <div class="form-group">
                      <label class="field-label">Name *</label>
                      <input type="text" name="name" placeholder="" required />
                    </div>

                    <div class="form-group">
                      <label class="field-label">Email *</label>
                      <input
                        type="email"
                        name="email"
                        placeholder=""
                        required
                      />
                    </div>

                    <div class="form-group">
                      <label class="field-label">Phone *</label>
                      <input
                        type="tel"
                        name="phone"
                        placeholder=""
                        required
                      />
                    </div>

                    <div class="form-group">
                      <label class="field-label">Message *</label>
                      <textarea name="message" placeholder=""></textarea>
                    </div>

                    <div class="form-group">
                      <button
                        class="theme-btn btn-style-two"
                        type="submit"
                        name="submit-form"
                      >
                        Submit now
                      </button>
                    </div>
                  </form>
                </div>
                <!--End Contact Form -->
              </div>
            </div>

            <!--Info Column-->
            <div class="info-column col-md-5 col-sm-12 col-xs-12">
              <div class="inner-column">
                <ul>
                  <li>
                    <span>Address:</span>
                    906 Maple St,<br />Bristol, IN 46507<br />
                    <a href="https://www.google.com/maps/place/906+Maple+St,+Bristol,+IN+46507/@41.7132247,-85.8237335,17z/data=!4m5!3m4!1s0x8816e5ba40de8979:0x199bc9a3a49be54a!8m2!3d41.7132207!4d-85.8215448" target="_blank">Directions</a>
                  </li>
                  <li><span>Phone:</span><a href="tel:574-848-4437">574-848-4437</a></li>
                  <li><span>Email:</span><a href="mailto:contact@niblockexc.com">contact@niblockexc.com</a></li>
                  <li>
                    <span>Office Hours:</span>
                    8 am to 5 pm Monday through Friday
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Contact Section-->
      
      <?php require '../partials/footer.php'; ?>
      
    </div>
    <!--End pagewrapper-->

    <?php require '../partials/scripts.php'; ?>
    
  </body>
</html>
