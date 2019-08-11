<?php 
class formModel extends CI_Model{
public function add_data($array){
     
   return $this->db->insert('form',$array);

}

  public function show(){
    $q=$this->db->select('id,candidate_name,mob_first')
             ->from('form')
             ->get();
             return $q->result(); 
           
  }

  public function del($id)
  {

 return $this->db->delete('form',['id'=>$id]);
  }

public function update_user($uid,Array $data){

    return $this->db->where('id',$uid)
                    ->update('form',$data);

}
  public function find_data($id)
  {
   $q=$this->db->select()
            ->where('id',$id)
            ->get('form');
            return $q->row();


  }

  public function d($post){
    $q=$this->db->select()
             ->where('mob_first',$post)
             ->get('form');

            return $q->row();
  }


}

 ?>