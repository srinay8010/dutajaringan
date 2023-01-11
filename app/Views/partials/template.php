<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('./styles/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/jquery.mCustomScrollbar.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/responsive.css'); ?>">

    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />

    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!-- Title -->
    <title>Duta Jaringan Indonesia</title>
  </head>

  <body>
    <?= $this->include('partials/loader'); ?>
    <?= $this->include('partials/sidebar'); ?>
    <?= $this->include('partials/header'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('partials/footer'); ?>

    <div class="overlay"></div>

    <!-- Javascript files-->
    <script src="<?= base_url('./js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('./js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('./js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('./js/jquery-3.0.0.min.js'); ?>"></script>
    <script src="<?= base_url('./js/owl.carousel.js'); ?>"></script>
    <script src="<?= base_url('./js/owl.carousel.min.js'); ?>"></script>
    <!-- sidebar -->
    <script src="<?= base_url('./js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?= base_url('./js/custom.js'); ?>"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      $("#sidebar").mCustomScrollbar({
        theme: "minimal"
      });

      $('#dismiss, .overlay').on('click', function() {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
      });

      $('#sidebarCollapse').on('click', function() {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
    </script>

    <script>
    $(document).ready(function() {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });

      $(".zoom").hover(function() {

        $(this).addClass('transition');
      }, function() {

        $(this).removeClass('transition');
      });
    });
    </script>

    <script>
    $('.owl-carousel').owlCarousel({
      items: 4,
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
      margin: 10,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
    </script>

    <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: {
          lat: -6.2508198,
          lng: 106.9780609
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: -6.2508198,
          lng: 106.9780609
        },
        map: map,
        icon: image
      });
    }
    </script>

    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->

    <script>
    var url = '<?= base_url('./js/shopifyWidget.js'); ?>';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
      "enabled": true,
      "chatButtonSetting": {
        "backgroundColor": "#4dc247",
        "ctaText": "",
        "borderRadius": "25",
        "marginLeft": "0",
        "marginBottom": "50",
        "marginRight": "50",
        "position": "right"
      },
      "brandSetting": {
        "brandName": "PT DUTA JARINGAN INDONESIA",
        "brandSubTitle": "Typically replies within a day",
        "brandImg": "<?= base_url('./images/logo.png'); ?>",
        "welcomeText": "Hi there!\nHow can I help you?",
        "messageText": "Hello, I have a question about your products and services",
        "backgroundColor": "#0a5f54",
        "ctaText": "Start Chat",
        "borderRadius": "25",
        "autoShow": false,
        "phoneNumber": "62383499425"
      }
    };
    s.onload = function() {
      CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
    </script>
  </body>

</html>