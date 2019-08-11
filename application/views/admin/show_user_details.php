<?php include('header.php') ?>
<style type="text/css">
  #accordian_font{
        font-size: 20px;
    font-family: sans-serif;
    font-weight: bold;
    color: black;
  }
</style>
<div class="container" style="margin-top: 70px; max-width: 1111px;
    width: 1111px;">
<!--Accordion wrapper-->
<div  class="jumbotron text-center" style="background-color: white !important;    padding-top: 18px;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">
  <div class="col-lg-12" >
        <div class="avatar mx-auto">
              <img style="width: 250px;height: 230px;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;" src="<?= $id->userfile; ?>" alt="Sample avatar">
              <h2 class="h2-responsive">(<?= $id->candidate_name; ?>)</h2>
         </div>
  </div>

<br>

<div class="accordion md-accordion accordion-4" id="accordionEx2" role="tablist" aria-multiselectable="true" style="box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header z-depth-1 teal lighten-4" role="tab" id="heading10" style="background-color: #64b5f6 !important">
      <a data-toggle="collapse" data-parent="#accordionEx2" href="#collapse10" aria-expanded="true"
        aria-controls="collapse10">
        <h4 class="mb-0 black-text text-center font-weight-bold text-uppercase" style="color: white !important">
          Personal Details
        </h4>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapse10" class="collapse show" role="tabpanel" aria-labelledby="heading10"
      data-parent="#accordionEx2" style="background-color: #64b5f6 !important">
      <div class="card-body rgba-teal-strong white-text" style="background-color: #64b5f6 !important">
       <div class="container">
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Father Name:</label>
                 <span><label ><?= $id->father_name ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Mother Name:</label>
                 <span><label ><?= $id->mother_name ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Date Of Birth:</label>
                 <span><label ><?= $id->dob ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Place of Birth:</label>
                 <span><label><?= $id->father_name ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Present Address:</label>
                 <span><label ><?= $id->present_address ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">email:</label>
                 <span><label ><?= $id->father_name ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Phone No: </label>
                 <span><label ><?= $id->mob_first ?></label>
                     <span><label><?= $id->mob_first ?></label></span>
                 </span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Age:</label>
                 <span><label><?= $id->age ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">weight:</label>
                 <span><label><?= $id->weight ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">height:</label>
                 <span><label><?= $id->height ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Mark Of Identification :</label>
                 <span><label><?= $id->mark_of_identy ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Qualifiacation:</label>
                 <span><label><?= $id->qulification ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Occupation:</label>
                 <span><label><?= $id->occupation ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Nature Of Job :</label>
                 <span><label><?= $id->nature_of_job ?></label></span>
             </div>
         </div>
          <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Length Of Service :</label>
                 <span><label><?= $id->lenth_of_service ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Income:</label>
                 <span><label><?= $id->income ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Name Of Employer :</label>
                 <span><label><?= $id->name_of_employer ?></label></span>
             </div>
         </div>
       </div>
      </div>
    </div>
  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header z-depth-1 teal lighten-3" role="tab" id="heading11" style="background-color: #42a5f5 !important">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse11"
        aria-expanded="false" aria-controls="collapse11">
        <h4 class="mb-0 black-text text-center font-weight-bold text-uppercase" style="color: white !important">
          Policy details
        </h4>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapse11" class="collapse" role="tabpanel" aria-labelledby="heading11"
      data-parent="#accordionEx2">
      <div class="card-body rgba-teal-strong white-text" style="background-color: #42a5f5 !important">
       <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Agency Code :</label>
                 <span><label><?= $id->agency_code ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Plane & Terms:</label>
                 <span><label><?= $id->plane_and_terms ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Sum Assured :</label>
                 <span><label><?= $id->sum_assured ?></label></span>
             </div>
         </div>
          <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Mode :</label>
                 <span><label><?= $id->mode ?></label></span>
             </div>
         </div>
         <div class="row">
           <div class="col-lg-12" style="text-align: center;">
                 <label id="accordian_font">Premium  :</label>
                 <span><label><?= $id->premium  ?></label></span>
             </div>
         </div>
      </div>
    </div>
  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header z-depth-1 teal lighten-2" role="tab" id="heading12" style="background-color: #2196f3 !important">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse12"
        aria-expanded="false" aria-controls="collapse12">
        <h4 class="mb-0 black-text text-center font-weight-bold text-uppercase" style="color: white !important">
          Family Details
        </h4>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapse12" class="collapse" role="tabpanel" aria-labelledby="heading12"
      data-parent="#accordionEx2">
      <div class="card-body rgba-teal-strong white-text" style="background-color: #2196f3 !important">
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

      </div>
    </div>

  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header z-depth-1 teal lighten-1" role="tab" id="heading13" style="background-color: #1e88e5  !important">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse13"
        aria-expanded="true" aria-controls="collapse13">
        <h4 class="mb-0 black-text text-center font-weight-bold text-uppercase" style="color: white !important">
          Previous Insurance detailes
        </h4>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapse13" class="collapse" role="tabpanel" aria-labelledby="heading13"
      data-parent="#accordionEx2">
      <div class="card-body rgba-teal-strong white-text" style="background-color: #1e88e5  !important">
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

 
</div>
      </div>
    </div>
  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header z-depth-1 teal" role="tab" id="heading14" style="background-color: #1976d2 !important">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx2" href="#collapse14"
        aria-expanded="false" aria-controls="collapse14">
        <h4 class="mb-0 black-text text-center font-weight-bold text-uppercase" style="color: white !important">
         In Case Of laddies
        </h4>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapse14" class="collapse" role="tabpanel" aria-labelledby="heading14"
      data-parent="#accordionEx2">
      <div class="card-body rgba-teal-strong white-text" style="background-color: #1976d2 !important">
         <div class="container">  

  <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Husband Name :</label>
    </div>
    <div class="col-4">
                  <div class="example z-depth-5">
                           <label ><?=$id->ladies_husband_name?></label>
                    </div>
  

     <!-- <input name="ladies_husband_name" style="width: 100%;max-width: 100%;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>  

     <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Occupation :</label>
    </div>
    <div class="col-4">
                     <div class="example z-depth-5">
                           <label ><?=$id->ladies_occupation?></label>
                    </div>
     
       
     <!-- <input name="ladies_occupation" style="    max-width: 169px;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Income :</label>
    </div>
    <div class="col-4">
                    <div class="example z-depth-5">
                           <label ><?=$id->ladies_income?></label>
                    </div>
     
    </div>
      
     <!-- <input name="ladies_income" style="    max-width: 274px;"  class="example z-depth-1 form-control form-control-sm" type="text" > -->
    </div>
  </div>

 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Date Of Birth Of Younger Child :</label>
    </div>
    <div class="col-4">
      <div class="example z-depth-5">
                           <label ><?=$id->ladies_d_o_b_of_younger_child?></label>
                    </div>
     
    </div>
  </div>
 <div class="row justify-content-center"  style="    margin-bottom: 10px;">
    <div class="col-4">
     <label class="example z-depth-2" style="float: right">Are You Pregnant Now :</label>
    </div>
    <div class="col-4" >
                <div class="example z-depth-5">
                           <label ><?=$id->pregnant?></label>
                    </div>
       
     <!-- <input type="radio" name="pregnant" style="float: left" value="death">
          <label style="float: left;" class="example z-depth-2">Yes</label>
          &nbsp&nbsp&nbsp
          <input type="radio" style="float: left;" name ="pregnant"value="Alive">
            <label style="float: left;" class="example z-depth-2" >No</label> -->
    </div>
  </div>  

   
  
   
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


          <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_br_unit_first?></label>
                    </div>
               
         <!-- <input name="husband_policy_br_unit_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
         <td>  
           <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_policy_no_first ?></label>
            </div>
          
         <!--  <input name="husband_policy_policy_no_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td>
            <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_sum_assured_first ?></label>
            </div>
           
         <!-- <input name="husband_policy_sum_assured_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 
                <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_premium_first ?></label>
            </div>
            
          <!-- <input name="husband_policy_premium_first" class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        
         <td>     
                  <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_d_o_commencement_first ?></label>
            </div>

               
        <!--   <input name="husband_policy_d_o_commencement_first"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
      </tr>
      <tr class="example hoverable">
        <td>
           <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_br_unit_secound ?></label>
                    </div>
           
        <!--  <input name="husband_policy_br_unit_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
         <td>   
            <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_policy_no_secound ?></label>
                    </div>

            

          <!-- <input name="husband_policy_policy_no_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
        <td> 

           <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_sum_assured_secound ?></label>
                    </div>
               
            
         <!--  <input name="husband_policy_sum_assured_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
        <td>
          <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_premium_secound ?></label>
                    </div>
               
             

         <!--  <input name="husband_policy_premium_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
         <td>    
                  <div class="example z-depth-5">
                           <label ><?=$id->husband_policy_d_o_commencement_secound ?></label>
                    </div>
               
         <!--  <input name="husband_policy_d_o_commencement_secound"  class="example z-depth-1 form-control form-control-sm" type="text" > --></td>
       
      </tr>
      
    </tbody>
  </table>
