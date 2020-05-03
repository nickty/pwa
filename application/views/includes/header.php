<!DOCTYPE html>
<html>
<head>
  <title>PWA Optimizer | Web Development & Maintenance Service</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <?= link_tag('resources/css/materialize.css'); ?>
  <?= link_tag('resources/fonts/css/all.css'); ?>
  <?= link_tag('resources/css/custom.css'); ?>
  
<link rel="manifest" href="/manifest.json">
<link rel="apple-touch-icon" href="images/icons/icon-96x96.png">
<meta name="apple-mobile-web-app-status-bar" content="#aa7700">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('images/favicons/apple-icon-57x57.png'); ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('images/favicons/apple-icon-60x60.png'); ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('images/favicons/apple-icon-60x60.png'); ?>/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('images/favicons/apple-icon-76x76.png'); ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('images/favicons/apple-icon-114x114.png'); ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('images/favicons/apple-icon-120x120.png'); ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('images/favicons/apple-icon-144x144.png'); ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('images/favicons/apple-icon-152x152.png'); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('images/favicons/apple-icon-180x180.png'); ?>">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url('images/favicons/android-icon-192x192.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('images/favicons/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('images/favicons/favicon-96x96.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('images/favicons/favicon-16x16.png'); ?>">
  <link rel="manifest" href="images/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?= base_url('images/favicons/ms-icon-144x144.png'); ?>">
  <meta name="theme-color" content="#ffffff">
</head>

<body class="#eceff1 blue-grey lighten-5">
  <section class="navbar-fixed">
    <nav class="#eceff1 blue-grey lighten-1">
      <div class="nav-wrapper container">
        <a href="<?= base_url('/') ?>" class="brand-logo"><i class="fa fa-rocket orange-text" aria-hidden="true"></i> PWA<b>Optimizer</b></a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Core Services<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="<?= base_url('home/work/') ?>">Work</a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Other Services<i class="material-icons right">arrow_drop_down</i></a></li>
          <button class="btn"><a href="<?= base_url('home/contact'); ?>">Contact</a></button>
          
        </ul>

      </div>
    </nav>

    <!-- dropdown for other services -->
    <ul id="dropdown2" class="dropdown-content">
      <li><a href="<?= base_url('home/pwafromstratch/'); ?>">PWA From Scratch</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/migration_to_pwa/') ?>">Migration To PWA</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/pwa_optimize/') ?>">PWA Optimization</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/pwa_seo/') ?>">PWA SEO</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/pwa_maintenance/') ?>">PWA Maintenance</a></li>
    </ul>

    <!-- dropdown for other services -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="<?= base_url('home/web_design/') ?>">Website Design</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/web_development/') ?>">Website Development</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/soft_development/') ?>">Software Development</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/graphic_design') ?>">Graphic Design (Only4web)</a></li>
    </ul>

    
  </section>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/notification.jpg">
      </div>
      <a href="<?= base_url('/') ?>" class="brand-logo"><i class="fa fa-rocket orange-text" aria-hidden="true"></i> PWA<b>Optimizer</b></a>
      <a href="#name"><span class="white-text name">They can browse anywhere!</span></a>
      <a href="#email"><span class="white-text email">Don't miss any lead!</span></a>
    </div></li>
    <li><a class="subheader">Core Services</a></li>
    <ul>
      <li><a href="<?= base_url('home/pwafromstratch/'); ?>">PWA From Scratch</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/migration_to_pwa/') ?>">Migration To PWA</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/pwa_optimize/') ?>">PWA Optimization</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/pwa_seo/') ?>">PWA SEO</a></li>
      <li class="divider"></li>
      <li><a href="<?= base_url('home/pwa_maintenance/') ?>">PWA Maintenance</a></li>
    </ul>
  </li>

  <li><div class="divider"></div></li>
  <li><a href="<?= base_url('home/work/') ?>">Work</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Other Services</a></li>
  <ul>
    <li><a href="<?= base_url('home/web_design/') ?>">Website Design</a></li>
    <li class="divider"></li>
    <li><a href="<?= base_url('home/web_development/') ?>">Website Development</a></li>
    <li class="divider"></li>
    <li><a href="<?= base_url('home/soft_development/') ?>">Software Development</a></li>
    <li class="divider"></li>
    <li><a href="<?= base_url('home/graphic_design') ?>">Graphic Design (Only4web)</a></li>
  </ul>
  <li><a class="btn waves-effect" href="<?= base_url('home/contact'); ?>">Contact</a></li>
</ul>