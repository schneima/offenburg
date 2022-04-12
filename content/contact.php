<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$phpMailerPah = './includes/phpmailer-6.6.0';
require "$phpMailerPah/Exception.php";
require "$phpMailerPah/PHPMailer.php";
require "$phpMailerPah/SMTP.php";

include_once './data/required.inc';

if(isset($_POST['action']))
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    
    if (($name=="")||($email=="")||($message==""))
    {
        echo "<p class=\"Important\">Bitte alle Felder ausfüllen.</p>";
        include('contactform.html');
    }
    else
    {        
        $mail = new PHPMailer(true);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                 // Enable verbose debug output 
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.strato.de';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'post@nontacet.de';                 // SMTP username
        $mail->Password = $mailpass;                           // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       //Enable implicit TLS encryption
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->setFrom($email, $name);
        $mail->addAddress('post@nontacet.de', 'nontacet');     // Add a recipient,  Name is optional
        $mail->addCC('markus-schneider@gmx.li');
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Kontaktanfrage - nontacet';
        $mail->Body    = $message; //'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = $message; //'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Es gab leider ein Fehler beim Versenden. Bitte versuchen Sie es später noch einmal.';
            echo "Mailer Error: $mail->ErrorInfo";
        } else {
            echo "<h2>Vielen Dank für Ihre Anfrage.</h2>"
            . "<h3>Wir werden uns so schnell wie möglich mit Ihnen in Verbindung setzten.</h3>";
        }        
     }
}
else{
 include('contactform.html');
}

?>
