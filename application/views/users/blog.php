<?php include('header.php') ?>
<style type="text/css">
  .box{
    text-align: center;
    overflow: hidden;
    position: relative;
}
.box img{
    width: 100%;
    height: auto;
}
.box .box-content{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    transition: all 0.3s ease 0s;
}
.box:before,
.box:after,
.box .box-content:before,
.box .box-content:after{
    content: "";
    width: 25%;
    height: 100%;
        /*background: linear-gradient(to bottom,#0091ea,rgba(0,0,0,0.6),transparent,rgba(0,0,0,0.6),#0091ea);*/
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    transition: all 0.3s ease-in-out 0s;
}
.box:before{
    top: -100%;
    left: -25%;
}
.box:after{ left: 50%; }
.box .box-content:before{ left: 25%; }
.box .box-content:after{
    top: 100%;
    left: 100%;
}
.box:hover:before{
    opacity: 1;
    top: 0;
    left: 0;
}
.box:hover:after{
    opacity: 1;
    left: 25%;
    transition-delay: 0.1s;
}
.box:hover .box-content:before{
    opacity: 1;
    left: 50%;
    transition-delay: 0.1s;
}
.box:hover .box-content:after{
    opacity: 1;
    top: 0;
    left: 75%;
}
.box .inner-content{
    text-align: right;
    position: absolute;
    right: 20px;
    bottom: 10px;
    z-index: 1;
}
.box .title{
    font-size: 22px;
    font-weight: 600;
    color: #fff;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin: 0 0 4px 0;
    transform: translateY(100%);
    transition: all 0.3s ease 0s;
}
.box:hover .title{ transform: translateY(0); }
.box .post{
    display: inline-block;
    font-size: 16px;
    color: #ff4242;
    opacity: 0;
    transform: translateX(100%);
    transition: all 0.3s ease 0s;
}
.box:hover .post{
    opacity: 1;
    transform: translateX(0);
}
.box .icon{
    padding: 0;
    margin: 0;
    list-style: none;
    position: absolute;
    top: 20px;
    left: 20px;
}
.box .icon li{
    display: inline-block;
    opacity: 0;
    transition: all 0.3s ease 0s;
}
.box .icon li:first-child{ transform: translateY(80px); }
.box .icon li:last-child{ transform: translateY(-80px); }
.box:hover .icon li{
    opacity: 1;
    transform: translateY(0);
}
.box .icon li a{
    display: block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    font-size: 22px;
    color: #fff;
    margin-right: 5px;
    z-index: 1;
    position: relative;
}
.box .icon li a:before{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: #ff4242;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.box .icon li a:hover:before{ border-radius: 20% 0; }
@media only screen and (max-width:990px){
    .box{ margin-bottom: 30px; }
}
</style>  <div class="container ">
    <div class="card-header border-0 font-weight-bold d-flex justify-content-between example z-depth-4" style="background-color: #0091ea !important;padding-top: 6px;
    padding-bottom: 0px;margin-top: 100px;" >
    <div class="col-lg-12" style="text-align: center;">
    <h2 class="h2-responsive animated bounceIn   " style="    font-weight: bold;
    font-size: 30px;color: white;">Plans</h2>
    </div>
  </div>
</div>



<div class="container" style="margin-top: 40px;" >

  <div class="row">

    <div class="col-md-8" ><!-- Card -->
    	<div class="example hoverable">
<div class="card card-cascade wider reverse example z-depth-5 " >

  <!-- Card image -->
  <div class="view view-cascade overlay"  >
  	<div class="view overlay"  >
  <img src="<?= base_url("assets/mdb/img/plan/blog_10.jpg") ?>" class="img-fluid" alt="Sample image with waves effect.">
  <a>
    <div class="mask waves-effect waves-light rgba-white-slight"></div>
  </a>
</div>
   
     <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center" >

    <!-- Title -->
    <h4 class="card-title"><strong>Retirement Plan</strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2">Photography</h6>
    <!-- Text -->
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
    </p>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

  </div>

</div>
</div></div>

    <div class="col-md-4 " style="margin-top: 0px;" ><!-- Card -->
    	<div class="example hoverable">
<div class="card card-cascade wider reverse example z-depth-5">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img style="    height: 265px;
    max-height: 265px;" class="card-img-top" src="<?= base_url("assets/mdb/img/plan/blog_8.jpg") ?>" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center" >

    <!-- Title -->
    <h4 class="card-title"><strong>Yuwa Pension Plan</strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2">Photography</h6>
    <!-- Text -->
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
    </p>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

  </div>

</div>
<!-- Card --></div>
  </div>
</div>


  <div class="container">
  
  <!-- Columns are always 50% wide, on mobile and desktop -->
  <div class="row">
    <div class="col-6" style="margin-top: 50px;">
      <!-- Card -->
      <div class="example hoverable">
<div class="card card-cascade wider reverse example z-depth-5">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" style="    height: 232px;
    max-height: 232px;
" src="<?= base_url("assets/mdb/img/plan/blog_9.jpg") ?>" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>kanyadan Policy</strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2">Photography</h6>
    <!-- Text -->
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
    </p>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

  </div>
</div>
</div>
<!-- Card -->
    </div>
    <div class="col-6" style="margin-top: 50px;">
      <!-- Card -->
      <div class="example hoverable">
<div class="card card-cascade wider reverse example z-depth-5" >

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img style="    height: 232px; max-height: 232px;" class="card-img-top"  src="<?= base_url("assets/mdb/img/plan/blog_7.jpg") ?>" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>Doctor plan</strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2">Photography</h6>
    <!-- Text -->
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
    </p>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

  </div>
</div>
</div>
<!-- Card -->
    </div>
  </div>
</div>
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row">

        <div class="col-md-4 col-sm-6">
        		<div class="example hoverable">
            <div class="box example z-depth-5">
                <img  src="<?= base_url("assets/mdb/img/plan/blog_1.jpg") ?>">
                <div class="box-content">
                   
                </div>
            </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-6">
        		<div class="example hoverable">
            <div class="box example z-depth-5">
                <img src="<?= base_url("assets/mdb/img/plan/blog_2.jpg") ?>">
                <div class="box-content">
                    
                  </div>  
                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-6">
        		<div class="example hoverable">
            <div class="box example z-depth-5">
                <img src="<?= base_url("assets/mdb/img/plan/blog_3.jpg") ?>">
                <div class="box-content">
                    </div>
                </div>
            </div>
        </div>
      </div>


          <div class="row" style="margin-top: 50px;">

        <div class="col-md-4 col-sm-6">
        		<div class="example hoverable">
            <div class="box example z-depth-5">
                <img src="<?= base_url("assets/mdb/img/plan/blog_4.jpg") ?>">
                <div class="box-content">
                   </div>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-6">
        	<div class="example hoverable">
            <div class="box example z-depth-5">
                <img src="<?= base_url("assets/mdb/img/plan/blog_5.jpg") ?>">
                <div class="box-content">
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-6">
        	<div class="example hoverable">
            <div class="box example z-depth-5">
            	
                <img src="<?= base_url("assets/mdb/img/plan/blog_6.jpg") ?>" class="img-fluid">
                <div class="box-content">
                   
                </div>
            </div>
            </div>
        </div>
      </div>


   
</div>

<script type="text/javascript" src="<?= base_url("assets/mdb/js/jquery-3.3.1.min.js") ?>"></script>
<?php include('footer.php') ?>