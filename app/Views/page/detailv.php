<!DOCTYPE html>
<html lang="en">
<head>
<title>Quranpedia - Akar Kata</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="og:site_name" content="Word By Word English Translation And Transliteration" />
    <meta name="og:title" content="" />
    <meta name="og:image" content="<?php echo base_url();?>/assets/images/banner.png" />
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
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css" />
    <link rel="dns-prefetch" href="#" />
    <link rel="manifest" href="<?php echo base_url();?>/assets/manifest.json" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/images/favicon.ico" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-gold fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          Quranpedia - Akar Kata </a
        ><button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        </div>
      </div>
    </nav>
    <span id="modal-about-content"></span>
    <br>
    <!-- <h1>Detail View</h1> -->
    <div class="container">
    <!-- <div class="row full-surah" style="padding: 50px 0px 50px 0px"> -->
       <br>
    <br>


    <div class="row">
    <div class="col-6 col-sm-3">
        <h3>Kata yang dipilih:</h3>
    </div>
    <div class="col-6 col-sm-3" style="font-family: 'Uthmani'; font-size: 30px;">
        <?php echo $selectedText; ?>
    </div>

    <!-- Force next columns to break to new line at md breakpoint and up -->
    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-3">
        <h3>Akar Kata:</h3>
    </div>
    <?php if ($matchedRootWord): ?>
        <div class="col-6 col-sm-3" style="font-family: 'Uthmani'; font-size: 30px;">
            <?php echo $matchedRootWord; ?>
        </div>
    <?php else: ?>
        <h5>Kata "<?php echo $selectedText; ?>" tidak memiliki Akar kata</h5>
    <?php endif; ?>
</div>

<br>

<?php if (!empty($matchedVerses)): ?>
    <h3>Ayat-ayat yang mengandung akar kata yang sama:</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Surah</th>
                <th scope="col">Ayat</th>
                <th scope="col" style="text-align: center;">Ayat-ayat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matchedVerses as $verse): ?>
                <tr>
                    <td style="text-align: right; vertical-align: middle; font-weight: bold;">
                        <?php echo $verse['surat']; ?>
                    </td>
                    <td style="text-align: left; vertical-align: middle; font-weight: bold;">
                        <?php echo $verse['ayat']; ?>
                    </td>
                    <td style="text-align: right; font-family: 'Uthmani';">
                        <h5 style="line-height: 2.0; font-size: 30px;">
                            <?php echo highlightText($verse['text'], $matchedWords); ?>
                        </h5>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <h5>"<?php echo $selectedText; ?>" tidak memiliki Akar kata</h5>
<?php endif; ?>

<?php
function highlightText($text, $matchedWords) {
    foreach ($matchedWords as $word) {
        $text = str_ireplace($word, '<span style="color: red;">' . $word . '</span>', $text);
    }
    return $text;
}
?>







        
      
      
      </div>
        </div>
    <!-- </div> -->
    <script async src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
