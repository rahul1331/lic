<?php 
class LoginController extends CI_Controller
{
/*
 public function __construct()
  {  parent::__construct();
    if($this->session->userdata('email'))
      return redirect('admin/home');
    
  }*/

public function login(){
    $this->form_validation->set_rules('u_email','user email','required');
    $this->form_validation->set_rules('u_pass','user password','required|max_length[12]');
    $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
    if($this->form_validation->run()){
         $u_email=$this->input->post('u_email');
         $u_pass=$this->input->post('u_pass');
         $this->load->model('loginModel');
         $email=$this->loginModel->isvalidate($u_email,$u_pass);

         if($email)
         {
          
          $this->session->set_userdata('email',$email);
           /*$this->session->set_userdata('pass',$u_pass);*/
        
          return redirect('admin/search_datas');
          }
         else{
            $this->session->set_flashdata('login_failed','invalid username/password');
         return redirect('LoginController/login');
         }

     //echo "user email: ".$u_email,'</br>'."password is: ".$u_pass;
    }
    else
    {
         $this->load->view('users/login');
    }
  }



   public function logout(){
	$this->session->unset_userdata('email');
	/*$this->session->unset_userdata('pass');*/
	return redirect("LoginController/login");
}


}


 ?>