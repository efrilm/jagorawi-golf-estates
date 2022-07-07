<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <meta property="og:site_name" content="Varana">
  <meta property="og:title" content="Varana">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Varana | Perumahan 1 Miliaran">
  <meta property="og:image" content="<?= base_url() ?>assets/images/135_126.jpg">

  <meta name="author" content="Efril.">
  <meta name="description" content="Varana | Smart Home & Luxury Home ">
  <meta name="keywords" content="Varana, Varana By Jge, Varana by Jagorawi Golf Estate, Smart Home, Perumahan Smart Home, Perumahan, Perumahan di bogor, Perumahan di Jabodetabek , Perumahan di cibinong, Perumahan di Citeureup, Perumahan di jakarta, perumahan di depok, Perumahan di jakarta selatan, Perumahan Murah, Perumahan 1 milyaran, perumahan asri, perumahan golf, perumahan terbaik, perumahan paling murah">

  <!-- FAVICON FILES -->
  <link href="<?= base_url() ?>assets/images/varana/varana.png" rel="shortcut icon">

  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vegas.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/lightgallery.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/woocommerce.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/royal-preload.css" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.mb.YTPlayer.min.css" type="text/css">

  <style>
    .float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 100px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .my-float {
      margin-top: 16px;

    }
  </style>

  <!-- REVOLUTION SLIDER CSS -->
  <!-- <link
      rel="stylesheet"
      type="text/css"
      href="assets/plugins/revolution/revolution/css/settings.css"
    /> -->
  <!-- REVOLUTION NAVIGATION STYLE -->
  <!-- <link
      rel="stylesheet"
      type="text/css"
      href="assets/plugins/revolution/revolution/css/navigation.css"
    /> -->
</head>

<body class="bg-dark-theratio">
  <div id="royal_preloader"></div>
  <a href="<?= base_url('whatsapp') ?>" class="float" target="_blank">
    <i class="fas fa-phone my-float"></i>
  </a>
  <div id="page" class="site">

    <?php
    $this->load->view('includes/navbar.php');
    ?>

    <?=
    $contents;
    ?>

    <?php $this->load->view('includes/footer.php'); ?>

  </div>
  <!-- #page -->
  <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>

  <?php
  $this->load->view('includes/script.php');
  ?>

</body>

</html>