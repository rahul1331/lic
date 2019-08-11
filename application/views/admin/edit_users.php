<?php include('header.php') ?>
<style type="text/css">
 input{
  max-height: 26px;;max-width: 200px;
    background-color: #e9ebee !important;
}


</style>



<style type="text/css">


  .customfile {
  position: relative;
  overflow: hidden;
  width: 230px;
  height: 26px;
  border: solid 0px red;
  background: #fff;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  border: solid 1px #c2c2c2;
  padding: 2px;
  -webkit-box-shadow: inset 1px 1px 2px #e4e4e4;
  box-shadow: inset 1px 1px 2px #e4e4e4;
}

.customfile span {
  display: block;
  float: left;
}

.customfile span.cust-field {
  line-height: 20px;
  padding: 3px 4px;
  width: 151px;
  height: 20px;
  cursor: pointer;
  color: #212121;
  display: block;
  font-weight: normal;
  color: #333;
}

.customfile span.cust-btn {
  float: right;
  line-height: 20px;
  padding: 1px 10px;
  height: 22px;
  text-align: center;
  font-weight: bold;
  cursor: pointer;
  color: #333;
  background: #e1e1e1;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  text-transform: uppercase;
  margin-top: 1px;
}

.customfile .fileinput {
  position: absolute;
  left: 0px;
  top: 0px;
  cursor: pointer;
  z-index: 99;
}
  </style>

    <?php echo form_open("admin/userUpdate/{$id->id} " ); ?>

<div class="container" style="margin-top: 150px; ">
  <?php if ($error=$this->session->flashdata('msg')) : 

$msg_class=$this->load->session->flashdata('msg_class')
 
 ?>

   <div class="row">
     <div class='col-lg-12' style="text-align: center;">
       <div class="alert <?php echo $msg_class ?>" style="    margin-left: -15px;
    margin-right: -12px;">
         <?php echo $error; ?>
       </div>
     </div>
   </div>

<?php endif; ?>

</div>

<div class="container" style="margin-top: px;">
  <div class="row">
    <div class="col-lg-12" style="text-align: center;background-color:  #e9ebee;padding-bottom: 11px;"><label style="color: #7b7b7b;    position: relative;
    top: 8px;font-size: 23px;
    font-weight: bolder;">Edit LIC Application Form</label></div></div>
</div>
<div class="container" style="margin-top: 10px;text-align: center;    border-color: #e9ebee;
    border-style: solid;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label style="       font-size: 14px;
    font-weight: bold;
    position: relative;
    bottom: 4px;
    color: white;
">Personal Detailes</label><i class="fas fa-angle-right" style="font-size: 29px;
    color: white;
    padding-left: 54px;
    padding-top: -11px !important;
    position: relative;
    top: -5px;"></i> </div><br><br><br>
    
      
       <div class="container">  


<div class="row justify-content-center " style="    margin-bottom: 10px;">
    <div class="col-4">
     <label  class="example z-depth-2" style="float: right;">Candidate Name :</label>
    </div>
    <div class=" col-4 " >
      <?php echo form_input(['type'=>'text','class'=>' example z-depth-1   form-control form-control-sm','placeholder'=>'Enter Username','style'=>'width: 100%;max-width: 100%;','name'=>'candidate_name','value'=>set_value('candidate_name',$id->candidate_name)]);  ?><!-- 
     <input  style="width: 100%;max-width: 100%;"  id="b" class=" example z-depth-1   form-control form-control-sm" type="text"  name="candidate_name">
 -->    </div>

  </div>

  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right;">Father Name :</label>
    </div>
    <div class="col-4">
      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter father name','style'=>'max-width: 169px;','name'=>'father_name','value'=>set_value('father_name',$id->father_name)]);  ?>
      <!-- 
     <input  style="    max-width: 169px;" class="example z-depth-1 form-control form-control-sm" type="text" name="father_name" > -->
    </div>
  </div>   

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Mother Name :</label>
    </div>
    <div class="col-4">
       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter mother name','style'=>'max-width: 274px;','name'=>'mother_name','value'=>set_value('mother_name',$id->mother_name)]);  ?>
<!--      <input style="    max-width: 274px;"  class="example z-depth-1 form-control form-control-sm" type="text" name="mother_name"> -->
    </div>
  </div>

    <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Date of birth :</label>
    </div>
    <div class="col-4">
     <demo id="demo">
       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter date of birth','style'=>'float: left;margin-right: 7px;max-width: 127px;','data-select'=>'date','name'=>'dob','value'=>set_value('dob',$id->dob)]);  ?>
    <!-- <input type="" class="example z-depth-1 form-control form-control-sm" name="dob" data-select="date" style="float: left;margin-right: 7px;max-width: 127px;"> -->
