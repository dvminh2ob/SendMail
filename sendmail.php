<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

    function sendEmail($recipient, $code){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;// Enable verbose debug output
            $mail->isSMTP();// gửi mail SMTP
            $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
            $mail->SMTPAuth = true;// Enable SMTP authentication
            $mail->Username = 'codecungtoi@gmail.com';// SMTP username
            $mail->Password = 'wkfvqityrpautffo'; // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port = 587; // TCP port to connect to
            $mail->CharSet = 'UTF-8';
            //Recipients
            $mail->setFrom('codecungtoi@gmail.com', 'Công nghệ web - CSE458');

            $mail->addReplyTo('codecungtoi@gmail.com', 'Công nghệ web - CSE458');
            
            $mail->addAddress($recipient); // Add a recipient
            
            // Attachments
            // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments

            // Content
            $mail->isHTML(true);   // Set email format to HTML
            $tieude = 'Xác nhận kích hoạt tài khoản !';
            $mail->Subject = $tieude;
            //$bodyContent = 'Để kích hoạt tài khoản vui lòng bấm  ';
            //$bodyContent .= '<a href = "http://localhost/project03/activation.php/email='.$recipient.'&code='.$code.'"> Tiếp tục </a>';
            $mail->Body =   '<a href = "http://localhost/project03/activation.php?email='.$recipient.'&code='.$code.'">Nhấp vào đây</a>';
            //$mail->Body = $bodyContent;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if($mail->send()){
                echo 'Thư đã được gửi đi';
            }else{
                echo 'Lỗi. Thư chưa gửi được';
            }  
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
