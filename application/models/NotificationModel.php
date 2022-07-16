<?php
defined('BASEPATH') or exit('No direct script access allowed');
class NotificationModel extends CI_Model{
    public function sendSms($msg,$contact){
        $api_key = API_KEY;
        $contacts = $contact;
        $from = FROM;
        $sms_text = urlencode($msg);

        //Submit to server

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, "http://textbeam.in/api/v1/send-sms?api-key=".$api_key."&sender-id=LOCALM&sms-type=1&route=1&mobile=".$contacts."&message=".$sms_text);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function sendEmail($subject,$message,$email){
        $from = ADMINMAIL;
        $to= $email;
        $headers = 'From: '.$from.'' . "\r\n" .
        'Reply-To:  '.$from.'  ' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        if(mail($to, $subject, $message, $headers))
        {
            return true;
        }else
        {
            return false;
        }
    }
}


?>