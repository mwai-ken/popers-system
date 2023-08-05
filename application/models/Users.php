<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

    protected $is_logged_in;	
	
	public function __construct() 
	{		
		parent::__construct();
		$this->datetime=date("Y-m-d H:i:s");
       
        	$this->id=$this->session->userdata('id');
		    $this->first_name=$this->session->userdata('first_name');

		$this->table="users";
		
	}	
    public function creates()
    {
        
        $this->db->trans_begin();
        if($this->db->insert( $this->table, [
            'Email' => $this->input->post("email"),
            'Gender' => $this->input->post("emp_gender"),
             'Name' => $this->input->post("emp_name"),
              'Phone' => $this->input->post("phone"),
             'ID_Number' => $this->input->post("id_number"),
              'Position' => $this->input->post("position"),
             'Phy_address' => $this->input->post("phy_address"),
             'Password' => $this->input->post("password"),
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
			
			  'Email' => $this->input->post("email"),
            'Gender' => $this->input->post("emp_gender"),
             'Name' => $this->input->post("emp_name"),
              'Phone' => $this->input->post("phone"),
             'ID_Number' => $this->input->post("id_number"),
              'Position' => $this->input->post("position"),
             'Phy_address' => $this->input->post("phy_address"),
             'Password' => $this->input->post("password"),
            'DateModified' => $this->datetime,
				
			  );

			  $this->db->where('id',$id);
			  
			  if($this->db->update($this->table,  $data)){
			  	
					 return true;
			  }else{
				 return false;
			  }	
		}


          public function deleteuser($id){
        $this->db->delete('users',['id' =>$id]);
        

        }
}

   