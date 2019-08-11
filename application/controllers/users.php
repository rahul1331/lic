<?php 

class Users extends CI_Controller{
	
   public function __construct()
  {  parent::__construct();
    if($this->session->userdata('email'))
      return redirect('admin/home');
    
  }

	public function home(){
		$this->load->view('users/home');
	}
	public function about_us(){
		$this->load->view('users/about_us');
	}
	public function blog(){
		$this->load->view('users/blog');
	}
	public function testimonial(){
		$this->load->view('users/testimonial');
	}
	public function gallery(){
		$this->load->view('users/gallery');
	}
	public function contact_us(){
		$this->load->view('users/contact_us');
	}
    public function form_copy(){
		$this->load->view('users/form_copy');
	}
	public function error(){
		$this->load->view('users/practice');
	}
	
	public function login(){
		$this->load->view('users/login');
	}
	
	public function carrear(){
		$this->load->view('users/carrear');
	}

}

 ?>