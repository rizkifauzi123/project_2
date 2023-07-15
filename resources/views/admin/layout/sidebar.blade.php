<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('admin/assets/css/bootstrap.min.css' ) }}" rel="stylesheet" />
  <link href="{{ asset('admin/assets/css/paper-dashboard.css?v=2.0.1' ) }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('admin/assets/demo/demo.css' ) }}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{ url('dashboard') }}">
              <i class="nc-icon nc-atom"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{ url('dashboard/jenis_produk') }}">
              <i class="nc-icon nc-box"></i>
              <p>Jenis Produk</p>
            </a>
          </li>
          <li>
            <a href="{{ url('dashboard/produk') }}">
              <i class="nc-icon nc-box-2"></i>
              <p>Produk</p>
            </a>
          </li>
          <li>
            <a href="{{ url('dashboard/pesanan') }}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Pesanan</p>
            </a>
          </li>
          <li>
            <a href="{{ url('dashboard/supplier') }}">
              <i class="nc-icon nc-single-02"></i>
              <p>Supplier</p>
            </a>
          </li>
          <li>
            <a href="{{ url('dashboard/pembelian') }}">
              <i class="nc-icon nc-paper"></i>
              <p>Pembelian</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">