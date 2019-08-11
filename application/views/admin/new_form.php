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
<div class="container" style=" max-width: 1111px;
    width: 1111px;">
    <?php echo form_open_multipart('admin/formInsert'); ?>

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
    <div class="col-lg-12" style="text-align: center;background-color:  #1976d2;padding-bottom: 11px;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;"><label style="color: white ;    position: relative;
    top: 8px;font-size: 23px;
    font-weight: bolder;">LIC Application Form</label></div></div>
</div>
<div class="container example z-depth-5" style="margin-top: 10px;text-align: center;    border-color: #1976d2;
    border-style: solid;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

  <div class="row " style="text-align: center;">
    <div class="d-inline-flex p-2 col-example "  style="background-color:#1976d2;    
    max-width: 201px;
    width: 201px;
    max-height: 32px;">
      <label  style="       font-size: 14px;
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
    
      
       <div class="container " >  


<div class="row justify-content-center " style="    margin-bottom: 10px;">
    <div class="col-4">
     <label  class="example z-depth-2" style="float: right;">Candidate Name :</label>
    </div>
    <div class=" col-4 " >
      <?php echo form_input(['type'=>'text','class'=>' example z-depth-1   form-control form-control-sm','style'=>'width: 100%;max-width: 100%;','name'=>'candidate_name','value'=>set_value('candidate_name','')]);  ?><!-- 
     <input  style="width: 100%;max-width: 100%;"  id="b" class=" example z-depth-1   form-control form-control-sm" type="text"  name="candidate_name">
 -->    </div>

  </div>

  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right;">Father Name :</label>
    </div>
    <div class="col-4">
     <input  style="    max-width: 169px;" class="example z-depth-1 form-control form-control-sm" type="text" name="father_name">
    </div>
  </div>   

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Mother Name :</label>
    </div>
    <div class="col-4">
     <input style="    max-width: 274px;"  class="example z-depth-1 form-control form-control-sm" type="text" name="mother_name">
    </div>
  </div>

    <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Date of birth :</label>
    </div>
    <div class="col-4">
     <demo id="demo">
    <input type="" class="example z-depth-1 form-control form-control-sm" name="dob" data-select="date" style="float: left;margin-right: 7px;max-width: 127px;">
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
     <input   class="example z-depth-1 form-control form-control-sm" type="text" name="age" style="max-width: 50px;" >
    </div>
  </div>   
<div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Age Proof :</label>
    </div>
    <div class="col-4" >
    <div style="float: left">
      <?php echo form_upload(['name'=>'userfile']);?>
<!-- <input class="example z-depth-1 btn btn-danger " type="file" style=" max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;" name="userfile" /> -->
    </div></div>
  </div>
  <div class="row justify-content-center"  style="    margin-bottom: 10px;" >
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Place Of Birth :</label>
    </div>
    <div class="col-4">
     <input style="width: 100%;max-width: 100%;" name="place_of_birth"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div> 

  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Height:</label>
    </div>
    <div class="col-4">
     <input style="max-width: 50px;
    text-align: center;"  name="height"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Weight :</label>
    </div>
    <div class="col-4">
     <input style="max-width: 127px;" name="weight" class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Mark Of Identification :</label>
    </div>
    <div class="col-4">
     <input style="    max-width: 274px;" name="mark_of_identy" class=" example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>
       
   
     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Qualifiacation :</label>
    </div>
     <div class="col-4">
       <input style=" float: left;max-height: 26px;;max-width: 130px;
    background-color: #e9ebee !important;padding-top: 2px; font-size: 14px;"name="qulification" class=" example z-depth-1 form-control form-control-sm" type="text" >
    
    </div>
  </div> 

    <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Occupation :</label>
    </div>
    <div class="col-4">
     <input name="occupation"  style="width: 100%;max-width: 100%;"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>  
   

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Nature Of Job :</label>
    </div>
    <div class="col-4">
     <input name="nature_of_job"  style="    max-width: 169px;"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>

  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Length Of Service  :</label>
    </div>
    <div class="col-4">
     <input name="lenth_of_service" style="max-width: 50px;
    ;"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>
   
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Income :</label>
    </div>
    <div class="col-4">
     <input name="income" style="max-width: 127px;"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div> 
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Name Of Employer :</label>
    </div>
    <div class="col-4">
     <input name="name_of_employer" style="width: 100%;max-width: 100%;"   class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>
  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Candidate Image :</label>
    </div>
    <div class="col-4">
    <div style="float: left">
