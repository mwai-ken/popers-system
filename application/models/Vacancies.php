<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancies extends CI_Model {

    protected $is_logged_in;	
	
	public function __construct() 
	{		
		parent::__construct();
		$this->datetime=date("Y-m-d H:i:s");
        $this->id=1;//$this->session->userdata('id');
		$this->table="vacancies";
		
	}	
    public function creates()
    {
        
        $this->db->trans_begin();
        if($this->db->insert( $this->table, [
            'title' => $this->input->post("title"),
            'p_description' => $this->input->post("p_description"),
             'no_people' => $this->input->post("no_people"),
            
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
			
				'title' => $this->input->post("title"),
            'p_description' => $this->input->post("p_description"),
             'no_people' => $this->input->post("no_people"),
            
             'DateCreated' => $this->datetime,
             'DateModified' => $this->datetime,
             'CreatedBy' => $this->id,
			  );

			  $this->db->where('id',$id);
			  
			  if($this->db->update($this->table,  $data)){
			  	
					 return true;
			  }else{
				 return false;
			  }	
		}
          public function deletevacancys($id){
        $this->db->delete('vacancies',['id' =>$id]);
        

        }
    }
    