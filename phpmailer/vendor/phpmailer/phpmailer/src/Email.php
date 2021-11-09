<?php      

namespace PHPMailer\PHPMailer;


class Email{


    private $mail = null;

    function __construct()
    {
        
        $this->mail = new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->SMTPAuth=true;
        $this->mail->SMTPSecure='tls';
        $this->mail->Host="smtp.gmail.com";
        $this->mail->Port=587;
        $this->mail->Username= ""; //email desde que lo vas a enviar
        $this->mail->Password="";// pass generada por gmail
    }

    public function metEnviar(String $titulo ,String $nombre, String $correo,String $asunto,String $bodyHTML)
    {
        try {
            $this->mail->setFrom("myjobmdp@gmail.com",$titulo);
            $this->mail->addAddress($correo,$nombre);
            $this->mail->Subject=$asunto;
            $this->mail->Body=$bodyHTML;
            $this->mail->isHTML(true);
            $this->mail->CharSet = "UTF-8";

            return  $this->mail->send();
         }
        catch (Exception  $e) 
        {
            echo  "No se pudo enviar el mensaje. Error de correo: {$this->mail-> ErrorInfo}" ;
        }




}




}


?>