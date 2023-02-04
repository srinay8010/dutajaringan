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
    <link rel="stylesheet" href="<?= base_url('./styles/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('./styles/responsive.css'); ?>">

    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />

    <!-- Title -->
    <title>Duta Jaringan Indonesia</title>
  </head>

  <body>
    <?= $this->include('partials/loader'); ?>
    <?= $this->include('partials/header'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('partials/footer'); ?>

    <div class="overlay"></div>

    <!-- Javascript files-->
    <script src="https://kit.fontawesome.com/a1cf9facd4.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('./js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('./js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('./js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('./js/jquery-3.0.0.min.js'); ?>"></script>
    <script src="<?= base_url('./js/owl.carousel.js'); ?>"></script>
    <script src="<?= base_url('./js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('./js/custom.js'); ?>"></script>

    <?= $this->renderSection('script'); ?>

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
  </body>

</html>