<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>lic home page</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
	<?= link_tag("assets/mdb/css/bootstrap.min.css") ?>
  <?= link_tag("assets/mdb/css/mdb.min.css") ?>
			<?= link_tag("assets/mdb/css/style.min.css") ?>
  <?= link_tag("assets/mdb/css/mdb.lite.css") ?>
  <?= link_tag("assets/mdb/css/nmy.css") ?>
  <?= link_tag("assets/gallery/style.css") ?>
  <?= link_tag("assets/gallery/lightbox.min.css") ?>
  <script type="text/javascript" src="<?= base_url('assets/gallery/lightbox-plus-jquery.min.js') ?>"></script>
 <?= link_tag("") ?> 
  <!-- Your custom styles (optional) -->
  <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet" />
<script
  src="https://code.jquery.com/ "
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  
  <?= link_tag("assets/gallery/popup-lightbox.css") ?>
<script type="text/javascript" src="<?= base_url('assets/gallery/jquery.popup.lightbox.js') ?>"></script>
      <script>
         $(document).ready(function(){

         $(".img-container").popupLightbox({
          width: 600,
      height: 450
         });


         });
      </script>
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

  </style>
</head>

<body > 
  

   
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="background-color:#0091ea;  ">
    <div class="container">
         
      <!-- Brand       -->
      <div class="col-lg-4">
      <a class="navbar-brand animated bounceIn" href="<?php echo site_url('users/home') ?>"  id="anil">
        <strong style=" font-family: 'Black Ops One', cursive;text-decoration: underline;
                  font-size: 28px;" id="anilfont" class="" >Anil paliwal</strong>
       </a>
  
       


      <!-- Collapse -->
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="float: right">
        <span class="navbar-toggler-icon"></span>
      </button>    
  </div>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent"  class="col-lg-8">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('users/home') ?>"  id="nav_heading"><label id="font">Home</label> </a>

          </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('users/about_us') ?>"  id="nav_heading"><label id="font">about&nbspus</label> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('users/blog') ?>"  id="nav_heading"><label id="font">plans</label> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('users/testimonial') ?>"  id="nav_heading"><label id="font">Testimonial</label></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('users/gallery') ?>" id="nav_heading"><label id="font">Gallery</label></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('users/contact_us') ?>"  id="nav_heading"><label id="font">Contact&nbspus</label></a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link" >
              <i class="fab fa-facebook-square" style="    font-size: 20px;
    margin-top: 3px;" ></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" >
              <i class="fab fa-twitter"  id="font"></i>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo site_url('LoginController/login') ?>" class="nav-link"  id="nav_heading" ><label id="font" >log&nbspin</label>
                         </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
