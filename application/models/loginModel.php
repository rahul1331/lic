<?php 
class LoginModel extends CI_Model{

	public function isvalidate($email,$password){
      $q=$this->db->where(['email'=>$email,'password'=>$password])
                  ->get('login');
           
      if ($q->num_rows()) {
      
         	return $q->row()->email;
         }   
         else{
         	return false;
         }
	}

	
 public function showlogin()
  {
  $q=$this->db->select()
            ->get('login');
            return $q->row();


  }

  public function update_account(Array $data)
  {
    return $this->db->update('login',$data);
  }

}



 ?>