</div>

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
                   <div class="example z-depth-5">
                           <label ><?=$id->refrance_name_first  ?></label>
                    </div>
         
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
                       <div class="example z-depth-5">
                           <label ><?=$id->refrance_name_secound  ?></label>
                        </div>
        </div>
      </div>
    
     
    </div></div>
       <div class="col">
      <div class="container">
      <label class="example z-depth-2" style="    margin-left: -14px;"> Age</label>
      <div class="row" style="margin-bottom: 10px">
        <div class="col-lg-12">
                        <div class="example z-depth-5">
                           <label ><?=$id->refrance_age_first  ?></label>
                        </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
                      <div class="example z-depth-5">
                           <label ><?=$id->refrance_age_secound  ?></label>
                       </div> 
        </div>
      </div>
    
     
    </div></div>
       <div class="col" style="margin-bottom: 20px">
      <div class="container" >
      <label class="example z-depth-2" style="    margin-left: -14px;">Place</label>
      <div class="row">
        <div class="col-lg-12" style="margin-bottom: 10px">
         <div class="col-lg-12" style="text-align: center;">
          <div class="example z-depth-5">
          <label ><?=$id->refrance_place_first  ?></label>
          </div>   
          
           <!--  <input  name="refrance_place_first" class="example z-depth-1 form-control form-control-sm" type="text" >  -->
        </div>
      </div>
      <style type="text/css">
        
      </style>
      <div class="row" style="padding-left: 31px;">
         <div class="col-lg-12" style="text-align: center;    width: 242px;">
          <div class="example z-depth-5">
          <label ><?=$id->refrance_place_secound  ?></label>
          </div>        
           
        </div>
      </div>
    
     
    </div></div>
  </div>


