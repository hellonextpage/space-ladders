<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Client_escallation_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get client_escallation by escallation_id
     */
    function get_client_escallation($escallation_id)
    {
        return $this->db->get_where('client_escallation',array('escallation_id'=>$escallation_id))->row_array();
    }
        
    /*
     * Get all client_escallation
     */
    function get_all_client_escallation()
    {
        $this->db->order_by('escallation_id', 'desc');
        return $this->db->get('client_escallation')->result_array();
    }
        
    /*
     * function to add new client_escallation
     */
    function add_client_escallation($params)
    {
        $this->db->insert('client_escallation',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update client_escallation
     */
    function update_client_escallation($escallation_id,$params)
    {
        $this->db->where('escallation_id',$escallation_id);
        return $this->db->update('client_escallation',$params);
    }
    
    /*
     * function to delete client_escallation
     */
    function delete_client_escallation($escallation_id)
    {
        return $this->db->delete('client_escallation',array('escallation_id'=>$escallation_id));
    }
}
