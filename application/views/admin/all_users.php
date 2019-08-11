<?php include('header.php') ?>
<style type="text/css">
	#label{
		font-size: 19px;
		
	}
	#list_label{
		font-size: 17px;
	}
</style>
 
<!-- container start -->
<div class="container" style=" max-width: 1111px;
    width: 1111px;">
<div class="container " style="margin-top: 100px; ">
       <?php if ($error=$this->session->flashdata('msg')) :
        $msg_class=$this->load->session->flashdata('msg_class')?>

       <div class="row">
              <div class='col-lg-12' style="text-align: center;">
                   <div class="alert <?php echo $msg_class ?>" style="    margin-left: -15px;margin-right: -12px;">
                    <?php echo $error; ?>
                   </div>
              </div>
       </div>
     <?php endif; ?>
</div>

<!-- container end -->
<div class="container" style="margin-top: 10px;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">

<div class="table-responsive">
  <table class="table" >
    <thead>
      <tr style="text-align: center;">
               <th scope="col" ><label class="example z-depth-1" id="label" style="    padding-left: 11px;
               padding-right: 11px;">Id</label> </th>
               <th scope="col"><label class="example z-depth-1" id="label" style="    padding-left: 15px;
               padding-right: 15px;">Username</label>  </th>
               <th scope="col"><label class="example z-depth-1" id="label" style="    padding-left: 15px;
               padding-right: 15px;">Phone Number</label> </th>
              <th scope="col"><label class="example z-depth-1" id="label" style="    padding-left: 38px;
              padding-right: 45px;">Edit</label> </th>
              <th scope="col" ><label class="example z-depth-1" id="label" style="    padding-left: 28px;
              padding-right: 41px;">delete</label> </th>
        
    </tr>
  </thead>
  <tbody>
    	<?php foreach ($show as $art): ?>
             <tr class="example hoverable" style="text-align: center;">
                 <th scope="row">
        	         <label  id="list_label">
        		        <a href="" style="color: black !important">
        		            <?= $art->id; ?>
        		        </a>
                   </label>
                  </th>
            <td >
                  <label id="list_label" style="color: black !important">
             	          <a href="" style="color: black !important">
            		           <?= $art->candidate_name; ?>
            	          </a>
                  </label>
           </td>
        <td>
        	       <label id="list_label">
        		         <a href="" style="color: black !important">
        			          <?= $art->mob_first; ?>   
                        </a>
                </label> 
        </td>
        <td>
        <?=  anchor("admin/edituser/{$art->id}",'Edit',['class'=>'btn btn-info']);  ?>
        </td>
        <td>

        <?= 
        form_open('admin/deluser'),
        form_hidden('id',$art->id),
        form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger','style'=>' width: 125px;
    max-width: 125px;']),
        form_close();

        ?>
       </td>
         </tr>
     <?php endforeach; ?>
    </tbody>
  </table>
</div>
</div>


</div>

























<!-- 

<div style="margin-top: 100px">
	
