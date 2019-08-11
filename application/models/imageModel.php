<?php 


class ImageModel extends CI_Model{

public function insertdata($image,$id){
return	$this->db->insert_batch('multiple_upload', $image,$id);

}

}

 ?>