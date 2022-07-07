<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; NF RentCar &mdash; Web</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/assets/css/components.css">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <nav class="navbar bg-primary navbar-expand-lg main-navbar">
          <div class="container">
        <a href="<?= base_url('home') ?>" class="navbar-brand sidebar-gone-hide">NF RentCar</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav">
          <ul class="navbar-nav flex-row">

            <li class="nav-item"><a href="<?= base_url('auth/login'); ?>" class="nav-link btn btn-secondary btn-lg font-weight-bold text-dark"><i class="fas fa-user-alt"></i>
             Log In </a></li>
          </ul>
        </ul>
        </div>
      </nav>


      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
          <li class="nav-item">
              <a href="<?= base_url('home')?>" class="nav-link"><i class="fas fa-home"></i><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/dashboard') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('ListMobil') ?>" class="nav-link"><i class="far fa-clone"></i><span>List Mobil</span></a>
            </li>
            </ul>
        </div>
      </nav>