<?php

use PHPMailer\PHPMailer\PHPMailer;

function get_mail(){
    include_once( APP_PATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php' );

    $mail_config = get_config( 'mail' );

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = $mail_config[ 'smtp_host' ];
    $mail->SMTPAuth =  $mail_config[ 'smtp_auth' ];
    $mail->Username =  $mail_config[ 'username' ];
    $mail->Password =  $mail_config[ 'password' ];
    $mail->SMTPSecure =  $mail_config[ 'smtp_secure' ];
    $mail->Port =  $mail_config[ 'port' ];

    return $mail;
}