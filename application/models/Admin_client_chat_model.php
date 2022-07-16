<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Admin_client_chat_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get admin_client_chat by interaction_id
     */
    function get_admin_client_chat($interaction_id)
    {
        return $this->db->get_where('admin_client_chat',array('interaction_id'=>$interaction_id))->row_array();
    }
        
    /*
     * Get all admin_client_chat
     */
    function get_all_admin_client_chat()
    {
        $this->db->order_by('interaction_id', 'desc');
        return $this->db->get('admin_client_chat')->result_array();
    }
        
    /*
     * function to add new admin_client_chat
     */
    function add_admin_client_chat($params)
    {
        $this->db->insert('admin_client_chat',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update admin_client_chat
     */
    function update_admin_client_chat($interaction_id,$params)
    {
        $this->db->where('interaction_id',$interaction_id);
        return $this->db->update('admin_client_chat',$params);
    }
    
    /*
     * function to delete admin_client_chat
     */
    function delete_admin_client_chat($interaction_id)
    {
        return $this->db->delete('admin_client_chat',array('interaction_id'=>$interaction_id));
    }
}