<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Model {

    protected $is_logged_in;	
	
	public function __construct() 
	{		
		parent::__construct();
		$this->datetime=date("Y-m-d H:i:s");
		    $this->id=$this->session->userdata('id');
		$this->table="employees";
		
	}	
    public function creates()
    {
        
        $this->db->trans_begin();
        if($this->db->insert( $this->table, [
            'Name'=>$this->input->post('emp_name'),
            'Gender'=>$this->input->post('emp_gender'),
             'Email'=>$this->input->post('email'),
              'ID_Number'=>$this->input->post('id_number'),
               'Address'=>$this->input->post('phy_address'),
               'Phone'=>$this->input->post('phone'),
               'Position'=>$this->input->post('position'),
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

          public function listsmess()
    {
        $rows = [];
        $this->db->select('messages.*' )
                ->from('messages')  
                ->order_by('id','desc');
        //$this->db->where( array('t.Status'=>1),'AND');
        $query = $this->db->get();
        if($query->result()){
            $rows = $query->result();	
            $query->free_result();	
        }
        return( $rows );
    }
    	public function edits($id)
		{
			 		
			 
			 $data = array(
			
			 'Name'=>$this->input->post('emp_name'),
            'Gender'=>$this->input->post('emp_gender'),
             'Email'=>$this->input->post('email'),
              'ID_Number'=>$this->input->post('id_number'),
               'Address'=>$this->input->post('phy_address'),
               'Phone'=>$this->input->post('phone'),
               'Position'=>$this->input->post('position'),
				
			  );

			  $this->db->where('id',$id);
			  
			  if($this->db->update($this->table,  $data)){
			  	
					 return true;
			  }else{
				 return false;
			  }	
		}

           public function deleteemp($id){
        $this->db->delete('employees',['id' =>$id]);
        

        }



                 	public function messdetails($id){
			$row = array();	
             $this->db->select('messages.*' )
                ->from('messages')	;
			
            $this->db->where('id',$id);
            $query = $this->db->get();
			if($query->result()){
				$row = $query->row();	
				$query->free_result();	
			}
			
			return( $row );
		} 

    }