<button type="button" class="example z-depth-1" data-toggle="select" style="    float: left;
    max-height: 26px;
    max-width: 200px;
    background-color: #e9ebee !important;
    font-size: 12px;
    font-weight: bold;
    color: slategrey;">Click me</button>
</demo>
    </div>
  </div>


 
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Age :</label>
    </div>
    <div class="col-4">
       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Age','style'=>'max-width: 50px;
   ','name'=>'age','value'=>set_value('age',$id->age)]);  ?>
    <!--  <input   class="example z-depth-1 form-control form-control-sm" type="text" name="age" style="max-width: 50px;
    text-align: center;" > -->
    </div>
  </div>   
<div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Age Proof :</label>
    </div>
    <div class="col-4" >
    <div style="float: left">
       <?php echo form_input(['type'=>'file','class'=>'example z-depth-1 btn btn-danger ','placeholder'=>' Age Proof','style'=>' max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;','name'=>'userfile','value'=>set_value('userfile',$id->userfile)]);  ?>
<!-- <input class="example z-depth-1 btn btn-danger " type="file" style=" max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;" name="dem" /> -->
    </div></div>
  </div>
  <div class="row justify-content-center"  style="    margin-bottom: 10px;" >
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Place Of Birth :</label>
    </div>
    <div class="col-4">
      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Age','style'=>'width: 100%;max-width: 100%;
   ','name'=>'place_of_birth','value'=>set_value('place_of_birth',$id->place_of_birth)]);  ?>
     <!-- <input style="width: 100%;max-width: 100%;" name="place_of_birth"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div> 

  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Height:</label>
    </div>
    <div class="col-4">
      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter height','style'=>'max-width: 50px;','name'=>'height','value'=>set_value('height',$id->height)]);  ?>

 <!--     <input style="max-width: 50px;
    text-align: center;"  name="height"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Weight :</label>
    </div>
    <div class="col-4">

      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter weight','style'=>'max-width: 127px;','name'=>'weight','value'=>set_value('weight',$id->weight)]);  ?>
   <!--   <input style="max-width: 127px;" name="weight" class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Mark Of Identification :</label>
    </div>
    <div class="col-4">
      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter weight','style'=>'max-width: 274px;','name'=>'mark_of_identy','value'=>set_value('mark_of_identy',$id->mark_of_identy)]);  ?>
   <!--   <input style="    max-width: 274px;" name="mark_of_identy" class=" example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>
       
   
     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Qualifiacation :</label>
    </div>
     <div class="col-4">
       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Identy','style'=>' float: left;max-height: 26px;;max-width: 130px;
    background-color: #e9ebee !important;padding-top: 2px;    font-size: 14px;','name'=>'qulification','value'=>set_value('qulification',$id->qulification)]);  ?>
      <!-- <input style=" float: left;max-height: 26px;;max-width: 130px;
    background-color: #e9ebee !important;padding-top: 2px;    font-size: 14px;"name="qulification" class=" example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div> 

    <div class="row justify-content-center"  style=" margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Occupation :</label>
    </div>
    <div class="col-4">
      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Identy','style'=>'width: 100%;max-width: 100%;','name'=>'occupation','value'=>set_value('occupation',$id->occupation)]);  ?>

    <!--  <input name="occupation"  style="width: 100%;max-width: 100%;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>  
   

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Nature Of Job :</label>
    </div>
    <div class="col-4">
       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Nature of Job','style'=>'    max-width: 169px;','name'=>'nature_of_job','value'=>set_value('occupation',$id->occupation)]);  ?>
     <!-- <input name="nature_of_job"  style="    max-width: 169px;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>

  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Length Of Service  :</label>
    </div>
    <div class="col-4">
      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Nature of Job','style'=>'max-width: 50px;','name'=>'lenth_of_service','value'=>set_value('lenth_of_service',$id->lenth_of_service)]);  ?>
     <!-- <input name="lenth_of_service" style="max-width: 50px;
    ;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>
   
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Income :</label>
    </div>
    <div class="col-4">
           <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Nature of Job','style'=>'max-width: 127px;','name'=>'income','value'=>set_value('income',$id->income)]);  ?>
<!-- 
     <input name="income" style="max-width: 127px;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div> 
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Name Of Employer :</label>
    </div>
    <div class="col-4">
       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Name of Employ','style'=>'width: 100%;max-width: 100%;','name'=>'name_of_employer','value'=>set_value('name_of_employer',$id->name_of_employer)]);  ?>
<!-- 
     <input name="name_of_employer" style="width: 100%;max-width: 100%;"   class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Candidate Image :</label>
    </div>
    <div class="col-4">
    <div style="float: left">
         <?php echo form_input(['type'=>'file','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Name of Employ','style'=>'max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;','name'=>'candidate_image','value'=>set_value('candidate_image',$id->candidate_image)]);  ?>
