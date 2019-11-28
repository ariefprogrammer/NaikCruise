<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
      <!-- meta charec set -->
        <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
        <title>Naik Cruise</title>    
    <!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
    <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Google Font -->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS
    ================================================== -->
    <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo base_url('css3/font-awesome.min.css')?>">
    <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="<?php echo base_url('css3/bootstrap.min.css')?>">
    <!-- jquery.fancybox  -->
        <link rel="stylesheet" href="<?php echo base_url('css3/jquery.fancybox.css')?>">
    <!-- animate -->
        <link rel="stylesheet" href="<?php echo base_url('css3/animate.css')?>">
    <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url('css3/main.css')?>">
    <!-- media-queries -->
        <link rel="stylesheet" href="<?php echo base_url('css3/media-queries.css')?>">

        <link rel="stylesheet" href="<?php echo base_url('css/styles.css')?>">

    <!-- css dropdown ship -->
        <style type="text/css">
          .brands-dropbtn {
            background-color: #FFFFFF;
            color: black;
            border: 2px solid #FF9B2D;

          }

          .brands-dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
          }

          .brands-dropdown-content {
            background-color: #FFFFFF;
            color: black;
            display: none;
            text-align: left;
            position: absolute;
            min-width:300px;
            border-radius: 5px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }

          .brands-dropdown-content a {
            color: black;
            padding: 3%;
            text-decoration: none;
            display: block;
          }

          .brands-dropdown-content a:hover {background-color: #FF9B2D;border-radius: 5px;}

          .brands-dropdown:hover .brands-dropdown-content {
            display: block;
          }

          .brands-dropdown:hover .brands-dropbtn {
            background-color: #FF9B2D;
          }
        </style>
        <!-- Bootstrap css -->

    <!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url('js3/modernizr-2.6.2.min.js')?>"></script>

        <?php $this->load->view("_partials/function_ourships")?>

    </head>
  
    <body id="body">
  
    <!-- preloader -->
<!--     <div id="preloader">
      <img src="img3/preloader.gif" alt="Preloader">
    </div> -->
    <!-- end preloader -->
    
    <!-- Start navbar  -->
    <!-- <div class="my-navbar">
        <ul class="my-ul">
          <li class="my-li"><a class="<?php echo $this->uri->segment(1)== ''? 'active': ''?>" href="<?php echo site_url('')?>">Home</a></li>
          <li class="my-li"><a href="#">Plans</a></li>
          <li class="my-li"><a class="<?php echo $this->uri->segment(1)== 'products'? 'active': ''?>" href="<?php echo site_url('products')?>">Package</a></li>
          <li class="my-li"><a href="#">How to?</a></li>

          
          <li class="my-li"><a href="#">Contact</a></li>
          <li class="my-li"><a href="#">About</a></li>
          <li class="my-li"><a href="#">FAQ</a></li>
        </ul>
    </div> -->

    <div class="w3-navbar">
      <a href="<?php echo site_url('')?>" class="<?php echo $this->uri->segment(1)== ''? 'active': ''?>" >Home</a>
      <div class="w3-dropdown ">
        <button class="w3-dropbtn">Plans 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="w3-dropdown-content">
          <a href="<?php echo site_url('ourships')?>">Our ships</a>
          <a href="#">Destination</a>
        </div>
      </div>
      <a href="<?php echo site_url('products')?>" class="<?php echo $this->uri->segment(1)== 'products'? 'active': ''?>">Products</a>
      <div class="w3-dropdown">
        <button class="w3-dropbtn">How to? 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="w3-dropdown-content">
          <a href="#">Get a ticket</a>
          <a href="#">Boarding Day</a>
        </div>
      </div>
      <a href="#">Contact Us</a>
      <a href="#">About</a>
      <a href="#">FAQ</a>
    </div>
    <!-- End Navbar -->
