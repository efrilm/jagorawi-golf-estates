    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/mousewheel.min.js"></script>
    <script src="<?= base_url() ?>assets/js/lightgallery-all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.isotope.min.js"></script>
    <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/js/easypiechart.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url() ?>assets/js/vegas.js"></script>
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>assets/js/royal_preloader.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="<?= base_url() ?>assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="<?= base_url() ?>assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="<?= base_url() ?>assets/js/rev-script-2.js"></script>

    <!--  -->
    <script src="<?= base_url() ?>assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script>
      window.jQuery = window.$ = jQuery;
      (function($) {
        "use strict";
        //Preloader
        Royal_Preloader.config({
          mode: "progress",
          background: "#1a1a1a",
        });
      })(jQuery);
    </script>
    <script>
      (function($) {
        "use strict";
        jQuery(".player").mb_YTPlayer();
      })(jQuery);
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-231256176-1">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-231256176-1');
    </script>

    <!-- Slick -->