<!-- 
<input name="candidate_image" class="example z-depth-1 btn btn-danger " type="file" style=" max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;"  /> -->
    </div>
    </div>
  </div>
  



  

 
</div></div></div>


<div class="container" style="margin-top: 10px;text-align: center;    border-color: #e9ebee;
    border-style: solid;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label style="       font-size: 14px;
    font-weight: bold;
    position: relative;
    bottom: 4px;
    color: white;
">Contact Detailes</label><i class="fas fa-angle-right" style="font-size: 29px;
    color: white;
    padding-left: 54px;
    padding-top: -11px !important;
    position: relative;
    top: -5px;"></i> </div><br><br><br>
    
      
       <div class="container">  


 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Present Address :</label>
    </div>
    <div class="col-4">
     <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter present address','style'=>'width: 100%;max-width: 100%;','name'=>'present_address','value'=>set_value('present_address',$id->present_address)]);  ?>


    <!--  <input name="present_address" style="width: 100%;max-width: 100%;" class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>
 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Email :</label>
    </div>
    <div class="col-4">
          <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Email','style'=>'max-width: 180px;','name'=>'email','value'=>set_value('email',$id->email)]);  ?>
    <!--  <input name="email" style="max-width: 180px;" class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>  

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Mobile No :</label>
    </div>
    <div class="col-4">
      <div class="row" style="    float: left;">
        <div class="col-lg-6">
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Mobile No.','style'=>'max-width: 100px;','name'=>'mob_first','value'=>set_value('mob_first',$id->mob_first)]);  ?>
          <!-- <input name="mob_first" style="max-width: 100px"  class="example z-depth-1 form-control form-control-sm" type="text"  placeholder="mobile 1"> -->
        </div>
        <div class="col-lg-6" style="margin-left: 0px;">
              <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Mobile No.','style'=>'max-width: 100px;','name'=>'mob_secound','value'=>set_value('mob_secound',$id->mob_secound)]);  ?>
          <!-- <input name="mob_secound" style="max-width: 100px;"  class="example z-depth-1 form-control form-control-sm" type="text"  placeholder="mobile 2"> -->
        </div>
      </div>
     
     
    </div>
  </div>
 
</div></div></div>


<div class="container" style="margin-top: 10px;text-align: center;    border-color: #e9ebee;
    border-style: solid;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label style="       font-size: 14px;
    font-weight: bold;
    position: relative;
    bottom: 4px;
    color: white;
">Policy Detailes</label><i class="fas fa-angle-right" style="font-size: 29px;
    color: white;
    padding-left: 54px;
    padding-top: -11px !important;
    position: relative;
    top: -5px;"></i> </div><br><br><br>
    
      
       <div class="container">  

  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Agency Code :</label>
    </div>
    <div class="col-4">

       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Mobile No.','style'=>'max-width: 100px;','name'=>'agency_code','value'=>set_value('agency_code',$id->agency_code)]);  ?>
       <!-- 
     <input name="agency_code" style="max-width: 100px;" class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>  

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Plane & Terms :</label>
    </div>
    <div class="col-4">

      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Plan and terms.','style'=>'width: 100%;max-width: 100%;','name'=>'plane_and_terms','value'=>set_value('plane_and_terms',$id->plane_and_terms)]);  ?>

    <!--  <input name="plane_and_terms" style="width: 100%;max-width: 100%;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Sum Assured :</label>
    </div>
    <div class="col-4">

      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Sum Assured','style'=>'max-width: 100px;','name'=>'sum_assured','value'=>set_value('sum_assured',$id->sum_assured)]);  ?>


  <!--    <input  name="sum_assured" class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Mode :</label>
    </div>
    <div class="col-4">

      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Mode','style'=>'max-width: 100px;','name'=>'agency_code','value'=>set_value('mode',$id->mode)]);  ?>


     <!-- <input name="mode" style="max-width: 100px;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>
 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Premium :</label>
    </div>
    <div class="col-4">

      <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Mobile No.','style'=>'max-width: 100px;','name'=>'premium','value'=>set_value('premium',$id->premium)]);  ?>

  <!--    <input name="premium"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>  

 
</div></div></div>


<div class="container" style="margin-top: 10px;text-align: center;    border-color: #e9ebee;
    border-style: solid;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label style="       font-size: 14px;
    font-weight: bold;
    position: relative;
    bottom: 4px;
    color: white;
">Appointee/Nominee Detailes</label><i class="fas fa-angle-right" style="font-size: 29px;
    color: white;
    padding-left: 54px;
    padding-top: -11px !important;
    position: relative;
    top: -5px;"></i> </div><br><br><br>
    

