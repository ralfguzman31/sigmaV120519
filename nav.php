<?php
if (!isset($_GET['page'])) {
  echo '<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">';
} else {
  echo '<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">';
}
?>
<!-- <div class="top-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
          </div>
          <div class="col-sm-6 col-md-6">
            <p class="bold text-right">Call us now +62 008 65 001</p>
          </div>
        </div>
      </div>
    </div> -->
<div class="container navigation">

  <div class="navbar-header page-scroll">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
      <i class="fa fa-bars"></i>
    </button>
    <a class="navbar-brand" href="index.php">
      <img src="img/logo.png" alt="" />
    </a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
    <ul class="nav navbar-nav">
      <?php
      if (!isset($_GET['page'])) {
        echo '<li class="active"><a href="#intro">Home</a></li>';
      } else {
        echo '<li><a href="index.php">Home</a></li>';
      }
      ?>


      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <?php
          if (isset($_GET['page'])) {
            echo '<li><a href="index.php#about">About</a></li>';
            echo '<li><a href="index.php#whatwedo">What We Do</a></li>';
          } else {
            echo '<li><a href="#about">About</a></li>';
            echo '<li><a href="#whatwedo">What We Do</a></li>';
          }
          ?>

        </ul>
      </li>

      <!-- <li class="dropdown"> -->

      <!-- <a href="#service" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a> -->
      <?php
      if (isset($_GET['page'])) {
        if (strpos($_GET['page'], 'service') !== false) {
          echo '<li class="active"><a class="active" href="index.php#service">Services</a></li>';
        } else {
          echo '<li><a class="active" href="index.php#service">Services</a></li>';
        }
        // echo '<li class="active"><a class="active" href="index.php#service">Services</a></li>';
        echo '<li><a href="index.php#doctor">Providers</a></li>';
        echo  '<li><a href="index.php#facilities">Location</a></li>';
      } else {
        echo '<li class=""><a class="active" href="#service">Services</a></li>';
        echo '<li><a href="#doctor">Providers</a></li>';
        echo  '<li><a href="#facilities">Location</a></li>';
      }
      ?>
      <!-- <a href="#callaction">Services</a> -->
      <!-- <ul class="dropdown-menu">
                  <li><a href="#service">Urgent Care</a></li>
                  <li><a href="#service">Preventative Services</a></li>
                  <li><a href="#service">Occupational Health</a></li>
                  <li><a href="#service">Immunizations</a></li>
                  <li><a href="#service">IV Infusions & Hydration</a></li>
              </ul> -->

      <!-- <li><a href="#pricing"></a></li> -->


      <?php
      if (isset($_GET['page']) && (strpos($_GET['page'], 'pr') !== false)) {
        echo '<li class="dropdown"> <a href="" class="dropdown-toggle a-active" data-toggle="dropdown">Patient Resources<b class="caret"></b></a>';
      } else {
        echo '<li class="dropdown"> <a href="" class="dropdown-toggle" data-toggle="dropdown">Patient Resources<b class="caret"></b></a>';
      }
      ?>
      <ul class="dropdown-menu">
        <li><a href="index.php?page=pr-faq">FAQ</a></li>
        <li><a href="index.php?page=pr-whenToUse">When to use Urgent Care</a></li>
        <li><a href="index.php?page=pr-selfPay">Self Pay-Prices</a></li>
        <li><a href="index.php?page=pr-payBills">Pay your Bill</a></li>
      </ul>
      </li>

      <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="index.html">Home CTA</a></li>
              <li><a href="#appointment">Home Form</a></li>
            </ul>
          </li> -->
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>