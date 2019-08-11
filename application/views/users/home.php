<?php include('header.php') ?>

<style type="text/css">
body {
  font-family: "Open Sans", sans-serif;
}
h2 {
  color: #333;
  text-align: center;
  text-transform: uppercase;
  font-family: "Roboto", sans-serif;
  font-weight: bold;
  position: relative;
  margin: 30px 0 60px;
}
h2::after {
  content: "";
  width: 100px;
  position: absolute;
  margin: 0 auto;
  height: 3px;
  background: #0091ea;
  left: 0;
  right: 0;
  bottom: -10px;
}
.col-center {
  margin: 0 auto;
  float: none !important;
}
.carousel {
  margin: 50px auto;
  padding: 0 70px;
}
.carousel .item {
  color: #999;
  font-size: 14px;
    text-align: center;
  overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
  width: 135px;
  height: 135px;
  margin: 0 auto;
  padding: 5px;
  border: 1px solid #ddd;
  border-radius: 50%;
}
.carousel .img-box img {
  width: 100%;
  height: 100%;
  display: block;
  border-radius: 50%;
}
.carousel .testimonial {
  padding: 30px 0 10px;
}
.carousel .overview { 
  font-style: italic;
}
.carousel .overview b {
  text-transform: uppercase;
  color: #7AA641;
}
.carousel .carousel-control {
  width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
  background: none;
}
.carousel-control i {
    font-size: 68px;
  line-height: 42px;
    position: absolute;
    display: inline-block;
  color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}
.carousel .carousel-indicators {
  bottom: -40px;
}
.carousel-indicators li, .carousel-indicators li.active {
  width: 10px;
  height: 10px;
  margin: 1px 3px;
  border-radius: 50%;
}
.carousel-indicators li { 
  background: #999;
  border-color: transparent;
  box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {  
  background: #555;   
  box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.switch {
  height: 100%;
  width: 50px;
  background-color: rgba(0, 0, 0, 0.2);
  position: absolute;
  text-align: center;
  z-index: 2;
  opacity: 0;
  transition: opacity .5s;
}

.switch i {
  font-size: 52px;
  color: #ddd;
  margin-top: 150px;
  transform: translateY(-50%);
  cursor: pointer;
}

.next { right: 0; }

#carousel {
  width: 400px;
  height: 300px;
  margin-top: 50px;
  margin-left: auto;
  margin-right: auto;
  overflow: hidden;
  border-width: 5px;
  border-style: ridge;
  border-color: #444;
  position: relative;
  box-shadow: 10px 10px 15px black;
}

#carousel:hover .switch { opacity: 1; }

.gallery {
  margin: 0;
  position: relative;
  left: -400px;
  padding: 0;
  list-style: none;
  width: 2000px;
}

.photo {
  display: block;
  float: left;
  width: 400px;
  height: 300px;
}

.photo img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  filter: none !important;
}

.controls {
  margin-top: 20px;
  text-align: center;
  padding: 0;
  position: absolute;
  bottom: 0;
  z-index: 2;
  width: 100%;
  margin-bottom: 5px;
}

.controlStyle {
  display: inline-block;
  margin-right: 2px;
  position: relative;
  cursor: pointer;
}

.fired {
  position: absolute;
  left: 0;
  top: 0;
  display: none;
}
</style>

<div style="margin-top: 50px;">
  
              <div class="jumbotron card card-image" style="background-image: url(<?= base_url("assets/mdb/img/home/r1.jpg") ?>) ;background-repeat: no-repeat; height: 640px;
                background-size: 100% 100%  ">

              <!--   <div class="container" style="margin-top: 100px;">

  <div class="row" >
    
    <div class="col-12" style="text-align: center; padding-left: 150px;">
    



      <div style="text-align: center;">
    <button type="button" class="btn btn-info" style="
    background-color: #0091ea !important;    padding-left: 75px;
    padding-right: 75px;
">
<lable style="    font-size: 21px;
    font-weight: bolder;" >Get Your Start Here.</lable>
</button>

    </div>
     <div style="text-align: center;" >
    <button type="button example hoverable" class="btn btn-info" style="
    background-color: #f92e05  !important;