<div class="container">
  <div class="row">
    <div class="col-sm" >
      <label class="example z-depth-2">Name</label>
     <div class="row">
    <div class="col">
      <label class="example z-depth-2">Nominee's</label>
    </div>
    <div class="col">
        <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Nominee Name.','name'=>'noninee_name','value'=>set_value('noninee_name',$id->noninee_name)]);  ?>


   <!--   <input name="noninee_name"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>
   <div class="row" style="margin-top: 4px">
    <div class="col">
     <label class="example z-depth-2"> Appointee's</label>
    </div>
    <div class="col" >

<?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter appointee name.','name'=>'appointee_name','value'=>set_value('appointee_name',$id->appointee_name)]);  ?>
<!-- 
      <input  name="appointee_name" class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>
    </div>

    <div class="col-sm"  >
      <label class="example z-depth-2">age</label>
      <div class="row" >
         <div class="container">
           <div class="row" style="margin-bottom: 10px">
             <div class="col-lg-12" style="text-align: center;padding-left:90px">
                  <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Nominee age.','name'=>'noninee_age','value'=>set_value('noninee_age',$id->noninee_age)]);  ?>

             <!-- <input name="noninee_age"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
             </div>
           </div>
           <div class="row">
             <div class="col-lg-12" style="text-align: center;padding-left:90px">

              <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter appointee age.','name'=>'appointee_age','value'=>set_value('appointee_age',$id->appointee_age)]);  ?>
             <!-- <input name="appointee_age"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
             </div>
           </div>
         </div>
  </div>
    </div>
     <div class="col-sm" style="margin-bottom: 20px;" >
      <label class="example z-depth-2">Relation</label>
      <div class="row" >
         <div class="container">
           <div class="row" style="margin-bottom: 10px">
             <div class="col-lg-12" style="text-align: center;padding-left:90px">

              <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Nominee Relation','name'=>'noninee_relation','value'=>set_value('noninee_relation',$id->noninee_relation)]);  ?>
             
<!-- 
             <input name="noninee_relation"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
             </div>
           </div>
           <div class="row">
             <div class="col-lg-12" style="text-align: center;padding-left:90px">

              <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','placeholder'=>'Enter Appointee Relation','name'=>'appointee_relation','value'=>set_value('appointee_relation',$id->appointee_relation)]);  ?>
            <!--  <input name="appointee_relation"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
             </div>
           </div>
         </div>
  </div>
    </div></div></div>
      
       

</div></div>


<div class="container" style="margin-top: 10px;text-align: center;    border-color: #e9ebee;
    border-style: solid;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label style="       font-size: 14px;
    font-weight: bold;
    position: relative;
    bottom: 4px;
    color: white;
">Family Detailes</label><i class="fas fa-angle-right" style="font-size: 29px;
    color: white;
    padding-left: 54px;
    padding-top: -11px !important;
    position: relative;
    top: -5px;"></i> </div><br><br><br>
    
      
      <div class="container">
<div class="table-responsive">
  <table class="table" >
    <thead >
      <tr>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Family History </label> </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Death/Alive</label> </th>
        <th scope="col" style="text-align: center;"><label class="example z-depth-2">Age</label> </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Health</label> </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Age at Death(if expired)</label> </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Cause of Death</label> </th>
        
      </tr>
    </thead>
    <tbody>
      <tr class="example hoverable">
        <th scope="row"><label class="example z-depth-2 ">Father</label> </th>
        <td >
                  <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'father','value'=>set_value('father',$id->father)]);  ?>
                  
           </td>
        <td>

              <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'father_age','value'=>set_value('father_age',$id->father_age)]);  ?>

         <!-- <input name="father_age"  class="example z-depth-1 form-control form-control-sm" type="text" ></td> -->
        <td> 
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'father_health','value'=>set_value('father_health',$id->father_health)]);  ?>

          <!-- <input name="father_health"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 

             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'father_age_death','value'=>set_value('father_age_death',$id->father_age_death)]);  ?>
          <!-- <input name="father_age_death"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 
            <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'father_cause_death','value'=>set_value('father_cause_death',$id->father_cause_death)]);  ?>
          <!-- <input name="father_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" ></td> -->
       
      </tr>
      <tr class="example hoverable">
        <th scope="row"><label class="example z-depth-2">Mother</label></th>
       <td>
            <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'mother','value'=>set_value('mother',$id->mother)]);  ?>

          <!-- <input type="radio" name="mother" value="death">
          <label class="example z-depth-2">Death</label>
          &nbsp&nbsp&nbsp
          <input type="radio" name ="mother" value="Alive">
            <label class="example z-depth-2" >Alive</label> -->
        </td>
        <td> 
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'mother_age','value'=>set_value('mother_age',$id->mother_age)]);  ?>

        <!--   <input name="mother_age"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 
           <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'mother_health','value'=>set_value('mother_health',$id->mother_health)]);  ?>

         <!--  <input name="mother_health" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 
         <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'mother_age_death','value'=>set_value('mother_age_death',$id->mother_age_death)]);  ?>
