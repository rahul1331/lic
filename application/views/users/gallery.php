
<?php include('header.php') ?>  
    <style>
      body { background-color: #fafafa; }
      .co { margin: 50px auto; max-width: 960px; text-align: center; }
      .img-container {
               margin: 20px;
             }

.img-container img {
   width: 300px;
   height: auto;
   border: 1px solid #0091ea;
   border-radius: 5px;
   cursor: pointer;
   -webkit-tap-highlight-color: transparent;
   transition: .3s;
  -webkit-transition: .3s;
  -moz-transition: .3s;
      ;
    
    margin-top: 10px;
    margin-bottom: 10px;

}
.img-container img:hover{
  transform: scale(0.97);
 -webkit-transform: scale(0.97);
 -moz-transform: scale(0.97);
 -o-transform: scale(0.97);
  opacity: 0.75;
 -webkit-opacity: 0.75;
 -moz-opacity: 0.75;
  transition: .3s;
 -webkit-transition: .3s;
 -moz-transition: .3s;
}


</style>


   
  <body>
  	 
      <div class="co">
                 <div class="container">
                    <div class="card-header border-0 font-weight-bold d-flex justify-content-between example z-depth-4"             style="background-color: #0091ea !important;padding-top: 6px;
                                     padding-bottom: 0px;margin-top: 100px;" >
                         <div class="col-lg-12" style="text-align: center;">
                                   <h2 class="h2-responsive animated bounceIn   " style="    font-weight: bold;font-size: 30px;color: white;">Gallery</h2>
                         </div>
                  </div>
              </div>         
            <div class="img-container">
               <img src="<?= base_url("assets/mdb/img/gallery/gallery_1.jpg") ?>" alt="Zonal Training centre,Bhopal" />
               <img src="<?= base_url("assets/mdb/img/gallery/gallery_2.jpg") ?>" alt="Mission 11K crores"/>
               <img src="<?= base_url("assets/mdb/img/gallery/gallery_3.jpg") ?>" alt="Training Program MDRT Agents of LIC"/>
               <img src="<?= base_url("assets/mdb/img/gallery/gallery_4.jpg") ?>" alt="Complited 55.22 lakh primium" />
                 <img src="<?= base_url("assets/mdb/img/gallery/gallery_5.jpg") ?>" alt="Training" />
               <img src="<?= base_url("assets/mdb/img/gallery/gallery_6.jpg") ?>" alt="club Membership"/>
               <img src="<?= base_url("assets/mdb/img/gallery/gallery_7.jpg") ?>" alt="Training"/>
               <img src="<?= base_url("assets/mdb/img/gallery/gallery_8.jpg") ?>" alt="Training" />
                
            </div>
</div>
   </body>

<?php include('footer.php') ?>