"><label style=" font-size: 25px;
    font-weight: bolder;"><i class="fas fa-chevron-circle-right"></i>
Click Here....
</label>
</button>

    </div>
    </div>
  </div>
  
</div>
                         
              </div> -->
<div class="container" style="margin-top: 100px;">
  <div class="row">

    <div class="col-lg-12" style="text-align: center;">
    <h3 class="h3-responsive" style="font-size: 38px;color: white">
    It’s About Your Life,
     </h3>
   </div>
   <div class="col-lg-12" style="text-align: center;">
     <h1 class="h1-responsive" style="font-size: 75px;
    font-family: fantasy;color: white">
       Not Just Your Money.
     </h1>
     </div>
     <div class="col-lg-12" style="text-align: center;">
        <button type="button" class="btn btn-info" style="
    background-color: #0091ea !important;    padding-left: 75px;
    padding-right: 75px;
">
<lable style="    font-size: 21px;
    font-weight: bolder;" >Get Your Start Here.</lable>
</button></div><br>
<div class="col-lg-12" style="text-align: center;">
 <button type="button example hoverable" class="btn btn-info" style="
    background-color: #f92e05  !important;
"><label style=" font-size: 25px;
    font-weight: bolder;"><i class="fas fa-chevron-circle-right"></i>
Click Here....
</label>
</button>
</div>
</div>

</div>
</div>





</div>
</div>



<!-- News jumbotron -->
<div class=" text-center p-4" >

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-5 offset-md-1 mx-3 my-3">

      <!-- Featured image -->
      
<div class="row" >
    <div class="col-lg-12" style="text-align: center;">
<img class="example z-depth-5" src="<?= base_url("assets/mdb/img/home/r2.jpg") ?>" style=  "    width: 250px;
    border-radius: 50%;
    height: 250px;
    
    border: solid 8px #dee2e6;" >
   <!--  <img  src="<?= base_url("assets/mdb/img/anil_110.jpg") ?>" style=  "width: 300px;
    max-width: 300px;
    max-height: 318px;
    border-radius: 50%;
    height: 320px;
    border-color: blue;
    border: solid 5px #2980b9;
"  > -->
  </div>
</div>
       <!--  <img style="border-radius: 50%;" src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing"> -->
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6 text-md-left ml-3 mt-3">

      <!-- Excerpt -->
      <a href="#!" class="blue-text">
        <h1 class="h1 pb-1">About Anil</h1>
      </a> 

      

      <p class="font-weight-normal">Shivakumar A, Financial Advisor. Member MDRT, is one of the leading Advisor and Member of Million Dollar Round Table Club, </p>
      <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>
        <a href="<?php echo site_url('users/about_us') ?>" >
      <h class="btn btn-success" >Read more</h>
        </a>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- News jumbotron -->

<div class="container">
<!-- Section: Features v.3 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Why is it so great?</h2>
  <!-- Section description -->
  <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
    veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 text-center text-lg-left"><div id="carousel">
  <div class="switch">
    <i class="fa fa-angle-left" aria-hidden="true"></i>
  </div>
  <div class="switch next">
    <i class="fa fa-angle-right" aria-hidden="true"></i>
  </div>
  <ul class="controls">
    <li id="1" class="controlStyle">
      <i class="fa fa-circle-o" aria-hidden="true"></i>
      <i class="fa fa-circle fired" aria-hidden="true"></i>
    </li>
    <li id="2" class="controlStyle">
      <i class="fa fa-circle-o" aria-hidden="true"></i>
      <i class="fa fa-circle fired" aria-hidden="true"></i>
    </li>
    <li id="3" class="controlStyle">
      <i class="fa fa-circle-o" aria-hidden="true"></i>
      <i class="fa fa-circle fired" aria-hidden="true"></i>
    </li>
    <li id="4" class="controlStyle">
      <i class="fa fa-circle-o" aria-hidden="true"></i>
      <i class="fa fa-circle fired" aria-hidden="true"></i>
    </li>
    <li id="5" class="controlStyle">
      <i class="fa fa-circle-o" aria-hidden="true"></i>
      <i class="fa fa-circle fired" aria-hidden="true"></i>
    </li>
  </ul>
  <ul class="gallery">
    <li class="photo"><img src="<?= base_url("assets/mdb/img/r559.jpg") ?>" alt=""></li>
    <li class="photo"><img src="<?= base_url("assets/mdb/img/r558.jpg") ?>" alt=""></li>
    <li class="photo"><img src="<?= base_url("assets/mdb/img/r558.jpg") ?>" alt=""></li>
    <li class="photo"><img src="<?= base_url("assets/mdb/img/r558.jpg") ?>" alt=""></li>
    <li class="photo"><img src="<?= base_url("assets/mdb/img/r558.jpg") ?>" alt=""></li>
  </ul>
