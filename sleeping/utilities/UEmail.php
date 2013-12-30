<?php
require("../libs/phpmailer/class.phpmailer.php");
/**
 * @access public
 * @author Alessandro Verzicco
 * @package System
 */
class UEmail {
    private $_mail;
    public function __construct() {
        global $PATH;
        $this->_mail = new PHPMailer();
        $this->_mail->IsSMTP();              // set mailer to use SMTP
        $this->_mail->Host = $PATH['smtp']['host'];  // specify main and backup server
        $this->_mail->Port = $PATH['smtp']['port'];  // specify main and backup server
        $this->_mail->SMTPAuth = $PATH['smtp']['smtpauth']; // turn on SMTP authentication
        $this->_mail->Username = $PATH['smtp']['username']; // SMTP username
        $this->_mail->Password = $PATH['smtp']['password']; // SMTP password
        $this->_mail->Charset = 'utf-8';
    }
    public function invia_email($email_destinatario, $nome_destinatario, $oggetto, $corpo_email, $corpo_email_testo_semplice = '', $html=false) {
        //$this->_mail->From = 'bookstore@lamjex.com';

        //$this->_mail->Sender = 'bookstore@lamjex.com';
        //$this->_mail->FromName = 'BookStore';
        $this->_mail->AddAddress($email_destinatario, $nome_destinatario);
        $this->_mail->SetFrom('bookstore@lamjex.com','BookStore');
        $this->_mail->WordWrap = 50;                                 // set word wrap to 50 characters
        //$this->_mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
        //$this->_mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
        $this->_mail->IsHTML($html); // set email format to HTML
        $this->_mail->Subject = $oggetto;
        $this->_mail->Body    = $corpo_email;
        $this->_mail->AltBody = $corpo_email_testo_semplice;

        if(!$this->_mail->Send()) {
            echo("L'email non pu&ograve; essere inviata <p>");
            echo("Errore: " . $this->_mail->ErrorInfo);
            return false;
        }
        echo("L'email &egrave; stata inviata");
        return true;
    }
}
?>