<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{
   
//     public function insert($data){
//         $this->db->insert('staff',$data);
//     }
//         public function view($id){
//             $query= $this->db->get_where('staff',array('id'=>$id));
//             return $query->row();
//         }
     
       
        

//     public function insertItems($items){
//         $this->db->insert('staff', $items);
        
//     }

//INSERT

    public function insert($data){
        $this->db->insert('staff' , $data);
        }

//UPDATE
    public function update($id ,$data){
        $this->db->where('id' , $id);
        $this->db->update('staff' , $data);
        }   

    public function editItems($id, $Product){
            $this->db->where('id', $id);
            $this->db->update('tblitem', $data);
        }

    public function getProd($id)
    {
  
        $query = $this->db->get_where('staff', array('id' => $id));
        return $query->row();
  
    }


public function delete($id,$data){
    $this->db->where('id', $id);
    $this->db->delete('staff');
}
public function getItems(){
    $query = $this -> db->get('staff');
    return $query->result();
}


public function insertUser($data){
    $this->db->insert('staff', $data);
}   
}

?>