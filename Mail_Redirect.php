<?php 
if(isset($_POST['submit'])){
    $to = "smchemicals@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $subject = "Enquiry Form submission from: ".$first_name." ".$last_name."";
    $message = $_POST['message'];
    $message_pre = "Dear Sir/Madam,";
    $messae_post = "Best Regards\r\n"."Name:".$first_name." ".$last_name."\r\nPhone Number : ".$phone."\r\nMail-ID : ".$from."\r\n";
    $headers = "From: ". $from;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 1\r\n";
    $headers.= "X-Mailer: PHP". phpversion() ."\r\n" ;
    $message = $message_pre."\r\n\r\n".$message."\r\n\r\n".$messae_post;
    
    mail($to,$subject,$message,$headers);
    
    $headers_ack = "From: ". $to;
    $subject_ack = "Thank you ".$first_name." ".$last_name.",We will contact you soon.";
    $message_ack_pre = "Dear ".$first_name.",\r\n\r\n";
    $message_ack_post = "Best Regards\r\n -Partha Sarathi C";
    $message_ack = $message_ack_pre."We have received your inputs and shall revert shortly.\r\n\r\n".$message_ack_post;
    mail($from,$subject_ack,$message_ack,$headers_ack);
    
    header('Location: contactus_thankyou.html');
    }
?>
