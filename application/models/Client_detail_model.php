<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Client_detail_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get client_detail by client_id
     */
    function get_client_detail($client_id)
    {
        return $this->db->get_where('client_details',array('client_id'=>$client_id))->row_array();
    }
        
    /*
     * Get all client_details
     */
    function get_all_client_details($id)
    {
        $this->db->order_by('client_id', 'desc');
        if($id!=""){
            $this->db->where('client_id', $id);
        }
        return $this->db->get('client_details')->result_array();
    }
        
    /*
     * function to add new client_detail
     */
    function add_client_detail($params)
    {
        $this->db->insert('client_details',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update client_detail
     */
    function update_client_detail($client_id,$params)
    {
        $this->db->where('client_id',$client_id);
        return $this->db->update('client_details',$params);
    }
    
    /*
     * function to delete client_detail
     */
    function delete_client_detail($client_id)
    {
        return $this->db->delete('client_details',array('client_id'=>$client_id));
    }
}
