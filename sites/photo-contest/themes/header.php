<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php if ( ! empty($opengraph)) : ?>
    <?php foreach($opengraph as $name => $value) : ?>
      <meta property="og:<?php echo $name; ?>" content="<?php echo $value; ?>">
    <?php endforeach; ?>
  <?php endif; ?>
  
  <meta name="title" content="<?php echo $title; ?>">
  <meta name="description" content="<?php echo $site_description; ?>">
  
  <meta name="Rating" content="General">
  <!--[if IE]>
  <meta name="MSSmartTagsPreventParsing" content="true">
  <meta http-equiv="imagetoolbar" content="no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <script src="<?php echo THEMEURL; ?>assets/js/html5.js"></script>
  <![endif]-->
    
  <link rel="shortcut icon" type="image/ico" href="<?php echo THEMEURL; ?>assets/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="screen,projection" href="<?php echo THEMEURL; ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" media="all" href="https://www.mozilla.org/tabzilla/media/css/tabzilla.css">
  <link rel="stylesheet" type="text/css" media="print" href="<?php echo THEMEURL; ?>assets/css/print.css"> 
  <!--[if lte IE 7]><link rel="stylesheet" type="text/css" media="all" href="<?php echo THEMEURL; ?>assets/css/ie7.css"><![endif]-->
  
  <title><?php echo $title; ?></title>
</head>
<body>
  <div id="page">
    <div class="wrap">
      <nav id="nav-access">
        <ul role="navigation">
          <li>
            <a tabindex="1" href="#content-main">Skip to main content</a>
          </li>
          <li>
            <a tabindex="2" href="#content-sub">Skip to sidebar</a>
          </li>
          <li>
            <a tabindex="3" href="#search">Skip to blog search</a>
          </li>
        </ul>
      </nav>
      
      <header id="masthead" role="banner" class="image">
        <hgroup>
          <h1 id="site-title"><?php echo $title; ?>
          <h2 id="site-description"><?php echo $description; ?></h2>
        </hgroup>
        <a href="http://www.mozilla.org/" id="tabzilla">Mozilla</a>
      </header><!-- #masthead -->
      
      <nav id="nav-primary">
        <ul class="menu">
          <?php foreach($menus as $name => $link): ?>
            <li>
              <a href="<?php echo BASEURL . $link; ?>"><?php echo $name; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
      
      <main id="content">
      