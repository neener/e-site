<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="<?= site()->url() ?>/assets/images/favicon.png">
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="<?= $site->title()->html() ?>"/>
  <meta property="og:locale" content="en_US"/>
  <meta property="og:url" content="http://erikaceruzzi.com/"/>
  <?php if($page->isHomePage()): ?>
    <title><?= $site->title()->html() ?></title>
  <?php else: ?>
    <title><?= $site->title()->html() ?> - <?= $page->title()->html() ?></title>
  <?php endif ?>
  <title><?= $site->title()->html() ?> - <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  
  <?= js('assets/js/jquery.js') ?>

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
  
  <?= css('/assets/css/index.css') ?>

  <style>
    body {
      background-image: url("<?= $site->files()->first()->url() ?>");
    }
  </style>

      <!-- ++++ Start of homepage easter egg. This loads the logo easter egg on the homepage. ++++ -->

      <!-- Gather the images from home.yml -->

      <!-- <?php foreach($site->images()->filterBy('filename', '*=', 'logo-') as $image): ?>
        <?php if($image->hide_from_sidebar() == '1'): ?>
        <?php else: ?>
          <?php $resultstr[] = '"'.$image->url().'"' ?>
        <?php endif ?>
      <?php endforeach ?>

      <script>
        $(function() {

          // Toggle easter egg when clicking on name
          $(".toggle-logo").click(function() {
            $('.logo').toggle();
          });

          // Create a new array of the images
          var images = [<?php echo implode(",",$resultstr); ?>];

          // Load random image from array when clicking logo
          $(".logo").click(function() {
            $(this).css({'background-image': 'url(' + images[Math.floor(Math.random() * images.length)] + ')'});
          });

        });
      </script> -->

      <!-- ++++ End of homepage easter egg. ++++ -->
  
</head>
<body>