<input name="candidate_image" class="example z-depth-1 btn btn-danger " type="file" style=" max-height: 26px;;max-width: 200px;border:1px solid #ced4da;
    background-color: #e9ebee !important;padding-top: 0px;
    padding-left: 0px;    color: black !important;    font-size: 12px;" name="dem" />
    </div>
    </div>
  </div>
  



  

 
</div></div></div>


<div class="container example z-depth-5" style="margin-top: 10px;text-align: center;    border-color: #1976d2;
    border-style: solid;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

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
     <input name="present_address" style="width: 100%;max-width: 100%;" class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>
 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Email :</label>
    </div>
    <div class="col-4">
     <input name="email" style="max-width: 180px;" class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>  

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Mobile No :</label>
    </div>
    <div class="col-4">
      <div class="row" style="    float: left;">
        <div class="col-lg-6">
          <input name="mob_first" style="max-width: 100px"  class="example z-depth-1 form-control form-control-sm" type="text"  placeholder="mobile 1">
        </div>
        <div class="col-lg-6" style="margin-left: 0px;">
          <input name="mob_secound" style="max-width: 100px;"  class="example z-depth-1 form-control form-control-sm" type="text"  placeholder="mobile 2">
        </div>
      </div>
     
     
    </div>
  </div>
 
</div></div></div>


<div class="container example z-depth-5" style="margin-top: 10px;text-align: center;    border-color: #1976d2;
    border-style: solid;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

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
     <input name="agency_code" style="max-width: 100px;" class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>  

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Plane & Terms :</label>
    </div>
    <div class="col-4">
     <input name="plane_and_terms" style="width: 100%;max-width: 100%;"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Sum Assured :</label>
    </div>
    <div class="col-4">
     <input  name="sum_assured" class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Mode :</label>
    </div>
    <div class="col-4">
     <input name="mode" style="max-width: 100px;"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>
 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Premium :</label>
    </div>
    <div class="col-4">
     <input name="premium"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>  

 
</div></div></div>


<div class="container example z-depth-5" style="margin-top: 10px;text-align: center;    border-color: #1976d2;
    border-style: solid;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
        max-width: 300px;
    width: 300px;
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
     <input name="noninee_name"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>
   <div class="row" style="margin-top: 4px">
    <div class="col">
     <label class="example z-depth-2"> Appointee's</label>
    </div>
    <div class="col" >
      <input  name="appointee_name" class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>
    </div>

    <div class="col-sm"  >
      <label class="example z-depth-2">age</label>
      <div class="row" >
         <div class="container">
           <div class="row" style="margin-bottom: 10px">
             <div class="col-lg-12" style="text-align: center;padding-left:90px">
             <input name="noninee_age"  class="example z-depth-1 form-control form-control-sm" type="text" >
             </div>
           </div>
           <div class="row">
             <div class="col-lg-12" style="text-align: center;padding-left:90px">
             <input name="appointee_age"  class="example z-depth-1 form-control form-control-sm" type="text" >
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
             <input name="noninee_relation"  class="example z-depth-1 form-control form-control-sm" type="text" >
             </div>
           </div>
           <div class="row">
             <div class="col-lg-12" style="text-align: center;padding-left:90px">
             <input name="appointee_relation"  class="example z-depth-1 form-control form-control-sm" type="text" >
             </div>
           </div>
         </div>
  </div>
    </div></div></div>
      
       

</div></div>


