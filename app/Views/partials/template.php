<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="duta jaringan, jaringan, web development, IT consultant">
    <meta name="description" content="Duta Jaringan bergerak di bidang teknologi, jaringan, jasa, dan perawatan properti kantor, hotel, dan rumah dengan didukung tenaga kerja yang profesional.">
    <meta name="author" content="Duta Jaringan Dev">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('/public/styles/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/public/styles/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/public/styles/responsive.css'); ?>">

    <!-- Favicon logo -->
    <link rel="icon" href="<?= base_url('/public/images/icon.png'); ?>" type="image/png" />

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
    <script src="<?= base_url('/public/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('/public/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('/public/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('/public/js/jquery-3.0.0.min.js'); ?>"></script>
    <script src="<?= base_url('/public/js/custom.js'); ?>"></script>

    <?= $this->renderSection('script'); ?>


    <script>
    var url = '<?= base_url('/public/js/shopifyWidget.js'); ?>';
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
        "brandImg": "<?= base_url('/public/images/logo.png'); ?>",
        "welcomeText": "Hi there!\nHow can I help you?",
        "messageText": "Hello, I have a question about your products and services",
        "backgroundColor": "#0a5f54",
        "ctaText": "Start Chat",
        "borderRadius": "25",
        "autoShow": false,
        "phoneNumber": "0895332908555"
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