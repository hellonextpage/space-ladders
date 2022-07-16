<?php
    session_start();
    $to      = 'info@roghithrealestate.com';
    $message = $_POST['message'];
    $email   = $_POST['email'];
    $name    = $_POST['name'];
    $companyname    = $_POST['companyname'];
    $mobile    = $_POST['mobile'];
    $subject = "New Contact Message";

    $message = "<html>
                <head></head>
                <body>
                <p>Dear Admin,</p>
                <p style='font-weight:bold;'>New Contact Message</p>
                <table style='    border: 1px solid #c5c5c6;
    border-spacing: 0'>
                    <tr>
                        <th style='    border: 1px solid #c5c5c6;'>Name</th>
                        <th style='    border: 1px solid #c5c5c6;'>Email</th>
                        <th style='    border: 1px solid #c5c5c6;'>Mobile</th>
                        <th style='    border: 1px solid #c5c5c6;'>Company Name</th>
                        <th style='    border: 1px solid #c5c5c6;'>Message</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td style=' padding: 5px 15px;   border: 1px solid #c5c5c6;'>".$name."</td>
                            <td style=' padding: 5px 15px;   border: 1px solid #c5c5c6;'>".$email."</td>
                            <td style=' padding: 5px 15px;   border: 1px solid #c5c5c6;'>".$mobile."</td>
                            <td style=' padding: 5px 15px;   border: 1px solid #c5c5c6;'>".$companyname."</td>
                            <td style=' padding: 5px 15px;   border: 1px solid #c5c5c6;'>".$message."</td>
                        </tr>
                    </tbody>
                </table>
                </body>
                </html>";
    
    $header = "From:".$email." \r\n";
    $header .= "Cc:nextpagetech@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $result = mail ($to,$subject,$message,$header);
    if($result == true){
        $_SESSION["success"] = 'Mail sent successfully';
    }else{
        $_SESSION["error"] = 'Something went wrong while sending mail.';
    }
    header('location:contact.php');
?>