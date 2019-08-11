<?php include('header.php') ?>
<div class="container" style=" max-width: 1111px;
    width: 1111px;">  
          <div class="container" style="margin-top: 80px; ">
                  <?php if ($error=$this->session->flashdata('msg')) :
                    $msg_class=$this->load->session->flashdata('msg_class') ?>

          <div class="row">
                <div class='col-lg-12' style="text-align: center;">
                    <div class="alert <?php echo $msg_class ?>" style="margin-left: -15px;margin-right: -12px;">
                    <?php echo $error; ?>
                    </div>
                </div>
          </div>
                 <?php endif; ?>

          </div>


<div class="container" style="margin-top: 40px"> 
	 <div class="row">

      <div class="col-3">
         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
           <a class="nav-link active" id="v-pills-Profile-tab" data-toggle="pill" href="#v-pills-Profile" role="tab" aria-controls="v-pills-Profile" aria-selected="true">Profile</a>
           <a class="nav-link" id="v-pills-Account-tab" data-toggle="pill" href="#v-pills-Account" role="tab"
           aria-controls="v-pills-Account" aria-selected="false">Account</a>
         </div>
     </div>

  <div class="col-9">
       <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-Profile" role="tabpanel"aria-labelledby="v-pills-Profile-tab" style="">
                  <h1>Admin Details</h1>
                      <label style="font-size: 18px;" id="u">Name:</label>
                          <span><label style="font-size: 18px;">Anil Paliwal</label></span><br>
                       <label style="font-size: 18px;">Contact:</label>
                           <span><label style="font-size: 18px;">9300642504</label></span><br>
                       <label style="font-size: 18px;">Developer Name:</label>
                           <span><label style="font-size: 18px;">Rahul Pawar</label></span><br>
                       <label style="font-size: 18px;">Contact:</label>
                           <span><label style="font-size: 18px;">6268546801</label></span><br>
              </div>

      <div class="tab-pane fade" id="v-pills-Account" role="tabpanel" aria-labelledby="v-pills-Account-tab" style="padding-left: 150px;">
      	
        <!-- container start -->
             <div class="container">

                     <div style="max-width: 428px;" >
               	             <section class="form-elegant">
                                    <div class="card" style="    max-width: 370px !important;width: 370px;">
                                       <?php echo form_open("admin/accoutUpdate " ); ?>
                                          <div class="card-body mx-4">

                                               <div class="text-center">
                                                   <h3 class="dark-grey-text mb-5"><strong>update Account</strong></h3>
                                                </div>

                                                <div class="md-form">
        	                                      <?php echo form_input(['type'=>'email','class'=>'form-control','name'=>'email','id'=>'Form-email1','value'=>set_value('email',$id->email)]);  ?>
                                                 <label for="Form-email1">Your email</label>
                                                 </div>

                                                <div class="md-form pb-3">
        	                                     <?php echo form_input(['type'=>'password','class'=>'form-control','name'=>'password','id'=>'Form-pass1','value'=>set_value('password',$id->password)]);  ?>
                                                <label for="Form-pass1">Your password</label>
                                                </div>

                                                <div class="text-center mb-3">
        	                                      <?php  echo form_submit(['type'=>'submit','class'=>'btn blue-gradient btn-block btn-rounded z-depth-1a','value'=>'update','style'=>' padding-left: 80px;padding-right: 80px;']); ?>
                                                 </div>

                                         </div>
                                    </div>
                            </section>
                      </div>
              </div>
     <!-- container end -->
     </div>


    </div>
  </div>
</div>
</div>

</div>
<?php include('footer.php') ?>