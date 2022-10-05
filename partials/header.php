<?php
  $links = [
    'Home' => $path,
    'Services' => $path . 'services/',
    'Join the Team' => $path . 'employment/',
    'Contact' => $path . 'contact/'
  ];
?>

<!-- Preloader -->
<div class="preloader"></div>

<!--Header Span-->
<div class="header-span"></div>

<!-- Main Header-->
<header class="main-header">
  <!-- Main Box -->
  <div class="main-box">
    <div class="outer-container clearfix">
      <!--Logo Box-->
      <div class="logo-box">
        <div class="logo">
          <a href="<?= $path ?>"><img src="<?= $path ?>images/niblock-logo.png" alt="Niblock - Civil Site Development" /></a>
        </div>
      </div>

      <!--Nav Outer-->
      <div class="nav-outer clearfix">
        <!-- Main Menu -->
        <nav class="main-menu">
          <div class="navbar-header">
            <!-- Toggle Button -->
            <button
              type="button"
              class="navbar-toggle"
              data-toggle="collapse"
              data-target=".navbar-collapse"
            >
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="navbar-collapse collapse clearfix">
            <ul class="navigation clearfix">
              <?php foreach( $links as $key => $value ) {                
                $is_current = $_SERVER['REQUEST_URI'] ===  $value ? 'current' : '';
                echo '<li class="' . $is_current . '">
                        <a href="' . $value . '">' . $key . '</a>                
                      </li>';
              } ?>                      
            </ul>
          </div>
        </nav>
        <!-- Main Menu End-->
        
      </div>
      <!--Nav Outer End-->
    </div>
  </div>
</header>
<!--End Main Header -->

<!--Left Fixed Info Bar-->
<div class="left-info-bar">
  <div class="number">CALL US: 574-848-4437</div>
  <ul class="social-icon-one">
    <li>
      <a href="#"><span class="fa fa-facebook"></span></a>
    </li>
    <li>
      <a href="#"><span class="fa fa-linkedin"></span></a>
    </li>
    <li>
      <a href="#"><span class="fa fa-twitter"></span></a>
    </li>
    <li>
      <a href="#"><span class="fa fa-google-plus"></span></a>
    </li>
  </ul>
</div>