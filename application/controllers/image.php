<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array(
			'custom_upload',
			'form_validation'
		));
		$this->load->helper('url');
	}

	public function index() {
		$this->load->view('admin/image');
	}

	public function multiple_upload($id) {
		$file = $this->custom_upload->multiple_upload('file', array(
			'upload_path' => 'upload/multiple',
			'allowed_types' => 'jpg|jpeg|bmp|png|gif' // etc
		));

		$image = array();
		foreach ($file as $f) {
			array_push($image, array(
				'file_name' => $f
			));
		}
		$this->load->model('imageModel');
		$this->imageModel->insertdata($image,$id);
		/*$this->db->insert_batch('multiple_upload', $image);*/
		
		return redirect('admin/new_form');
		/*redirect(site_url('welcome'));*/
	}

	
}
