<?php

    require_once ("./phpmailer/src/PHPMailer.php");
    require_once ('./phpmailer/src/SMTP.php');
    require_once ('./phpmailer/src/Exception.php');


    use \PHPMailer\PHPMailer\PHPMailer;
    use \PHPMailer\PHPMailer\SMTP;
    use \PHPMailer\PHPMailer\Exception;

    class Email
    {
        function __construct()
        {
           
            $mail = new PHPMailer(true);

            try{
                //configurações do servidor
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';                          //host do dominio ou dependencia
                $mail->SMTPAuth = true;
                $mail->Username = 'contatojvregio@gmail.com';            //email
                $mail->Password = 'ContatoJVRegio';                      //senha do email
                $mail->Port = 587;                                       //porta do servidor do email

                //de quem para quem
                $mail->setFrom('contatojvregio@gmail.com','Joao');       //qual é o endereço do email
                $mail->addAddress('jv2005.jvar@gmail.com','Joao');       //qual é o remetente
                
                //email
                $mail->Subject = 'Teste';                                     //assunto do email
                $mail->Body = 'Testando disparo de <b>email</b>';             //corpo do email com código html
                $mail->AltBody = 'Testando disparo de <b>email</b>';          //corpo do email sem código html

                if(!$mail->send()){
                    echo '<script>alert("msg não enviada");</script>';
                }else{
                    echo '<script>alert("msg enviada");</script>';
                }
            }catch(Exception $e){
                echo '<script> alert("mensagem não enviada"); </script>';
            }
            
        }
    }
    

?>