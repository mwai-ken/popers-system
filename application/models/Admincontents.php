<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontents extends CI_Model {

    protected $is_logged_in;	
	
	public function __construct() 
	{		
		parent::__construct();
		$this->datetime=date("Y-m-d H:i:s");
        $this->id=1;//$this->session->userdata('id');
		$this->table="";
		
	}	
    public function creates()
    {
        
        $this->db->trans_begin();
        if($this->db->insert( $this->table, [
            'email' => $this->input->post("Email"),
            'emp_gender' => $this->input->post("Gender"),
             'emp_name' => $this->input->post("Name"),
             'id_number' => $this->input->post("ID Nuber"),
              'position' => $this->input->post("Position"),
             'phy_address' => $this->input->post("Address"),
             'DateCreated' => $this->datetime,
             'DateModified' => $this->datetime,
             'CreatedBy' => $this->id,
          
      
                
        ] )){
              $id = $this->db->insert_id();

          
                   
            if ($this->db->trans_status() === FALSE)
             {
                        $this->db->trans_rollback();
                        return false;
                }
                else
                {
                        $this->db->trans_commit();
                           return true;
            }
            }else{
                return false;
            }

            
            
            
        
    }
      public function totalemployees()
     {


         $rows = [];
         $this->db->select('count(id) as total')
             ->from("employees");
       //  $this->db->where(array('Status' => 1), "AND");
         $query = $this->db->get();
         if ($query->result()) {
             $rows = $query->row();
             $query->free_result();
         }
         if ($rows) {
             return $rows->total;
         } else {
             return 0;
         }



     }
      public function totalusers()
     {


         $rows = [];
         $this->db->select('count(id) as total')
             ->from("users");
       //  $this->db->where(array('Status' => 1), "AND");
         $query = $this->db->get();
         if ($query->result()) {
             $rows = $query->row();
             $query->free_result();
         }
         if ($rows) {
             return $rows->total;
         } else {
             return 0;
         }



     }
      public function totalvacancies()
     {


         $rows = [];
         $this->db->select('count(id) as total')
             ->from("vacancies");
       //  $this->db->where(array('Status' => 1), "AND");
         $query = $this->db->get();
         if ($query->result()) {
             $rows = $query->row();
             $query->free_result();
         }
         if ($rows) {
             return $rows->total;
         } else {
             return 0;
         }



     }


    public function totalvacanciesapplied()
     {


         $rows = [];
         $this->db->select('count(id) as total')
             ->from("applications");
       //  $this->db->where(array('Status' => 1), "AND");
         $query = $this->db->get();
         if ($query->result()) {
             $rows = $query->row();
             $query->free_result();
         }
         if ($rows) {
             return $rows->total;
         } else {
             return 0;
         }



     }
           public function totalmessages()
     {


         $rows = [];
         $this->db->select('count(id) as total')
             ->from("messages");
       //  $this->db->where(array('Status' => 1), "AND");
         $query = $this->db->get();
         if ($query->result()) {
             $rows = $query->row();
             $query->free_result();
         }
         if ($rows) {
             return $rows->total;
         } else {
             return 0;
         }



     }

      public function totalachievements()
     {


         $rows = [];
         $this->db->select('count(id) as total')
             ->from("achievements");
       //  $this->db->where(array('Status' => 1), "AND");
         $query = $this->db->get();
         if ($query->result()) {
             $rows = $query->row();
             $query->free_result();
         }
         if ($rows) {
             return $rows->total;
         } else {
             return 0;
         }



     }
      public function totalplans()
     {


         $rows = [];
         $this->db->select('count(id) as total')
             ->from("plans");
       //  $this->db->where(array('Status' => 1), "AND");
         $query = $this->db->get();
         if ($query->result()) {
             $rows = $query->row();
             $query->free_result();
         }
         if ($rows) {
             return $rows->total;
         } else {
             return 0;
         }



     }

        public function details($id){
        $row = array();		
        $this->db->select('*');
        $this->db->from( $this->table);	
        $this->db->where('Id',$id);
        $query = $this->db->get();
        if($query->result()){
            $row = $query->row();	
            $query->free_result();	
        }
        
        return( $row );
    }


    public function edits($id)
    {
                 
         
      $data = array(
            // 'Descriptions' => $this->input->post("Descriptions"),
            // 'DateModified' => $this->datetime,
            // 'SystemUser' => $this->first_name,
            //  'UserID' => $this->id,
            'item_id' => $this->input->post("item_id"),
            'item_name' => $this->input->post("item_name"),
             'price' => $this->input->post("price"),
             'item_description' => $this->input->post("item_description"),
            'DateCreated' => $this->datetime,
            'DateModified' => $this->datetime,
            'CreatedBy' => $this->id,
            
          );

          $this->db->where('id',$id);
          
          if($this->db->update($this->table,  $data))
       
          {
             return false;
          }	
    }
    }