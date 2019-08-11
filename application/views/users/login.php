<?php include('header.php') ?>

<div class="container" style="margin-top: 100px;">


  <div class="row">
	<div class="col-lg-12"  style="max-width: 601px; margin: 0 auto;">

	<div style="max-width:  500px;">	
         <!-- Material form login -->
         
  <?php if ($error=$this->session->flashdata('login_failed')) : ?>
   <div class="row">
     <div class='col-lg-12' style="text-align: center;">
       <div class="alert alert-danger" >
         <?php echo $error; ?>
       </div>
     </div>
   </div>

<?php endif; ?>
<div class="card example hoverable">

  <h5 class="card-header info-color white-text text-center py-4 animated bounceIn"  style="    font-weight: bold;
    font-size: 40px;color: #3c4141;background-color:#0d47a1 !important;">
    <strong>Log In</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
   <?php echo form_open('LoginController/login'); ?>

      <!-- Email -->
      
      <div class="md-form">

                       <?php echo form_input(['class'=>'form-control','style'=>'border-bottom-color:#0091ea !important','id'=>'materialLoginFormEmail','type'=>'email','name'=>'u_email','value'=>set_value('u_email')]);?>
        <!-- <input type="email" id="materialLoginFormEmail" class="form-control" style="border-bottom-color:black !important; "> -->
        <label for="materialLoginFormEmail" style="color:#0d47a1 !important">E-mail</label>
      </div>

      <!-- Password -->
      <div class="md-form">
                <?php echo form_password(['class'=>'form-control','style'=>'border-bottom-color:#0091ea !important','id'=>'materialLoginFormEmail','type'=>'password','name'=>'u_pass','value'=>set_value('u_pass')]);?>

        <!-- <input type="password" id="materialLoginFormPassword" class="form-control" style="border-bottom-color:black !important;" > -->
        <label for="materialLoginFormPassword" style="color:#0d47a1 !important">Password</label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          <a href="" style="color: #0091ea">Forgot password?</a>
        </div>
      </div>

      <!-- Sign in button -->
      <button class=" btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 " type="submit" style="background-color: #0d47a1 !important;color: white !important;border-color: #0091ea !important;font-size: 19px;font-weight: bold; ">Sign in</button>

     

    </form>
    <!-- Form -->
</div>
  </div>

</div>
<!-- Material form login -->

</div>
	</div>
</div>
<script type="text/javascript" src="<?= base_url("assets/mdb/js/jquery-3.3.1.min.js") ?>"></script>
<?php include('footer.php') ?>