<div class="container example z-depth-5" style="margin-top: 10px;text-align: center;    border-color: #1976d2;
    border-style: solid;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

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
          <input type="radio" name="father" value="death">
          <label class="example z-depth-2">Death</label>
          &nbsp&nbsp&nbsp
          <input type="radio" name ="father" value="Alive">
            <label class="example z-depth-2" >Alive</label>
        </td>
        <td> <input name="father_age"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="father_health"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="father_age_death"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="father_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
       
      </tr>
      <tr class="example hoverable">
        <th scope="row"><label class="example z-depth-2">Mother</label></th>
       <td>
          <input type="radio" name="mother" value="death">
          <label class="example z-depth-2">Death</label>
          &nbsp&nbsp&nbsp
          <input type="radio" name ="mother" value="Alive">
            <label class="example z-depth-2" >Alive</label>
        </td>
        <td> <input name="mother_age"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="mother_health" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="mother_age_death"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="mother_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        
      </tr>
      <tr class="example hoverable">
        <th scope="row"><label class="example z-depth-2">Brother</label></th>
         <td>
          <input type="radio" name="brother" value="death">
          <label class="example z-depth-2">Death</label>
          &nbsp&nbsp&nbsp
          <input type="radio" name ="brother"value="Alive">
            <label class="example z-depth-2" >Alive</label>
        </td>
        <td> <input name="brother_age"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="brother_health"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input  name="brother_age_death" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="brother_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
       
      </tr>
      <tr class="example hoverable">
        <th scope="row"><label class="example z-depth-2">Husband/Wife</label></th>
         <td >
          <input type="radio" name="husband_and_wife" value="death">
          <label class="example z-depth-2">Death</label>
          &nbsp&nbsp&nbsp
          <input type="radio" name ="husband_and_wife"value="Alive">
            <label class="example z-depth-2" >Alive</label>
        </td>
        <td> <input name="husband_and_wife_age"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="husband_and_wife_health"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="husband_and_wife_age_death"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="husband_and_wife_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
       
      </tr>
      <tr class="example hoverable">
        <th scope="row"><label class="example z-depth-2">Children</label></th>
         <td>
          <input type="radio" name="children" value="death">
          <label class="example z-depth-2">Death</label>
          &nbsp&nbsp&nbsp
          <input type="radio" name ="children"value="Alive">
            <label class="example z-depth-2" >Alive</label>
        </td>
        <td> <input name="children_age"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="children_health"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="children_death_age"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="children_cause_death"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
       
      </tr >
    </tbody>
  </table>
</div>
</div>
 
</div></div>


<div class="container example z-depth-5" style="margin-top: 10px;text-align: center;    border-color: #1976d2;
    border-style: solid;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
    max-width: 285px;
    width: 285px;
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
        <td> <input name="previous_ins_br_unit_first"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
         <td> <input name="previous_ins_policy_no_first"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input  name="previous_ins_sum_assured_first" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="previous_ins_prem_first"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
         <td> <input name="previous_ins_t_t_first"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="previous_ins_mode_first"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input  name="previous_ins_d_o_commencement_first" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
       
      </tr>
      <tr class="example hoverable">
        <td> <input  name="previous_ins_br_unit_secound" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
         <td> <input  name="previous_ins_policy_no_secound" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="previous_ins_sum_assured_secound"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input  name="previous_ins_prem_secound" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
         <td> <input  name="previous_ins_t_t_secound" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="previous_ins_mode_secound"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input  name="previous_ins_d_o_commencement_secound" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
       
      </tr>
      
    </tbody>
  </table>
</div>

 
</div></div></div>
 
<div class="container example z-depth-5" style="margin-top: 10px;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">
  <div class="row">
    <div class="col-lg-12" style="text-align: center;background-color:  #1976d2;padding-bottom: 11px;"><label style="color: white;    position: relative;
    top: 8px;font-size: 23px;
    font-weight: bolder;">IN CASE OF LADIES</label></div></div>
</div>



