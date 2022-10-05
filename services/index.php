<?php require '../partials/constants.php'; ?>
<?php 
  $title = 'Earthwork, Asphalt and Concrete Installation'; 
  $description = 'Major industrial projects, commercial, retail, churches and more - we do earthwork, utility installation and paving in Indiana and Michigan.';
?>
<?php require '../partials/head.php'; ?>
  <body>
    <div class="page-wrapper">
      <?php require '../partials/header.php'; ?>

      <!--WE Do Section-->
      <section
        class="we-do-section"
      >
        <div class="auto-container">
          <!--Sec Title Two-->
          <div class="sec-title-two">
            <h2>Earthwork. Utilities. Paving.</h2>
          </div>
          <div class="row clearfix">
            <!--Title Column-->
            <div class="title-column col-md-12 col-sm-12 col-xs-12">
              <div class="inner-column">                
                <div class="text">
                  We’re highly experienced handling all aspects of civil projects including earthwork, utility installation and finished flatwork. Whether major industrial projects, commercial, retail, churches or residential developments, we can handle it.
                </div>

                <ul class="list-style-three">
                  <li>Subdivision development</li>
                  <li>Industrial and manufacturing facilities</li>
                  <li>Highway and road resurfacing and repair</li>
                  <li>Parking lot installation, resurfacing and repair</li>
                  <li>Storm sewer installation and repair</li>
                  <li>Drainage, retention areas, recreational ponds</li>
                  <li>And more</li>
                </ul>
                
              </div>
            </div>            
          </div>
        </div>
      </section>
      <!--End WE Do Section-->

      <!--Commitment Section-->
      <section class="commitment-section">
        <div class="outer-container clearfix">
          <!--Image Column-->
          <div
            class="image-column"
            style="background-image: url(<?= $path ?>images/resource/svc-earthwork.webp)"
          >
            <div class="image-box">
              <img src="<?= $path ?>images/resource/svc-earthwork.webp" alt="Site Prep & Earthwork" />
            </div>
          </div>
          <!--Content Column-->
          <div class="content-column">
            <div class="inner-column">
              <div class="content">
                <h2>Site Prep & Earthwork</h2>                
                <div class="text">
                  A successful project requires proper site prep. It’s the very heart of what we do. We have the equipment and personnel for massive excavation and utilize GPS enabled technology for precision grading with the tightest of tolerances.
                </div>                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Commitment Section-->

      <!--Commitment Section-->
      <section class="commitment-section">
        <div class="outer-container clearfix">
          <!--Image Column-->
          <div
            class="image-column"
            style="background-image: url(<?= $path ?>images/resource/svc-utilities.webp)"
          >
            <div class="image-box">
              <img src="<?= $path ?>images/resource/svc-utilities.webp" alt="Underground Utilities" />
            </div>
          </div>
          <!--Content Column-->
          <div class="content-column">
            <div class="inner-column">
              <div class="content">
                <h2>Underground Utilities</h2>                
                <div class="text">
                  From small projects to the largest structures and developments, we install all manner of underground utilities. When appropriate, with our directional drilling capabilities can make quick work of difficult installations while minimizing landscape disruption and repair.
                </div>
                <div class="row clearfix">
                  <div class="list-column col-md-6 col-sm-6 col-xs-12">
                    <ul class="list-style-two">
                      <li>Water lines</li>
                      <li>Storm sewers</li>
                    </ul>
                  </div>
                  <div class="list-column col-md-6 col-sm-6 col-xs-12">
                    <ul class="list-style-two">
                      <li>Sanitary sewers</li>
                      <li>Utility lines</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Commitment Section-->

      <!--Commitment Section-->
      <section class="commitment-section">
        <div class="outer-container clearfix">
          <!--Image Column-->
          <div
            class="image-column"
            style="background-image: url(<?= $path ?>images/resource/svc-paving.webp)"
          >
            <div class="image-box">
              <img src="<?= $path ?>images/resource/svc-paving.webp" alt="Asphalt Paving & Concrete Flatwork" />
            </div>
          </div>
          <!--Content Column-->
          <div class="content-column">
            <div class="inner-column">
              <div class="content">
                <h2>Asphalt Paving & Concrete Flatwork</h2>                
                <div class="text">
                  When it comes to paving, you won’t find a more experienced contractor committed to long-lasting quality. With plants in Kimmel and Bristol, Indiana we can efficiently reach many job sites. We handle parking lots, drives, development roads and more. From the prep work to finished curbs, sidewalks and approaches, we’ve got you covered.
                </div>                
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Commitment Section-->

      <?php require '../partials/cta.php'; ?>
      <?php require '../partials/footer.php'; ?>
      
    </div>
    <!--End pagewrapper-->

    <?php require '../partials/scripts.php'; ?>
    
  </body>
</html>