<!-- 
          <input name="mother_age_death"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'mother_cause_death','value'=>set_value('mother_cause_death',$id->mother_cause_death)]);  ?>


         <!-- <input name="mother_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        
      </tr>
      <tr class="example hoverable">


        <th scope="row"><label class="example z-depth-2">Brother</label></th>
         <td>

           <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'brother','value'=>set_value('brother',$id->brother)]);  ?>
         <!--  <input type="radio" name="brother" value="death">
          <label class="example z-depth-2">Death</label>
          &nbsp&nbsp&nbsp
          <input type="radio" name ="brother"value="Alive">
            <label class="example z-depth-2" >Alive</label> -->
        </td>
        <td> 
         <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'brother_age','value'=>set_value('brother_age',$id->brother_age)]);  ?>

          <!-- <input name="brother_age"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 

          <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'brother_health','value'=>set_value('brother_health',$id->brother_health)]);  ?>
          <!-- <input name="brother_health"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>
            <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'brother_age_death','value'=>set_value('brother_age_death',$id->brother_age_death)]);  ?>
<!-- 
         <input  name="brother_age_death" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>
               <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'brother_cause_death','value'=>set_value('brother_cause_death',$id->brother_cause_death)]);  ?>

        <!--  <input name="brother_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
      </tr>
      <tr class="example hoverable">
        <th scope="row"><label class="example z-depth-2">Husband/Wife</label></th>
         <td >

       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_and_wife','value'=>set_value('husband_and_wife',$id->husband_and_wife)]);  ?>

         <!--  <input type="radio" name="husband_and_wife" value="death">
          <label class="example z-depth-2">Death</label>
          &nbsp&nbsp&nbsp
          <input type="radio" name ="husband_and_wife"value="Alive">
            <label class="example z-depth-2" >Alive</label> -->
        </td>
        <td>
               <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_and_wife_age','value'=>set_value('husband_and_wife_age',$id->husband_and_wife_age)]);  ?>


         <!-- <input name="husband_and_wife_age"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>
               <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_and_wife_health','value'=>set_value('husband_and_wife_health',$id->husband_and_wife_health)]);  ?>

        <!--  <input name="husband_and_wife_health"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_and_wife_age_death','value'=>set_value('husband_and_wife_age_death',$id->husband_and_wife_age_death)]);  ?>
         <!-- <input name="husband_and_wife_age_death"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>

         <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_and_wife_cause_death','value'=>set_value('husband_and_wife_cause_death',$id->husband_and_wife_cause_death)]);  ?>
       <!--   <input name="husband_and_wife_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
      </tr>
      <tr class="example hoverable">
        <th scope="row"><label class="example z-depth-2">Children</label></th>
         <td>

       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'children','value'=>set_value('children',$id->children)]);  ?>

         <!--  <input type="radio" name="children" value="death">
          <label class="example z-depth-2">Death</label>
          &nbsp&nbsp&nbsp
          <input type="radio" name ="children"value="Alive">
            <label class="example z-depth-2" >Alive</label> -->
        </td>
        <td> 
              <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'children_age','value'=>set_value('children_age',$id->children_age)]);  ?>

         <!--  <input name="children_age"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 

                 <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'children_health','value'=>set_value('children_health',$id->children_health)]);  ?>
         <!--  <input name="children_health"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 

              <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'children_death_age','value'=>set_value('children_death_age',$id->children_death_age)]);  ?>
          <!-- <input name="children_death_age"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>

              <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'children_cause_death','value'=>set_value('children_cause_death',$id->children_cause_death)]);  ?>
         <!-- <input name="children_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" >--></td> 
       
      </tr >
    </tbody>
  </table>
</div>
</div>
 
</div></div>


<div class="container" style="margin-top: 10px;text-align: center;    border-color: #e9ebee;
    border-style: solid;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label style="       font-size: 14px;
    font-weight: bold;
    position: relative;
    bottom: 4px;
    color: white;
