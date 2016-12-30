<?php

namespace FRAME\system;

use PHPMailer;

class Mail
{
    private $isHtml = false;
    private $SMTP_SERVER = __SMTP_SERVER;
    private $SMTP_USERNAME = __SMTP_USER;
    private $SMTP_PASSWORD = __SMTP_PASS;
    private $SMTP_FROMEMAL = __SMTP_EMAIL;
    private $SMTP_FROMNAME = __SMTP_NOME;

    public function setIsHtml($isHtml = true)
    {
        $this->isHtml = $isHtml;
    }

    public function setServer($server)
    {
        $this->SMTP_SERVER = $server;
    }

    public function setUserName($userName)
    {
        $this->SMTP_USERNAME = $userName;
    }

    public function setPassword($password)
    {
        $this->SMTP_PASSWORD = $password;
    }

    public function setFromEmail($fromEmail)
    {
        $this->SMTP_FROMEMAIL = $fromEmail;
    }

    public function setFromNome($fromNome)
    {
        $this->SMTP_FROMNAME = $fromNome;
    }
    public function sendMail($adress = array(), $subject = "", $body = "")
    {
        $mail = new PHPMailer();

        $mail->IsSMTP();
        $mail->SMTPSecure = "ssl";
        $mail->SMTPAuth   = true;
        $mail->Host = __SMTP_SERVER;
        $mail->Username = __SMTP_USER;
        $mail->Password = __SMTP_PASS;
        $mail->Port = 465;

        $mail->From = __SMTP_EMAIL;
        $mail->FromName = __SMTP_NOME;

        if ( is_array($adress) )
        {
            foreach( $adress as $email )
            {
                $mail->AddAddress($email['email'], $email['nome']);
            }
        }
        else
        {
            $mail->AddAddress($adress);
        }

        $mail->IsHTML( $this->isHtml );

        $mail->Subject  = $subject;
        $mail->Body = $body;

        $enviado = $mail->Send();

        $mail->ClearAllRecipients();
        $mail->ClearAttachments();

        if ($enviado) {
            echo 'Email enviado com sucesso !';
        } else {
            echo "Não foi possível enviar o e-mail.";
            echo "Informações do erro: " . $mail->ErrorInfo;
        }
    }
}