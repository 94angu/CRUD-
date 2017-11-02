<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
     
    public function getUser($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('user', array('index_no' => $id));
        return $query->row_array();
    }

    public function searchUser($id){
        $query = $this->db->get_where('user', array('index_no' => $id));
        return $query->result_array();
    }

    public function insertUser(){
      $this->load->helper('url');

      $data=array(
        'index_no'=>$this->input->post('index_no'),
        'first_name'=>$this->input->post('first_name'),
        'last_name'=>$this->input->post('last_name'),
        'tel_no'=>$this->input->post('t_no')
      );

        return $this->db->insert('user',$data);
    }

   	public function updateUser($id){
   		$this->load->helper('url');

   		$data=array(
   			'first_name'=>$this->input->post('first_name'),
   			'last_name'=>$this->input->post('last_name'),
   			'tel_no'=>$this->input->post('t_no')
   		);

   			$this->db->where('index_no',$id);
   			return $this->db->update('user',$data);
   	}

    public function deleteUser($id){
        $this->db->where('index_no',$id);
        return $this->db->delete('user');
    }
    
    
}
