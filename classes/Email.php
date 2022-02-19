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
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                $mail->Host = 'smptp.gmail.com';                          //host do dominio ou dependencia
                $mail->SMTPAuth = true;
                $mail->Username = 'contatojvregio@gmail.com';            //email
                $mail->Password = 'ContatoJVRegio';                      //senha do email
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;                                       //porta do servidor do email

                //do remetente ao destinatário
                $mail->setFrom('contatojvregio@gmail.com','Joao');       //qual é o remetente
                $mail->addAddress('jv2005.jvar@gmail.com','Joao');       //qual é o destinatário
                
                //email
                $mail->Subject = 'Teste';                                     //assunto do email
                $mail->Body = 'Testando disparo de <b>email</b>';             //corpo do email com código html
                $mail->AltBody = 'Testando disparo de <b>email</b>';          //corpo do email sem código html

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