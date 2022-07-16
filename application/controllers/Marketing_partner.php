<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Marketing_partner extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $is_logged_in = $this->session->userdata("admin_id");
        if($is_logged_in == "" || $is_logged_in == null){
            redirect("dashboard/login");
        }
        $this->load->model('Marketing_partner_model');
    } 

    /*
     * Listing of marketing_partners
     */
    function index()
    {
        $data['marketing_partners'] = $this->Marketing_partner_model->get_all_marketing_partners();
        
        $data['_view'] = 'marketing_partner/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new marketing_partner
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $this->load->library('form_validation');
            $this->form_validation->set_rules('partner_name','Name','required');
            $this->form_validation->set_rules('partner_company','Company','required');
            $this->form_validation->set_rules('mobile_no','Mobile Number','required|exact_length[10]');
		    $this->form_validation->set_rules('email','Email Id','required');
		
            if($this->form_validation->run())     
            {
                $mobile_no = $this->input->post('mobile_no');
                $checkCode = $this->db->query("select * from marketing_partners where mobile_no=".$mobile_no."")->result_array(); 
               
                if(count($checkCode)>0){
                   
                    $this->session->set_flashdata('error','Mobile has already been added.'); 
                    $data['_view'] = 'marketing_partner/add';
                    $this->load->view('layouts/main',$data);
                }else{ 
                    $params = array(
                        'status' => 1,
                        'is_active' => 1,
                        'partner_name' => $this->input->post('partner_name'),
                        'partner_company' => $this->input->post('partner_company'),
                        'designation' => $this->input->post('designation'),
                        'mobile_no' => $this->input->post('mobile_no'),
                        'email' => $this->input->post('email'),
                        'area' => $this->input->post('area'),
                        'city' => $this->input->post('city'),
                        'created_on' => date('Y-m-d'),
                        'updated_on' => date('Y-m-d'),
                    );
                    $this->session->set_flashdata('success','Marketing partner successfully');
                    $marketing_partner_id = $this->Marketing_partner_model->add_marketing_partner($params);
                    redirect('marketing_partner/index');
                }
            }
            else
            {            
                $data['_view'] = 'marketing_partner/add';
                $this->load->view('layouts/main',$data);
            }
        }
        else
        {            
            $data['_view'] = 'marketing_partner/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a marketing_partner
     */
    function edit($marketing_partner_id)
    {   
        // check if the marketing_partner exists before trying to edit it
        $data['marketing_partner'] = $this->Marketing_partner_model->get_marketing_partner($marketing_partner_id);
        
        if(isset($data['marketing_partner']['marketing_partner_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $this->load->library('form_validation');
            $this->form_validation->set_rules('partner_name','Name','required');
            $this->form_validation->set_rules('partner_company','Company','required');
            $this->form_validation->set_rules('mobile_no','Mobile Number','required|exact_length[10]');
		    $this->form_validation->set_rules('email','Email Id','required');
		
                if($this->form_validation->run())     
                {
                    $mobile_no = $this->input->post('mobile_no');
                    $checkCode = $this->db->query("select * from marketing_partners where marketing_partner_id!=".$marketing_partner_id." and mobile_no=".$mobile_no."")->result_array(); 
                   
                    if(count($checkCode)>0){
                       
                        $this->session->set_flashdata('error','Mobile has already been added.'); 
                        $data['_view'] = 'marketing_partner/edit';
                        $this->load->view('layouts/main',$data);
                    }else{ 
                    $params = array(
                        'status' => $this->input->post('status'),
                        'is_active' => $this->input->post('is_active'),
                        'partner_name' => $this->input->post('partner_name'),
                        'partner_company' => $this->input->post('partner_company'),
                        'designation' => $this->input->post('designation'),
                        'mobile_no' => $this->input->post('mobile_no'),
                        'email' => $this->input->post('email'),
                        'area' => $this->input->post('area'),
                        'city' => $this->input->post('city'),
                        'updated_on' => date('Y-m-d'),
                    );
                    $this->session->set_flashdata('success','Marketing partner updated successfully'); 
                    $this->Marketing_partner_model->update_marketing_partner($marketing_partner_id,$params);            
                    redirect('marketing_partner/index');
                    }
                }
                else
                {
                    $data['_view'] = 'marketing_partner/edit';
                    $this->load->view('layouts/main',$data);
                }
            }
            else
            {
                $data['_view'] = 'marketing_partner/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The marketing_partner you are trying to edit does not exist.');
    } 

    /*
     * Deleting marketing_partner
     */
    function remove($marketing_partner_id)
    {
        $marketing_partner = $this->Marketing_partner_model->get_marketing_partner($marketing_partner_id);

        // check if the marketing_partner exists before trying to delete it
        if(isset($marketing_partner['marketing_partner_id']))
        {
            $this->db->where('marketing_partner_id',$marketing_partner['marketing_partner_id']);
            $this->db->delete('marketing_partner_coupons');
            $this->Marketing_partner_model->delete_marketing_partner($marketing_partner_id);
            redirect('marketing_partner/index');
        }
        else
            show_error('The marketing_partner you are trying to delete does not exist.');
    }
    
}