<div class="container" style="margin-top: 90px;">
<h1>login success fully <br> welcome to admin dashboard</h1>
<div class="table">
	<table>
		<thead>
		<tr>
			<th>id</th>
			<th>article title</th>
			<th>edit</th>
			<th>delete</th>
		</tr>
		</thead>
		<tbody>
			
				 <?php foreach ($detailes as $art): ?>
			   <tr>
				<td><?= $art->candidate_name; ?></td>
				</tr>
         	    <tr>
				<td><?= $art->father_name; ?></td>
			   </tr>
				<tr>
				<td><?= $art->mother_name; ?></td>
				</tr>
				<tr>
				<td><?= $art->dob; ?></td>
				</tr>
				<tr>
				<td><?= $art->categories; ?></td>
				</tr>
				<tr>
				<td><?= $art->age; ?></td>
                </tr>
                <tr>
				<td><?= $art->dem; ?></td>
			   </tr>
			   <tr>
				<td><?= $art->place_of_birth; ?></td>
				</tr>
				<tr>
				<td><?= $art->height; ?></td>
				</tr>
				<tr>
				<td><?= $art->weight; ?></td>
				</tr>
				<tr>
				<td><?= $art->mark_of_identy; ?></td>
				</tr>
				<tr>
				<td><?= $art->qulification; ?></td>
                </tr>





                 <tr>
				<td><?= $art->occupation; ?></td>
				</tr>
         	    <tr>
				<td><?= $art->nature_of_job; ?></td>
			   </tr>
				<tr>
				<td><?= $art->lenth_of_service; ?></td>
				</tr>
				<tr>
				<td><?= $art->income; ?>=>income</td>
				</tr>
				<tr>
				<td><?= $art->name_of_employer; ?>=>name_of_employer</td>
				</tr>
				<tr>
				<td><?= $art->candidate_image; ?>=>candidate_image</td>
                </tr>
                <tr>
				<td><?= $art->present_address; ?>=>present_address</td>
			   </tr>
			   <tr>
				<td><?= $art->email; ?>=>email</td>
				</tr>
				<tr>
				<td><?= $art->mob_first; ?>=>mob_first</td>
				</tr>
				<tr>
				<td><?= $art->mob_secound; ?>=>mob_secound</td>
				</tr>
				<tr>
				<td><?= $art->agency_code; ?>=>agency_code</td>
				</tr>
				<tr>
				<td><?= $art->plane_and_terms; ?>  =>plane_and_terms</td>
                </tr>
				
				 



                 <tr>
				<td><?= $art->sum_assured; ?></td>
				</tr>
         	    <tr>
				<td><?= $art->mode; ?></td>
			   </tr>
				<tr>
				<td><?= $art->premium; ?>->premium</td>
				</tr>
				<tr>
				<td><?= $art->noninee_name; ?>=>noninee_name/td>
				</tr>
				<tr>
				<td><?= $art->name_of_employer; ?>=>name_of_employer</td>
				</tr>
				<tr>
				<td><?= $art->candidate_image; ?>=>candidate_image</td>
                </tr>
                <tr>
				<td><?= $art->present_address; ?>=>present_address</td>
			   </tr>
			   <tr>
				<td><?= $art->email; ?>=>email</td>
				</tr>
				<tr>
				<td><?= $art->mob_first; ?>=>mob_first</td>
				</tr>
				<tr>
				<td><?= $art->mob_secound; ?>=>mob_secound</td>
				</tr>
				<tr>
				<td><?= $art->agency_code; ?>=>agency_code</td>
				</tr>
				<tr>
				<td><?= $art->plane_and_terms; ?>  =>plane_and_terms</td>
                </tr>
				
				 
       

      ,
       ,
      ,
      ,
        appointee_name,
        noninee_age,
      appointee_age,
        noninee_relation,
      appointee_relation
        father,
        father_age,
        father_health,
        father_age_death,
      father_cause_death,
        mother,
        mother_age,
      mother_health,
      mother_age_death,
      mother_cause_death,
        brother,
        brother_age,
        brother_health,
        brother_age_death,
        brother_cause_death,
        husband_and_wife,
      husband_and_wife_age,
      husband_and_wife_health,
        husband_and_wife_age_death,
      husband_and_wife_cause_death,
        children,
      children_age,
      children_health,
      children_death_age,
        children_cause_death,
      previous_ins_br_unit_first,
        previous_ins_policy_no_first,
      previous_ins_sum_assured_first,
        previous_ins_prem_first,
        previous_ins_t_t_first,
        previous_ins_mode_first,
        previous_ins_d_o_commencement_first,
        previous_ins_br_unit_secound,
      previous_ins_policy_no_secound,
      previous_ins_sum_assured_secound,
      previous_ins_prem_secound,
      previous_ins_mode_secound,
        previous_ins_d_o_commencement_secound,
        ladies_husband_name,
        ladies_occupation,
        ladies_income,
        ladies_d_o_b_of_younger_child,
        ladies_signature,
        ladies_age_proof,
      ladies_pancard,
        ladies_photograph,
        ladies_address_proof,
      husband_policy_br_unit_first,
      husband_policy_policy_no_first,
      husband_policy_sum_assured_first,
        husband_policy_premium_first,
        husband_policy_d_o_commencement_first,
        husband_policy_br_unit_secound,
        husband_policy_policy_no_secound,
      husband_policy_sum_assured_secound,
        husband_policy_premium_secound,
      husband_policy_d_o_commencement_secound ,
        refrance_name_first,
        refrance_name_secound,
      refrance_age_first,
      refrance_age_secound,
      refrance_place_first,
     refrance_place_secound,

			
			<?php endforeach; ?>
				
		</tbody>
	</table>


</div>
</div>
</div> -->
<?php include('footer.php') ?>