</div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fas fa-share fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Safety</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam,
            quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fas fa-share fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Technology</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam,
            quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!--Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fas fa-share fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Finance</h5>
          <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima
            veniam, quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!--Grid row-->

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.3 -->

</div>



<div class="container" >
  
<!-- Section: Features v.4 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Why is it so great?</h2>
  <!-- Section description -->
  <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
    veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fas fa-user-tie" style="font-size: 45px;"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">What i do</h5>
          <p class="grey-text">
            I help the family of people to save money by planning their children's education and marriage and their  retirement through the insurance policy of lic so that their family can get benefit of total security and saving in income tax.
          </p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fas fa-angle-double-right" style="font-size: 45px"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">my specialisation</h5>
          <p class="grey-text">Retirement Plan.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-md-0 mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fas fa-check-double" style="font-size: 45px;"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Success</h5>
          <p class="grey-text mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
            maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 text-center">
      <img class="img-fluid " style="margin-top: 63px;"  src="<?= base_url("assets/mdb/img/home/r5.png") ?>"
        alt="Sample image" >
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
         
         <i class="fas fa-award"  style="font-size: 45px;"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Achivements</h5>
          <p class="grey-text">Qualified MDRT (Million Dollar Round Table) Member for the year 2014.
            Qualified JDRT  Member for the year 2018.
            Lic CM Club Member.
             Attendent MDRT trainning at MDI Gurgaon.
             qulified ELite Club Membership 2018 .Star Health & Allide insurance company Ltd.
          </p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
        <i class="far fa-address-book" style="font-size: 45px"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">plans</h5>
          <p class="grey-text">Retirement Plan,Yuwa Pension Plan,kanyadan Policy,Doctor plan
           </p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fas fa-2x fa-magic deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3"></h5>
          <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
            maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.4 -->
  
</div>


<div class="container" >
  <div class="row">
    <div class="col-md-8 col-center m-auto">
      <h2>Our Clients Say</h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
          <div class="item carousel-item active">
            <div class="img-box" style="border: solid 3px #2980b9;"><img src="<?= base_url("assets/mdb/img/home/r6.jpg") ?>" alt=""> </div>
            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
            <p class="overview"><b>Jay Motghare</b>, Director at Nirmitee Robotics India Private Limited</p>
          </div>
          <div class="item carousel-item">
            <div class="img-box" style="border: solid 3px #2980b9;"><img src="<?= base_url("assets/mdb/img/home/r3.jpg") ?>" alt=""></div>
            <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
            <p class="overview"><b>Bhagyashree Gawande</b>,Doctor</p>
          </div>
          <div class="item carousel-item">
            <div class="img-box" style="border: solid 3px #2980b9;"><img src="<?= base_url("assets/mdb/img/home/r4.jpg") ?>" alt=""></div>
            <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
            <p class="overview"><b>Nitin Bagani</b>,Director at EcoStructures Pvt.Ltd,Architect</p>
          </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
          <i class="fa fa-angle-left" style="color: dodgerblue;"></i>
        </a>
        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
          <i  style="color: dodgerblue;" class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?= base_url("assets/mdb/js/jquery-3.3.1.min.js") ?>"></script>
<script type="text/javascript" src="<?= base_url("assets/mdb/js/scripts.js") ?>"></script>
<?php include('footer.php') ?>