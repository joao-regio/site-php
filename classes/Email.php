<?php

    use \PHPMailer\PHPMailer\PHPMailer;
    use \PHPMailer\PHPMailer\SMTP;
    use \PHPMailer\PHPMailer\Exception;


    require 'classes\phpmailer\vendor\autoload.php';

    class Email
    {

        function __construct()
        {
    
            $mail = new PHPMailer();

            try{
                //configurações do servidor
                $mail->isSMTP();
                $mail->Host = 'smtp.office365.com';                             //host do dominio ou dependencia
                $mail->SMTPAuth = true;
                $mail->Username = 'joaovregio@outlook.com';                     //email
                $mail->Password = 'DogItalia2';                                 //senha do email
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;                                              //porta do servidor do email

                //do remetente ao destinatário
                $mail->setFrom('joaovregio@outlook.com','Joao');                //qual é o remetente
                $mail->addAddress('jv2005.jvar@gmail.com','Rodrigo');       //qual é o destinatário
                $mail->isHTML(true);
                
                //email
                $mail->Subject = 'Teste';                                         //assunto do email
                $mail->Body = 'Testando disparo de <b>email</b>';               //corpo do email com código html
                $mail->AltBody = 'Testando disparo de email';                   //corpo do email sem código html

                if(!$mail->send()){
                    echo 'msg não enviada';
                    return false;
                }else{
                    echo 'msg enviada';
                    return true;
                }
                
            }catch(Exception $e){
                echo '<script> alert("mensagem não enviada"); </script>';
            }
            
        }
    }
    

?>