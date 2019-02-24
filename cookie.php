<?php
$expire=time()+60;
setcookie("Name","raguram",$expire);

 if(isset($_COOKIE["Name"]))
    {
        echo $_COOKIE["Name"];
    }
    else
    {
        
    
$ma="";
 
     $mailto = "madhu07mithababu03@gmail.com";
    $mailSub = "Loan Payment due date";
    $mailMsg = "Your due for loan is going to end on this friday make sure to pay your bills";
     require './PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "ragu741721@gmail.com";
   $mail ->Password = "raguraman99";
   $mail ->SetFrom("ragu741721@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);
     if(!$mail->Send())
   {
         $ma="Mail Not Sent";
   }
   else
   {
       $ma= "Mail Sent Successfully";
   }

    }
 
    

?>