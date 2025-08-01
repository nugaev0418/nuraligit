<?php
namespace vendor\frame;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Mail{

    public $mail;
    public function __construct(){
        $this->mail = new PHPMailer();
           
    $this->mail->SMTPDebug = SMTP::DEBUG_CLIENT;                      //Enable verbose debug output
    $this->mail->isSMTP();                                            //Send using SMTP
    $this->mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $this->mail->Username   = 'mavzurovnurali@gmail.com';                     //SMTP username
    $this->mail->Password   = 'p r o y w n b t q u c g x o y o';                               //SMTP password
    $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $this->mail->Port       = 465;  
    }
    public function send($emails, $subject, $body){
         $this->mail->setFrom('mavzurovnurali@gmail.com');
         foreach($emails as $email){
            $this->mail->addAddress($email);
         }
        $this->mail->Subject = $subject;
        $this->mail->Body = $body;
        $this->mail->send();
    }
 
}