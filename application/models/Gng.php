
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gng extends CI_Model{

	public function delete($id){
        $this->db->where('id_gunung',$id);
        $this->db->delete('gunung');
        return $this->db->affected_rows();
    }

    public function insert($data){    
        $this->db->insert('gunung', $data);
        return $this->db->affected_rows();
    }

    public function update($id, $data){
        $this->db->where('id', $id);
        $this->db->update('gunung', $data);
        return $this->db->affected_rows();
    }
}