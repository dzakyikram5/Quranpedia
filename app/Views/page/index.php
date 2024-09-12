<!DOCTYPE html>
<html lang="en">
<head>
    <title>QURANPEDIA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="og:site_name" content="" />
    <meta name="og:title" content="" />

    <meta name="og:url" content="#" />
    <meta name="og:type" content="website" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="<?php echo base_url();?>/assets/images/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphone5_splash.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphone6_splash.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphoneplus_splash.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphonex_splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphonexr_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/iphonexsmax_splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/ipadpro3_splash.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="<?php echo base_url();?>/images/splashscreens/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link rel="preload" as="font" href="<?php echo base_url();?>/assets/fonts/IndoPak.woff2" type="font/woff2" crossorigin />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/stylex.css" />
    <link rel="dns-prefetch" href="#" />
    <link rel="manifest" href="<?php echo base_url();?>/assets/manifest.json" />
    <link href="<?php echo base_url();?>/assets/css/indexx.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/images/favicon.ico" />
  </head>

  <nav class="navbar navbar-expand-lg navbar-dark bg-gold fixed-top">
      <div class="container">
        <a class="navbar-brand">
          QURANPEDIA </a
        ><button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        </div>
      </div>
    </nav>
<br>

<body class="homepage">
    <?php foreach ($surah as $q) : ?>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="last-read">
            <a href="#" class="last-read-link"> Last Read: <span class="last-read-surah"></span>, Ayah <span class="last-read-ayah"></span> &rarr; </a>
          </div>
        </div>
      </div>
      <div class="index-main-surah-list">
          <div class="table trio">
            <a href="<?= base_url('/page/' . $q['index']); ?>"
              ><div class="table-row">
                <div>
                  <span class="index-surah-no"><?= $q['index'];  ?></span>
                  <div class="main">
                    <span class="title"><?= $q['name_indonesia'];  ?> <span class="index-surahname-ar"><?= $q['name_arabic'];  ?></span></span
                    ><span class="subtitle"><?= $q['type'];  ?> <span style="float: right"><?= $q['ayas'];  ?> Verses</span></span>
                  </div>
                </div>
              </div></a>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </body>
  <script type="text/javascript">
    var surah_number, surah_ayahs;
  </script>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/main.js"></script>
  <script type="text/javascript">
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function () {
        navigator.serviceWorker.register('sw.js');
      });
    }
  </script>
</html>