</div></div></div>
</div>
</div></div>

 
</div></div></div>

      </div>
    </div>
  </div>
  <!-- Accordion card -->
</div>
<!--/.Accordion wrapper-->
</div>





</div>





































<!-- <div style="margin-top: 100px"> -->
<!-- <?= $id->id; ?> -->
<!-- <div class="container">
	 <div class="row">
    <div class="col-8">
      <div class="row">
    <div class="col-6">
      <label>Name:</label>
      <span>
      	<label><?= $id->candidate_name; ?></label>
      </span>
    </div>
    <div class="col-6">
      <label>Policy Name:</label>
      <span>
      	<label><?= $id->plane_and_terms; ?></label>
      </span>
    </div>
  </div>

       <div class="row">
    <div class="col">
      <label>Agency Code:</label>
      <span>
      	<label><?= $id->agency_code; ?></label>
      </span>
    </div>
    <div class="col">
    <label>Sum Assured:</label>
      <span>
      	<label><?= $id->sum_assured; ?></label>
      </span>
    </div>
    <div class="col">
     <label>Mode:</label>
      <span>
      	<label><?= $id->mode; ?></label>
      </span>
    </div>
    <div class="col">
     <label>Premium:</label>
      <span>
      	<label><?= $id->premium; ?></label>
      </span>
    </div>
  </div>


    </div>
    <div class="col-4">
            <div class="view overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(7).jpg" class="img-fluid" alt="Sample image with waves effect.">
                      <a>
                      <div class="mask waves-effect rgba-white-slight"></div>
                      </a>
            </div>
    </div>
  </div>
</div>
</div> -->


<!-- <div style="margin-top: 100px"> -->
<!-- News jumbotron -->
<!-- <div class="jumbotron text-center hoverable p-4">
<div class="container">
	<div class="row">
		<img src="<?= $id->userfile; ?>">
	</div>
</div>

</div> -->
<!-- News jumbotron -->
<!-- </div> -->



<?php include('footer.php') ?>