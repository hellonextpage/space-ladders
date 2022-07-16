<?php
 
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('NotificationModel');
    } 

    function contact(){
        $this->load->view('front/contact');
    }

    function index(){
        $this->load->view('front/index');
    }

    function howitworks(){
        $this->load->view('front/howitworks');
    }

    function successstories(){
        $this->load->view('front/successstories');
    }

    function portfolio(){
        $this->load->view('front/portfolio');
    }


    function changepassword(){
        $this->load->view('front/updatepassword');
    }

    function forgotpassword(){
        $this->load->view('front/forgotpassword');
    }

    function checkMobileExists(){

        $mobile = $this->input->post("mobile");
        
        $checkMobile = $this->db->query("select * from client_details where mobile_number='$mobile'")->row_array();
        if(!empty($checkMobile)){
            $msg = "Hai";
            $contact = $checkMobile['mobile_number'];
            $sms = $this->NotificationModel->sendSms($msg,$contact);

            if($checkMobile['email_id']!='' && $checkMobile['email_id']!=null){
                $email = $checkMobile['email_id'];
                $emailmsg = "Hi ";
                $subject = "Password alert";
                $emailNotify = $this->NotificationModel->sendEmail($subject,$emailmsg,$email);
            }
            $this->session->set_flashdata('success','Password sent to your mobile number.');
        }else{
            $this->session->set_flashdata('error','Entered mobile number doesnot exists.');
            
        }
        redirect(base_url().'home/forgotpassword');
    }
    function logout(){
        $this->session->sess_destroy();
        redirect("home/index");
    }

    function getNewMessage(){
        $interaction_id = $this->input->post('interaction_id');
        $project_id = $this->input->post('project_id');
        $msgs = $this->db->query("select * from admin_client_chat where project_id='$project_id' and interaction_id>$interaction_id order by interaction_id ASC")->result_array();
        $response = array();
        foreach($msgs as $m){
            $resp['res'] = $m;
            if($m['interaction_text']!="" && $m['interaction_text']!=null){
                $dir_contents = scandir($m['interaction_text']);
                $img = array();
                foreach ($dir_contents as $file) {
                    if ($file !== '.' && $file !== '..') {
                        array_push($img,$file);
                    }
                }
                $resp['img'] = $img;
            }else{
                $resp['img'] = [];
            }
            array_push($response,$resp);
        }
        
        echo json_encode($response);
    }

    function saveChat(){
        $message = $this->input->post('message');
        // Count total files
        if(!empty($_FILES)){
            $countfiles = count($_FILES['files']['name']);
            $time = time();
            $upload_path = mkdir('uploads/'.$time, 0777, true);
            // Upload directory
            $upload_location = 'uploads/'.$time."/";
    
            // To store uploaded files path
            $files_arr = array();
    
            // Loop all files
            for($index = 0;$index < $countfiles;$index++){
    
            if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != ''){
                // File name
                $filename = $_FILES['files']['name'][$index];
    
                // Get extension
                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    
                // Valid image extension
                $valid_ext = array("png","jpeg","jpg","pdf","txt","mp3","mp4","doc","docx");
    
                // Check extension
                if(in_array($ext, $valid_ext)){
    
                    // File path
                    $path = $upload_location.$filename;
    
                    // Upload file
                    if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){
                        $files_arr[] = $path;
                    }
                }
            }
            }
            $files = $upload_location;
            
        }else{
            $files = "";
            $files_arr = [];
        }
        $interaction_type = "";
        if($files!=""){
            $interaction_type = "doc";
        }
        $project_id = $this->input->post('project_id');

        if($files!="" || $message!=""){
            $data = array(
                'project_id'=>$project_id,
                'interaction_on'=>date("Y-m-d H:i:s"),
                'interaction_text'=>$files,
                'interaction_type'=>$interaction_type,
                'comment'=>$message,
                'interaction_from'=>'client'
            );
            $this->db->insert('admin_client_chat',$data);
        }
        
        echo json_encode($files_arr);
        
        
    }
    function updatepassword(){
        $user_id = $this->session->userdata('user_id');
        $password = $this->input->post('password');
        $c_password = $this->input->post('c_password');
        if($password!=$c_password){
            $this->session->set_flashdata('error','Password and confirm password doesnot match.');
            redirect(base_url().'home/changepassword');
        }
        $this->db->where('client_id',$user_id);
        $this->db->update('client_details',array('password'=>$password));
        $this->session->set_flashdata('success','Password updated successfully.');
        redirect(base_url().'home/changepassword');
    }


    function projectDet($id){
        $data['project'] = $this->db->query("select * from project_menu where  project_id=$id")->row_array();
        $data['escallation'] = $this->db->query("select * from client_escallation  where  project_id=$id")->result_array();
        $data['chat'] = $this->db->query("select * from admin_client_chat  where  project_id=$id order by interaction_id ASC")->result_array();
        $this->load->view('front/project-detail',$data);
    }

    function saveReferrals($id){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$mobile,
            'client_id'=>1
        );
        $this->db->insert('referrals',$data);
        $this->session->set_flashdata('success','Referrals saved.');
        redirect(base_url().'home/projectDet/'.$id);
    }
    function saveEscallation($id){
        $escallation = $this->input->post('escallation');
        $data = array(
            'project_id'=>$id,
            'client_comments'=>$escallation,
            'escallation_on'=>date('Y-m-d H:i:s'),
            'created_on'=>date('Y-m-d H:i:s'),
        );
        $this->db->insert('client_escallation',$data);
        $this->session->set_flashdata('success','Escallation submitted.');
        redirect(base_url().'home/projectDet/'.$id);
    }

    function thankyou(){
        $this->load->view('front/thankyou');
    }
    

    function save(){
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $possesionDate = $this->input->post('possession');
        $city = $this->input->post('prcity');
        $configHouse = $this->input->post('configHouse');
        $purpose = $this->input->post('purpose');
        $wardrobe = $this->input->post('wardrobe');
        $entertainmentunit = $this->input->post('entertainmentunit');
        $studyunit = $this->input->post('studyunit');
        $crockeryunit = $this->input->post('crockeryunit');
        $coupon = $this->input->post('password');
       
        if($this->session->userdata('user_id')!="" && $this->session->userdata('user_id')!=null){
            
            $client_id = $this->session->userdata('user_id');

        }else{
            $clientData = array(
                'name'=>$name,
                'mobile_number'=>$phone,
                'email_id'=>$email,
                'city'=>$city,
                'signup_on'=>date('Y-m-d H:i:s'),
                'otp'=>'1234',
                'password'=>$coupon
            );
            $this->db->insert('client_details',$clientData);
            $client_id = $this->db->insert_id();
        }
        

        
        $projectData = array(
            'client_id'=>$client_id,
            'possession_in'=>$possesionDate,
            'floorplan'=>$configHouse,
            'purpose'=>$purpose,
            'city'=>$city,
            'coupon_code'=>$coupon
        );
        if($coupon!="" && $coupon!=null){
            $getManager = $this->db->query("select m.partner_name,m.marketing_partner_id,m.mobile_no from marketing_partners m left join marketing_partner_coupons mc on m.marketing_partner_id=mc.marketing_partner_id where mc.coupon_code='$coupon'")->row_array();
            if(count($getManager)>0){
                $projectData['project_manager_name'] = $getManager['partner_name'];
                $projectData['partner_id'] = $getManager['marketing_partner_id'];

                $this->db->where('coupon_code',$coupon);
                $this->db->update('marketing_partner_coupons',array('client_id'=>$client_id,'user_on'=>date("Y-m-d")));
                
                $msg = "Hai";
                $contact = $getManager['mobile_no'];
                $sms = $this->NotificationModel->sendSms($msg,$contact);

                if($getManager['email']!='' && $getManager['email']!=null){
                    $email = $getManager['email'];
                    $emailmsg = "Hi ";
                    $subject = "Coupon";
                    $emailNotify = $this->NotificationModel->sendEmail($subject,$emailmsg,$email);
                }


            }
        }
        $this->db->insert('project_menu',$projectData);
        redirect(base_url().'home/thankyou');
        
    }



    function checkUser(){
        $coupon = $this->input->post('coupon');
        $mobile = $this->input->post('mobile');

        $checkMobile = $this->db->query("select * from client_details where mobile_number='$mobile'")->row_array();
        if(!empty($checkMobile)){
            $data['mobile'] = false;
        }else{
            $data['mobile'] = true;
        }

        if($coupon!="" && $coupon!=null){
            $checkCoupon = $this->db->query("select * from client_details where coupon_code='$coupon'")->row_array();
            if(!empty($checkCoupon)){
                $data['coupon'] = false;
            }else{
                $data['coupon'] = true;
            }
        }else{
            $data['coupon'] = true;
        }

        echo json_encode($data);
    }

    function checkLogin(){
        $password = $this->input->post('password');
        $mobile = $this->input->post('mobile');

        $checkMobile = $this->db->query("select * from client_details where mobile_number='$mobile' and password='$password'")->row_array();
        if(!empty($checkMobile)){
            $this->session->set_userdata('user_id',$checkMobile['client_id']);
            echo true;
        }else{
            echo false;
        }
    }
}
