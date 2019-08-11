<?php
class Htmltopdf_model extends CI_Model
{
 function fetch()
 {
  $this->db->order_by('id', 'DESC');
  return $this->db->get('form');
 }
 function fetch_single_details($customer_id)
 {
  $this->db->where('id', $customer_id);
  $data = $this->db->get('form');

  $output = '<table width="100%" cellspacing="5" cellpadding="5" >';
  foreach($data->result() as $row)
  {
   $output .= '



   <div class="container" style="border: solid 3px #2980b9;max-width: 914px;">
           <div class="row" >
                  <div class="col-md-4" style="text-align:center;">
                     <div class="view overlay">
                       <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(7).jpg" class="img-fluid" alt="Sample image with waves effect." style="width:200px;height:200px;margin-top: 10px;">
                         <a>
                            <div class="mask waves-effect rgba-white-slight"></div>
                         </a>
                     </div>
                 </div>

                 <div class="col-md-8" style="text-align:center;" >

                         <div class="row">
                            <div class="col-md-6">
                                 <lable id="fontx">Candidate Name : </lable>
                                        <span>
                                            <lable id="fontx">'.$row->candidate_name.'</lable>
                                        </span>
                              </div>
                           <div class="col-md-6">
                                  <lable id="fontx" >Policy Name : </lable>
                                        <span>
                                           <lable id="fontx">'.$row->plane_and_terms.'</lable>
                                        </span>
                           </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                 <lable id="fontx">Candidate Name : </lable>
                                        <span>
                                            <lable id="fontx">'.$row->candidate_name.'</lable>
                                        </span>
                              </div>
                           <div class="col-md-6">
                                  <lable id="fontx" >Policy Name : </lable>
                                        <span>
                                           <lable id="fontx">'.$row->plane_and_terms.'</lable>
                                        </span>
                           </div>
                        </div>


                  </div>
          </div>


   <table>

   <tr >
    
    <td width="25%" >
   <div class="container" style="background-color: blue; ">
  <div class="row" >
    <div class="col-md-4" >

    <p><b>id : </b>'.$row->id.'</p>
     <p><b>candidate_name : </b>'.$row->candidate_name.'</p>
     <p><b>father name: </b>'.$row->father_name.'</p>
     <p><b>mother_name : </b>'.$row->mother_name.'</p>
      <p><b>dob : </b>'.$row->dob.'</p>
     <p><b>Age: </b>'.$row->age.'</p>
     <p><b>userfile: </b>'.$row->userfile.'</p>
     <p><b>place_of_birth: </b>'.$row->place_of_birth.'</p>
      <p><b>height: </b>'.$row->height.'</p>


    </div>
    <div class="col-md-4">

     <p><b>weight : </b>'.$row->weight.'</p>
     <p><b>mark_of_identy: </b>'.$row->mark_of_identy.'</p>
     <p><b>qulification : </b>'.$row->qulification.'</p>
      <p><b>occupation : </b>'.$row->occupation.'</p>
     <p><b>nature_of_job : </b>'.$row->nature_of_job.'</p>
     <p><b>lenth_of_service : </b>'.$row->lenth_of_service.'</p>



    </div>
    <div class="col-md-4">


         
         <p ><b>income: </b>'.$row->income.'</p>
      <p><b>name_of_employer : </b>'.$row->name_of_employer.'</p>
     <p><b>candidate_image : </b>'.$row->candidate_image.'</p>
     <p><b>present_address : </b>'.$row->present_address.'</p>
     <p><b>email : </b>'.$row->email.'</p>

    </div>
  </div>
</div>



      


    
    </td>
   </tr>
   </table></div>


   ';
  }
  $output .= '
  <tr>
   <td colspan="2" align="center"><a href="'.base_url().'admin/search_datas" class="btn btn-primary">Back</a></td>
  </tr>
  ';
  $output .= '</table>';
  return $output;
 }
}

?>