<div class="container example z-depth-5" style="margin-top: 10px;text-align: center;    border-color: #1976d2;
    border-style: solid;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

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
     <input name="ladies_husband_name" style="width: 100%;max-width: 100%;"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>  

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Occupation :</label>
    </div>
    <div class="col-4">
     <input name="ladies_occupation" style="    max-width: 169px;"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Income :</label>
    </div>
    <div class="col-4">
     <input name="ladies_income" style="    max-width: 274px;"  class="example z-depth-1 form-control form-control-sm" type="text" >
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Date Of Birth Of Younger Child :</label>
    </div>
    <div class="col-4">
      <demo id="demo">
    <input name="ladies_d_o_b_of_younger_child" type="" class="example z-depth-1 form-control form-control-sm" name="" data-select="date" style="float: left;margin-right: 7px;max-width: 127px;">
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
     <input type="radio" name="pregnant" style="float: left" value="yes">
          <label style="float: left;" class="example z-depth-2">Yes</label>
          &nbsp&nbsp&nbsp
          <input type="radio" style="float: left;" name ="pregnant"value="no">
            <label style="float: left;" class="example z-depth-2" >No</label>
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


<div class="container example z-depth-5" style="margin-top: 10px;text-align: center;    border-color: #1976d2;
    border-style: solid;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
        max-width: 265px;
    width: 265px;

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
        <td> <input name="husband_policy_br_unit_first"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
         <td> <input name="husband_policy_policy_no_first"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="husband_policy_sum_assured_first"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="husband_policy_premium_first" class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        
         <td> <input name="husband_policy_d_o_commencement_first"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
       
      </tr>
      <tr class="example hoverable">
        <td> <input name="husband_policy_br_unit_secound"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
         <td> <input name="husband_policy_policy_no_secound"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
        <td> <input name="husband_policy_sum_assured_secound"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
       
        <td> <input name="husband_policy_premium_secound"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
         <td> <input name="husband_policy_d_o_commencement_secound"  class="example z-depth-1 form-control form-control-sm" type="text" ></td>
       
      </tr>
      
    </tbody>
  </table>
</div>
</div>
</div></div>


<div class="container example z-depth-5" style="margin-top: 10px;text-align: center;    border-color: #1976d2;
    border-style: solid;margin-bottom: 20px;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

  <div class="row" style="text-align: center;">
    <div class="d-inline-flex p-2 col-example" style="background-color:#1976d2;    
       max-width: 220px;
    width: 220px;

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
            <input name="refrance_name_first"  class="example z-depth-1 form-control form-control-sm" type="text" > 
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
           <input  name="refrance_name_secound" class="example z-depth-1 form-control form-control-sm" type="text" >     
        </div>
      </div>
    
     
    </div></div>
       <div class="col">
      <div class="container">
      <label class="example z-depth-2" style="    margin-left: -14px;"> Age</label>
      <div class="row" style="margin-bottom: 10px">
        <div class="col-lg-12">
            <input name="refrance_age_first"  class="example z-depth-1 form-control form-control-sm" type="text" > 
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
           <input name="refrance_age_secound"  class="example z-depth-1 form-control form-control-sm" type="text" >     
        </div>
      </div>
    
     
    </div></div>
       <div class="col" style="margin-bottom: 20px">
      <div class="container" >
      <label class="example z-depth-2" style="    margin-left: -14px;">Place</label>
      <div class="row">
        <div class="col-lg-12" style="margin-bottom: 10px">
            <input  name="refrance_place_first" class="example z-depth-1 form-control form-control-sm" type="text" > 
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
           <input   name="refrance_place_secound" class="example z-depth-1 form-control form-control-sm" type="text" >     
        </div>
      </div>
    
     
    </div></div>
  </div>


</div></div></div>


<div class="container example z-depth-5" style="margin-top: 20px;margin-bottom: 20px;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">
  <div class="row">
    <div class="col-lg-12" style="text-align: center;background-color:  #1976d2;padding-bottom: 11px;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">
      <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-danger','value'=>'submit','style'=>'max-height:100%;background-color: !important;
    max-width: 300px !important;
    width: 300px;margin-top: 15px;font-size: 16px;
    font-weight: bolder;']); ?>
     
</div></div></div></div></div>
</div>
<?php include('footer.php') ?>