<?php 
   $to = "xyz@somedomain.com"; 
   $subject = "This is subject"; 
   $message = "This is simple text message."; 
   $header = "From:abc@somedomain.com \r\n"; 
   $retval = mail ($to,$subject,$message,$header); 
   if( $retval == true )   
   { 
      echo "Message sent successfully..."; 
   } 
   else {
  echo "Message could not be sent..."; 
   } 
?> s