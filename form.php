
<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require __DIR__ . '/vendor/autoload.php'; 
 
  
     
    $mail = new PHPMailer(true);                  
 
try {
 
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
                  )
                              );
     
    $mail->Timeout  = 10;        
    $mail->isSMTP();   
    $mail->SMTPSecure = 'TLS'; 
    $mail->Host = '******.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'art@********.com';                 
    $mail->Password = '********';                
    $mail->Port = 587;          
         
    $mail->setFrom('art@*******.com', 'NADAWCA NAZWA');
    $mail->addAddress('*****', 'NAZWA');
  
     
    $mail->isHTML(true);                                  
    $mail->Subject = 'TEMAT WIADOMOSCI';
    $mail->Body    = 'TO JEST TRESC';
     
    $html = new \Html2Text\Html2Text($mail->Body);
     
    $mail->AltBody = $html->getText();
 
    $mail->send();
    echo 'Wiadmość wysłana poprawnie';
} catch (Exception $e) {
    
    echo 'Nie można wysłać wiadmości: ' . $mail->ErrorInfo;
     
}
     
 
?>

