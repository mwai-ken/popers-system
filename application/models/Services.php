<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Model {

    protected $is_logged_in;	
	
	public function __construct() 
	{		
		parent::__construct();
		$this->datetime=date("Y-m-d H:i:s");
        $this->id=1;//$this->session->userdata('id');
        
		$this->table="applications";
		
	}	
    public function creates()
    {
        
        $this->db->trans_begin();
        if($this->db->insert( $this->table, [
            'Name' => $this->input->post("ap_name"),
            'ID_Number' => $this->input->post("id_number"),
             'Contact' => $this->input->post("contact"),
             'Email' => $this->input->post("email"),
            'Gender' => $this->input->post("ap_gender"),
             'Citizenship' => $this->input->post("citizenship"),
              'Address' => $this->input->post("address"),
            'Age' => $this->input->post("age"),
             'Education_level' => $this->input->post("education_level"),
              'Apply_for' => $this->input->post("apply_for"),
            'reason' => $this->input->post("ap_reason"),

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


            public function lists()
    {
        $rows = [];
        $this->db->select('*' )
                ->from('vacancies')  
                ->order_by('id','desc');
        //$this->db->where( array('t.Status'=>1),'AND');
        $query = $this->db->get();
        if($query->result()){
            $rows = $query->result();	
            $query->free_result();	
        }
        return( $rows );
    }
              public function listserv()
    {
        $rows = [];
        $this->db->select('t.*' )
                ->from($this->table .' t')  
                ->order_by('id','desc');
        //$this->db->where( array('t.Status'=>1),'AND');
        $query = $this->db->get();
        if($query->result()){
            $rows = $query->result();	
            $query->free_result();	
        }
        return( $rows );
    }

              public function deleteplans($id){
        $this->db->delete('plans',['id' =>$id]);
        

        }
   		    public function applidetails($id){
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


			public function details($id){
	    $row = array();	 
        $this->db->select('*' )
                ->from('vacancies')  
                ->order_by('id','desc');
            $this->db->where('id',$id);
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
			
				'plan' => $this->input->post("plan"),
            'plan_description' => $this->input->post("plan_description"),
             'duration' => $this->input->post("duration"),
				
			  );

			  $this->db->where('id',$id);
			  
			  if($this->db->update($this->table,  $data)){
			  	
					 return true;
			  }else{
				 return false;
			  }	
		}
        
    }
    