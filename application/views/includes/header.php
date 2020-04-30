<!DOCTYPE html>
<html>
<head>
  <title>pwa optimizer</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <?= link_tag('resources/css/materialize.css'); ?>
  <?= link_tag('resources/fonts/css/all.css'); ?>
  <?= link_tag('resources/css/custom.css'); ?>
  

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="#eceff1 blue-grey lighten-5">
  <section class="navbar-fixed">
    <nav class="#eceff1 blue-grey lighten-1">
      <div class="nav-wrapper container">
        <a href="<?= base_url('/') ?>" class="brand-logo"><i class="fa fa-rocket orange-text" aria-hidden="true"></i> PWA<b>Optimizer</b></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
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

    <ul class="sidenav" id="mobile-demo">
      <li><a href="sass.html"></a></li>
      <li><a href="sass.html">Website Development</a></li>
      <li><a href="badges.html">Software Development</a></li>
      <li><a href="collapsible.html">SEO</a></li>
      <li><a href="collapsible.html">Graphic Design (Only4web)</a></li>
      <button class="btn"><a href="mobile.html">Contact</a></button>
    </ul>
  </section>