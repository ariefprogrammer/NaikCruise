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
            background-color: #e7e7e7;
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

        /*Facility Slider*/
          .facility-Slides {display: none}
          .facility-img {vertical-align: middle;}

          /* Slideshow container */
          .facility-slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }

          /* Next & previous buttons */
          .facility-prev, .facility-next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
          }

          /* Position the "next button" to the right */
          .facility-next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .facility-prev:hover, .facility-next:hover {
            background-color: rgba(0,0,0,0.8);
          }

          /* Caption text */
          .facility-text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* Number text (1/3 etc) */
          .facility-numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          /* The dots/bullets/indicators */
          .facility-dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .facility-active, .facility-dot:hover {
            background-color: #717171;
          }

          /* Fading animation */
          .facility-fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }


          /*===================================================================================================*/
          /*Cabins1*/
          .cabins-Slides {display: none}
          .cabins-img {vertical-align: middle;}

          /* Slideshow container */
          .cabins-slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }

          /* Next & previous buttons */
          .cabins-prev, .cabins-next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
          }

          /* Position the "next button" to the right */
          .cabins-next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }

          /* On hover, add a black background color with a little bit see-through */
          .cabins-prev:hover, .cabins-next:hover {
            background-color: rgba(0,0,0,0.8);
          }

          /* Caption text */
          .cabins-text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* Number text (1/3 etc) */
          .cabins-numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }

          /* The dots/bullets/indicators */
          .cabins-dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }

          .cabins-active, .cabins-dot:hover {
            background-color: #717171;
          }

          /* Fading animation */
          .cabins-fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          /*======================================================================================================================*/





          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
            .facility-prev, .facility-next,.facility-text {font-size: 11px}
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
          <a href="<?php echo site_url('howto/getticket')?>">Get a ticket</a>
          <a href="<?php echo site_url('howto/boardingday')?>">Boarding Day</a>
        </div>
      </div>
      <a href="<?php echo site_url('branches')?>" class="<?php echo $this->uri->segment(1)== 'branches'? 'active': ''?>">Branches</a>
      <a href="#">About</a>
      <a href="#">FAQ</a>
    </div>
    <!-- End Navbar -->
