<!DOCTYPE html>
<html lang="en">

<?php include_once('head.html') ?>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <div id="wrapper">

    <?php
    include_once('nav.php');

    if (!isset($_GET['page'])) {
      include('home.html');
    } else {
      switch ($_GET['page']) {
        case 'service-urgentcare':
          include('urgentcare.html');
          break;
        case 'service-injuries-illnesses':
          include('injuries-illnesses.html');
          break;
        case 'service-physicals':
          include('physicals.html');
          break;
        case 'service-xray':
          include('xray.html');
          break;
        case 'service-lab-testing':
          include('lab-testing.html');
          break;
        case 'pr-faq':
          include('pr-faq.html');
          break;
        case 'pr-whenToUse':
          include('pr-whenToUse.html');
          break;
        case 'pr-payBills':
          include('pr-payBills.html');
          break;
        case 'pr-selfPay':
          include('pr-selfPay.html');
		  break;
		   case 'service-preventative':
          include('preventative-services.html');
		  break;
		case 'service-infusions':
          include('infusions.html');
		  break;
		case 'service-immunizations':
          include('immunizations.html');
		  break;
		case 'service-occupational-health':
          include('occupational-health.html');
		  break;
      }
    }

    include_once('footer.html');
    ?>
  </div>
  <!-- <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a> -->
  <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>