<?php include('header.php') ?>
         <div class="container " style="margin-top: 110px; max-width: 1111px;
    width: 1111px;">
                  <h1 style="text-align: center;">
  	                    <label style="color: #33b5e5;font-weight: bold;font-size: 60px;
                        ; font-family: sans-serif;">Search</label>
                  </h1>
                  <br>
                  <input type="text" id="input" placeholder="Case Sensitive" class="form-control example z-depth-2" style="border:3px solid #33b5e5 !important"><br>
                  <table id="table" class="table table-bordered table-striped example z-depth-5" style="box-shadow: 0px 0px 0px 0px rgba(0,0,0,0),0px 0px 35px 0 rgba(-1,0,0,1)!important;">
                  <thead>
                         <tr>
                             <th style="text-align: center;font-size: 19px" >
                                 <label style="font-weight: bolder;color: #1976d2;padding-left: 20px;    padding-right: 20px;" class="example z-depth-3" >
                                     Name
                                  </label>
                              </th>
                              <th style="text-align: center;font-size: 19px;" >
                                  <label style="font-weight: bolder;color: #1976d2;padding-left: 20px;padding-right: 20px;" class="example z-depth-3">
                                    phone no
                                  </label>
                              </th>
                              <th style="text-align: center;font-size: 19px">
                                  <label style="font-weight: bolder;color: #1976d2;padding-left: 20px;padding-right: 20px;" class="example z-depth-3">
                                    Show
                                  </label>
                              </th>
                         </tr>
                </thead>
                <tbody>
        	           <?php foreach ($show as $art): ?>
                          <tr style="">
                                <td style="text-align: center;background-color: white !important">
                                      <label style="font-size: 17px;font-weight: 600;font-family: sans-serif;">
            		                      <?= $art->candidate_name; ?>
            	                        </label>
                                </td>
                               <td style="text-align: center;background-color: white !important">
                                      <label style="font-size: 17px;font-weight: 600;font-family: sans-serif;">
        			                        <?= $art->mob_first; ?>
        		                          </label>
        	                      </td>
        	                      <td style="text-align: center;background-color: white !important">
                                        <label style="color: white !important;"> 
                                              <?=  anchor("admin/show_user_details/{$art->id}",'<label style="color:white;font-weight:bolder;padding-top:3px;background-colour:#1976d2 !important;    padding-left: 35px;padding-right: 35px;">Show</label>',['class'=>'btn aqua-gradient']);  ?>
                                        </label>
        	                      </td>
        	              </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>


<?php include('footer.php') ?>