">Previous Insurance Detailes</label><i class="fas fa-angle-right" style="font-size: 29px;
    color: white;
    padding-left: 54px;
    padding-top: -11px !important;
    position: relative;
    top: -5px;"></i> </div><br><br><br>
    
      
      <div class="container">
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Br.Unit </label> </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Policy No.</label> </th>
        <th scope="col" style="text-align: center;"><label class="example z-depth-2">Sum Assd.</label> </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Premium</label> </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">T.T</label> </th>
         <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Mode </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">D.O.Commencement</label> </th>
        
      </tr>
    </thead>
    <tbody>
      <tr class="example hoverable">
        <td>
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_br_unit_first','value'=>set_value('previous_ins_br_unit_first',$id->previous_ins_br_unit_first)]);  ?>

        <!--  <input name="previous_ins_br_unit_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
         <td> 
               <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_policy_no_first','value'=>set_value('previous_ins_policy_no_first',$id->previous_ins_policy_no_first)]);  ?>

          <!-- <input name="previous_ins_policy_no_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 

           <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_sum_assured_first','value'=>set_value('previous_ins_sum_assured_first',$id->previous_ins_sum_assured_first)]);  ?>
      <!--     <input  name="previous_ins_sum_assured_first" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_prem_first','value'=>set_value('previous_ins_prem_first',$id->previous_ins_prem_first)]);  ?>

         <!--  <input name="previous_ins_prem_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
         <td>

             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_t_t_first','value'=>set_value('previous_ins_t_t_first',$id->previous_ins_t_t_first)]);  ?>
          <!-- <input name="previous_ins_t_t_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>
              <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_mode_first','value'=>set_value('previous_ins_mode_first',$id->previous_ins_mode_first)]);  ?>

        <!--  <input name="previous_ins_mode_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>
               <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_d_o_commencement_first','value'=>set_value('previous_ins_d_o_commencement_first',$id->previous_ins_d_o_commencement_first)]);  ?>
        <!--  <input  name="previous_ins_d_o_commencement_first" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
      </tr>
      <tr class="example hoverable">
        <td> 
           <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_br_unit_secound','value'=>set_value('previous_ins_br_unit_secound',$id->previous_ins_br_unit_secound)]);  ?>
<!-- 
          <input  name="previous_ins_br_unit_secound" class="example z-depth-1 form-control form-control-sm" type="text" ></td> -->
         <td> 
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_policy_no_secound','value'=>set_value('previous_ins_policy_no_secound',$id->previous_ins_policy_no_secound)]);  ?>

         <!--  <input  name="previous_ins_policy_no_secound" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 
            <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_sum_assured_secound','value'=>set_value('previous_ins_sum_assured_secound',$id->previous_ins_sum_assured_secound)]);  ?>

          <!-- <input name="previous_ins_sum_assured_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_prem_secound','value'=>set_value('previous_ins_prem_secound',$id->previous_ins_prem_secound)]);  ?>

          <!-- <input  name="previous_ins_prem_secound" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
         <td> 
                <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_t_t_secound','value'=>set_value('previous_ins_t_t_secound',$id->previous_ins_t_t_secound)]);  ?>

          <!-- <input  name="" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>
               <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_mode_secound','value'=>set_value('previous_ins_mode_secound',$id->previous_ins_mode_secound)]);  ?>

        <!--  <input name="previous_ins_mode_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'previous_ins_d_o_commencement_secound','value'=>set_value('previous_ins_d_o_commencement_secound',$id->previous_ins_d_o_commencement_secound)]);  ?>
<!-- 
          <input  name="previous_ins_d_o_commencement_secound" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
      </tr>
      
    </tbody>
  </table>
</div>

 
</div></div></div>
 
<div class="container" style="margin-top: 10px;">
  <div class="row">
    <div class="col-lg-12" style="text-align: center;background-color:  #e9ebee;padding-bottom: 11px;"><label style="color: #7b7b7b;    position: relative;
    top: 8px;font-size: 23px;
    font-weight: bolder;">IN CASE OF LADIES</label></div></div>
</div>



<div class="container" style="margin-top: 10px;text-align: center;    border-color: #e9ebee;
    border-style: solid;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label style="       font-size: 14px;
    font-weight: bold;
    position: relative;
    bottom: 4px;
    color: white;
">Personal Detailes</label><i class="fas fa-angle-right" style="font-size: 29px;
    color: white;
    padding-left: 54px;
    padding-top: -11px !important;
    position: relative;
    top: -5px;"></i> </div><br><br><br>
    
      
       <div class="container">  

  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Husband Name :</label>
    </div>
    <div class="col-4">

 <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'ladies_husband_name','style'=>'width: 100%;max-width: 100%;','value'=>set_value('ladies_husband_name',$id->ladies_husband_name)]);  ?>

     <!-- <input name="ladies_husband_name" style="width: 100%;max-width: 100%;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>  

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Occupation :</label>
    </div>
    <div class="col-4">

       <?php echo form_input(['type'=>'text','style'=>' max-width: 169px;','class'=>'example z-depth-1 form-control form-control-sm','name'=>'ladies_occupation','value'=>set_value('ladies_occupation',$id->ladies_occupation)]);  ?>
     <!-- <input name="ladies_occupation" style="    max-width: 169px;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Income :</label>
    </div>
    <div class="col-4">

       <?php echo form_input(['type'=>'text','style'=>'max-width: 274px','class'=>'example z-depth-1 form-control form-control-sm','name'=>'ladies_income','value'=>set_value('ladies_income',$id->ladies_income)]);  ?>
     <!-- <input name="ladies_income" style="    max-width: 274px;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Date Of Birth Of Younger Child :</label>
    </div>
    <div class="col-4">
      <demo id="demo">

         <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','style'=>'float: left;margin-right: 7px;max-width: 127px;','name'=>'ladies_d_o_b_of_younger_child','data-select'=>'date','value'=>set_value('ladies_d_o_b_of_younger_child',$id->ladies_d_o_b_of_younger_child)]);  ?>
    <!-- <input name="ladies_d_o_b_of_younger_child" type="" class="example z-depth-1 form-control form-control-sm" name="" data-select="date" style="float: left;margin-right: 7px;max-width: 127px;"> -->
