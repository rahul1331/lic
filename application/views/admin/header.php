<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
 
 <?= link_tag("assets/mdb/css/mdb.min.css") ?>
      <?= link_tag("assets/mdb/css/style.min.css") ?>
  <?= link_tag("assets/mdb/css/bootstrap.min.css") ?>
  <?= link_tag("assets/mdb/css/sof_my.css") ?>
   <?= link_tag("assets/mdb/css/form.css") ?>
   <?= link_tag("assets/mdb/css/setting.css") ?>
   
  <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
   <?= link_tag("assets/mdb/css/jquery.dateselect.css") ?>
  
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

  </style>

</head>

<body ><!-- style="background-color: #e9ebee" -->
<div class="container" >

  <
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="background-color:#1976d2 ;"><!--  -->
    <div class="container">
         
      <!-- Brand -->
      <div class="col-lg-4">
      <a class="navbar-brand animated bounceIn" href="<?php echo site_url('admin/search_datas') ?>"  id="anil">
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
            <a class="nav-link" href="<?php echo site_url('admin/search_datas') ?>"  id="nav_heading"><label id="font">Home</label> </a>

          </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/all_user_show') ?>"  id="nav_heading"><label id="font">All&nbspUsers</label> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/new_form') ?>"  id="nav_heading"><label id="font">New&nbspForm</label> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/editaccount') ?>"  id="nav_heading"><label id="font">Setting</label></a>
          </li>
          
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          
            <li class="nav-item">
            <a href="<?php echo site_url('LoginController/logout') ?>" class="nav-link"  id="nav_heading" ><button  style="    padding-bottom: 0px;
    margin: 0px 0px 0px 0px;" class="btn btn-danger"> <label id="font" style="font-weight: bold">log&nbspout</label></button>
                         </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

