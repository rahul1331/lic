<?php include('header.php') ?>
 <style type="text/css">
    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
  <div class="container">
	<div class="card-header border-0 font-weight-bold d-flex justify-content-between example z-depth-4" style="background-color: #0091ea !important;padding-top: 6px;
    padding-bottom: 0px;margin-top: 100px;" >
    <div class="col-lg-12" style="text-align: center;">
    <h2 class="h2-responsive animated bounceIn   " style="    font-weight: bold;
    font-size: 30px;color: white;">Contact Us</h2>
    </div>
  </div>
</div>

  
<div class="container" style="margin-top: -37px;    margin-bottom: -47px;">
  <div class="row" class="jumbotron jumbotron-fluid  "  >
     
      <div class="col-lg-8 " >
        
                   <!-- Section: Contact v.3 -->
<section class="contact-section my-5 example hoverable">

  <!-- Form with header -->
  <div class="card">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">

          <!-- Header -->
          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-name" class="form-control">
                <label for="form-contact-name" class="">Your name</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-email" class="form-control">
                <label for="form-contact-email" class="">Your email</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-phone" class="form-control">
                <label for="form-contact-phone" class="">Your phone</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-company" class="form-control">
                <label for="form-contact-company" class="">Your company</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-contact-message">Your message</label>
               <div class="" style="text-align: center;">
                    

                  <input  class="btn btn-primary animated bounceIn" type="submit" value="Submit" style=" 
                     padding-left: 66px;
    padding-right: 63px;
    padding-top: 9px;
    padding-bottom: 9px;;font-weight: bold;border-color: black !important;
    background-color: black !important;"; >
                  </div>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text" style="    background-color: #0d47a1; padding-bottom: 65px;
    border-bottom-right-radius: 1%;    margin-right: -1px;">

          <h3 class="my-4 pb-2" style="">Contact information</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fas fa-map-marker-alt pr-2"></i>Sausar, 480106,chhi. M.P. </p>
            </li>
            <li>
              <p><i class="fas fa-phone pr-2"></i>+91 9300642504</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pr-2"></i>anil.paliwal67@yahoo.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic">
                <i class="fab fa-linkedin-in"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic">
                <i class="fab fa-instagram"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>
<!-- Section: Contact v.3 -->

      </div>
      <div class="col-lg-4" style="padding-top: 48px;float: left">
        
                  <!--Google map-->
                  <div class="example hoverable">
<div id="map-container-google-1" class="z-depth-1-half map-container " style="height: 467px">
  <iframe c src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>

<!--Google Maps-->
</div>
      </div>
    </div>
  </div>


<script type="text/javascript" src="<?= base_url("assets/mdb/js/jquery-3.3.1.min.js") ?>"></script>
<?php include('footer.php') ?>