<button type="button" class="example z-depth-1" data-toggle="select" style="    float: left;
    max-height: 26px;
    max-width: 200px;
    background-color: #e9ebee !important;
    font-size: 12px;
    font-weight: bold;
    color: slategrey;">Click me</button>
</demo>
    </div>
  </div>
 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Are You Pregnant Now :</label>
    </div>
    <div class="col-4" >

       <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'pregnant','value'=>set_value('pregnant',$id->pregnant)]);  ?>
     <!-- <input type="radio" name="pregnant" style="float: left" value="death">
          <label style="float: left;" class="example z-depth-2">Yes</label>
          &nbsp&nbsp&nbsp
          <input type="radio" style="float: left;" name ="pregnant"value="Alive">
            <label style="float: left;" class="example z-depth-2" >No</label> -->
    </div>
  </div>  

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Signature :</label>
    </div>
    <div class="col-4">
    <div style="float: left">
<input name="ladies_signature" class="example z-depth-1 btn btn-danger " type="file" style=" max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;" name="dem" />
    </div></div>
    
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Age Proof :</label>
    </div>
    <div class="col-4">
     <div style="float: left">
<input name="ladies_age_proof" class="example z-depth-1 btn btn-danger " type="file" style=" max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;" name="dem" />
    </div>
    </div>
  </div>
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Photograph :</label>
    </div>
    <div class="col-4">
     <div style="float: left">
<input name="ladies_photograph" class="example z-depth-1 btn btn-danger " type="file" style=" max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;" name="dem" />
    </div>
    </div>
  </div>
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Address Proof :</label>
    </div>
    <div class="col-4">
     <div style="float: left">
<input name="ladies_address_proof" class="example z-depth-1 btn btn-danger " type="file" style=" max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;" name="dem" />
    </div>
    </div>
  </div>
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Pan Card :</label>
    </div>
    <div class="col-4">
     <div style="float: left">
<input name="ladies_pancard" class="example z-depth-1 btn btn-danger " type="file" style=" max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;" name="dem" />
    </div>
    </div>
  </div>

 
</div></div></div>


<div class="container" style="margin-top: 10px;text-align: center;    border-color: #e9ebee;
    border-style: solid;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label style="       font-size: 14px;
    font-weight: bold;
    position: relative;
    bottom: 4px;
    color: white;
">Husband policy  Detailes</label><i class="fas fa-angle-right" style="font-size: 29px;
    color: white;
    padding-left: 54px;
    padding-top: -11px !important;
    position: relative;
    top: -5px;"></i> </div><br><br><br>
    
      
       <div class="container">
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr >
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Br.Unit </label> </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Policy No.</label> </th>
        <th scope="col" style="text-align: center;"><label class="example z-depth-2">Sum Assd.</label> </th>
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">Premium</label> </th>
       
        <th scope="col"  style="text-align: center;"><label class="example z-depth-2">D.O.Commencement</label> </th>
        
      </tr>
    </thead>
    <tbody>
      <tr class="example hoverable">
        <td>
               <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_br_unit_first','value'=>set_value('husband_policy_br_unit_first',$id->husband_policy_br_unit_first)]);  ?>
         <!-- <input name="husband_policy_br_unit_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
         <td>  
           <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_policy_no_first','value'=>set_value('husband_policy_policy_no_first',$id->husband_policy_policy_no_first)]);  ?>

         <!--  <input name="husband_policy_policy_no_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>

            <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_sum_assured_first','value'=>set_value('husband_policy_sum_assured_first',$id->husband_policy_sum_assured_first)]);  ?>
         <!-- <input name="husband_policy_sum_assured_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 

             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_premium_first','value'=>set_value('husband_policy_premium_first',$id->husband_policy_premium_first)]);  ?>
          <!-- <input name="husband_policy_premium_first" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        
         <td>

                 <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_d_o_commencement_first','value'=>set_value('husband_policy_d_o_commencement_first',$id->husband_policy_d_o_commencement_first)]);  ?>
        <!--   <input name="husband_policy_d_o_commencement_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
      </tr>
      <tr class="example hoverable">
        <td>
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_br_unit_secound','value'=>set_value('husband_policy_br_unit_secound',$id->husband_policy_br_unit_secound)]);  ?>
        <!--  <input name="husband_policy_br_unit_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
         <td>
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_policy_no_secound','value'=>set_value('husband_policy_policy_no_secound',$id->husband_policy_policy_no_secound)]);  ?>

          <!-- <input name="husband_policy_policy_no_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_sum_assured_secound','value'=>set_value('husband_policy_sum_assured_secound',$id->husband_policy_sum_assured_secound)]);  ?>
         <!--  <input name="husband_policy_sum_assured_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
        <td>
             <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_premium_secound','value'=>set_value('husband_policy_premium_secound',$id->husband_policy_premium_secound)]);  ?>

         <!--  <input name="husband_policy_premium_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
         <td>
                <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'husband_policy_d_o_commencement_secound','value'=>set_value('husband_policy_d_o_commencement_secound',$id->husband_policy_d_o_commencement_secound)]);  ?>
         <!--  <input name="husband_policy_d_o_commencement_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
      </tr>
      
    </tbody>
  </table>
