<?php 
class Admin extends CI_Controller{

public function __construct()
  {  parent::__construct();
    if(!$this->session->userdata('email'))
    	return redirect('loginController/login');
    
  }
	public function index(){
           
		return redirect('admin/search_datas');
	}
	
	public function search(){
		
		$this->load->view('admin/search');
	}
	public function new_form(){
		
		$this->load->view('admin/new_form');
	}
	public function setting(){
		
		$this->load->view('admin/setting');
	}
	public function all_users(){
		
		$this->load->view('admin/all_user_show');
	}
public function formInsert(){

$config=[
'upload_path'=>'./upload/',
'allowed_types'=>'jpg|png|jpeg'
];
$this->load->library('upload',$config);

	if($this->form_validation->run('add_rules') && $this->upload->do_upload()){

		$post=$this->input->post();
      
		$data=$this->upload->data();
		$image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
		$post['userfile']=$image_path;

		$this->load->model('formModel');

		if($this->formModel->add_data($post)){
		 $this->session->set_flashdata('msg','New User Added Sussesfully');
		 $this->session->set_flashdata('msg_class','alert alert-success');
			$t=$this->formModel->d($post['mob_first']);

			$this->load->view('admin/image',['t'=>$t]);

		}
		else{
			 $this->session->set_flashdata('msg','New User Not added Please try again');
		}
		
	}
	else{
		$this->session->set_flashdata('msg','New User Not added Please try again');
		$this->session->set_flashdata('msg_class','alert alert-danger');
          $this->load->view('admin/new_form');
	}
	
}

public function welcome(){
	$this->load->model('loginModel');
	$detailes=$this->loginModel->detailes();

	$this->load->view('admin/all_users',['detailes'=>$detailes]);

}


public function all_user_show(){
	$this->load->model('formModel');
	$show=$this->formModel->show();
	$this->load->view('admin/all_users',['show'=>$show]);

}

public function deluser(){
	$id=$this->input->post('id');
	$this->load->model('formModel');
	if($this->formModel->del($id))
	{
		$this->session->set_flashdata('msg','Delete Sussesfully');
		$this->session->set_flashdata('msg_class','alert-success');
	}
	else
	{
		$this->session->set_flashdata('msg','Please try again not delete');
		$this->session->set_flashdata('msg_class','alert-danger');
	}
	return redirect('admin/all_user_show');
}

public function userUpdate($id){

	if($this->form_validation->run('add_rules'))
  {
      $post=$this->input->post(); 
     $this->load->model('formModel');
      if($this->formModel->update_user($id,$post))
      {
         $this->session->set_flashdata('msg','User Update successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','user not update Please try again!!');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/all_user_show');
   }
  else
  {
    $this->edituser($id);
  }

	
}

 public function edituser($id)
 {
 $this->load->model('formModel');
 $id=$this->formModel->find_data($id);
//$this->load->view('admin/edit_users');
 $this->load->view('admin/edit_users',['id'=>$id]);

 }
public function editaccount(){
	$this->load->model('loginModel');
	$id=$this->loginModel->showlogin();
/*	echo $id->email;
	print_r($id);
	exit;*/
	$this->load->view('admin/setting',['id'=>$id]);
}


public function accoutUpdate(){
$post=$this->input->post(); 
 $this->load->model('loginModel');
 if($this->loginModel->update_account($post))
      {
         $this->session->set_flashdata('msg','User Update successfully');
          $this->session->set_flashdata('msg_class','alert-success');
      }
      else
      {
         $this->session->set_flashdata('msg','user not update Please try again!!');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/editaccount');
}


public function search_datas(){
	$this->load->model('formModel');
	$show=$this->formModel->show();
	$this->load->view('admin/search',['show'=>$show]);

}

public function show_user_details($id)
 {
 $this->load->model('formModel');
 $id=$this->formModel->find_data($id);
//$this->load->view('admin/edit_users');
 $this->load->view('admin/show_user_details',['id'=>$id]);

 }

}


 ?>