</div>
</div>
</div></div>


<div class="container" style="margin-top: 10px;text-align: center;    border-color: #e9ebee;
    border-style: solid;margin-bottom: 20px">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label style="       font-size: 14px;
    font-weight: bold;
    position: relative;
    bottom: 4px;
    color: white;
">give Two refrence</label><i class="fas fa-angle-right" style="font-size: 29px;
    color: white;
    padding-left: 54px;
    padding-top: -11px !important;
    position: relative;
    top: -5px;"></i> </div><br><br><br>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="container">
        <div class="row">
          <div  class="col-lg-12"><label   class="example z-depth-2">Name</label></div>
        </div>
      </div>
       
      <div class="container">
     
      <div class="row" style="margin-bottom: 10px">
        <div class="col-lg-12">

          <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'refrance_name_first','value'=>set_value('refrance_name_first',$id->refrance_name_first)]);  ?>
            <!-- <input name="refrance_name_first"  class="example z-depth-1 form-control form-control-sm" type="text" >  -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'refrance_name_secound','value'=>set_value('refrance_name_secound',$id->refrance_name_secound)]);  ?>
       <!--    < input  name="refrance_name_secound" class="example z-depth-1 form-control form-control-sm" type="text" > -->     
        </div>
      </div>
    
     
    </div></div>
       <div class="col">
      <div class="container">
      <label class="example z-depth-2" style="    margin-left: -14px;"> Age</label>
      <div class="row" style="margin-bottom: 10px">
        <div class="col-lg-12">

          <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'refrance_age_first','value'=>set_value('refrance_age_first',$id->refrance_age_first)]);  ?>
            <!-- <input name="refrance_age_first"  class="example z-depth-1 form-control form-control-sm" type="text" >  -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'refrance_age_secound','value'=>set_value('refrance_age_secound',$id->refrance_age_secound)]);  ?>
           <!-- <input name="refrance_age_secound"  class="example z-depth-1 form-control form-control-sm" type="text" >  -->    
        </div>
      </div>
    
     
    </div></div>
       <div class="col" style="margin-bottom: 20px">
      <div class="container" >
      <label class="example z-depth-2" style="    margin-left: -14px;">Place</label>
      <div class="row">
        <div class="col-lg-12" style="margin-bottom: 10px">

          <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'refrance_place_first','value'=>set_value('refrance_place_first',$id->refrance_place_first)]);  ?>
           <!--  <input  name="refrance_place_first" class="example z-depth-1 form-control form-control-sm" type="text" >  -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <?php echo form_input(['type'=>'text','class'=>'example z-depth-1 form-control form-control-sm','name'=>'refrance_place_secound','value'=>set_value('refrance_place_secound',$id->refrance_place_secound)]);  ?>
           <!-- <input   name="refrance_place_secound" class="example z-depth-1 form-control form-control-sm" type="text" >  -->    
        </div>
      </div>
    
     
    </div></div>
  </div>


</div></div></div>


<div class="container" style="margin-top: 20px;margin-bottom: 20px">
  <div class="row">
    <div class="col-lg-12" style="text-align: center;background-color:  #e9ebee;padding-bottom: 11px;">
      <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'submit','style'=>'max-height:100%;background-color: #1976d2 !important;
    max-width: 300px !important;
    width: 300px;']); ?>
     
</div></div></div></div></div>

<?php include('footer.php') ?>