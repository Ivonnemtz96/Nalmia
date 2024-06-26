<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once($_SERVER["DOCUMENT_ROOT"] . "/php/Exception.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/php/PHPMailer.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/php/SMTP.php");

//Create an instance; passing `true` enables exceptions
extract($_REQUEST);
$codigo_de_error = "";

$mail = new PHPMailer(true);

/* Códigos de error
0 -> Todo correcto
1 -> Un campo vacío
2 -> No se pudo enviar el mensaje, problema ajeno a validaciones
3 -> No se seleccionó Captcha
*/

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
  
    //reCaptcha de Google
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lf5F9UpAAAAAIzQ8QRjmhmVDNEXTk3j3JjyCj2R';
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
  
    if (isset($recaptcha->score)) {
      if ($recaptcha->score <= 0.5) {
        //BOT DETECTADO
        header('location: /index.php?msj=3');
        exit;
      }
    } else {
      //CAPTCHA EXPIRÓ
      header('location: /index.php?msj=3');
      exit;
    }
    //PASÓ VALIDACIONES
 
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.nalmia.com';                   //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contact@nalmia.com';    //SMTP username
        $mail->Password   = '0Gg754ODxW';                       //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                                  //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //MANDAMOS EL NOMBRE EN UNA VARIABLE PARA PODER AGREGARLE LAA COMILLA SIMPLE
        $slh = "Nalmia Development";
        //Recipients
        $mail->setFrom('contact@nalmia.com', $slh); //QUIEN MANDA, CON EL NOMBRE
        $mail->addAddress($email, $nombre); //QUIEN RECIBE

        //Content
        $mail->isHTML(true); //ACEPTAR HTML
        $mail->Subject = 'Download our Brochure';

        $mail->Body    = '<html xmlns="http://www.w3.org/1999/xhtml">

            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" name="viewport">
                <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
                <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
                <meta content="#EEEEEE" name="sr bgcolor">
                <title>Download our Brochure</title>
                <style type="text/css">
                @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap");
                    html,
                    body {
                        width: 100%;
                        margin: 0;
                    }
            
                    #divPadre {
                        margin: 47px 13px;
                        padding: 0 20px;
                        font-family: "Montserrat", sans-serif;
                    }
            
                    #divHijo {
                        max-width: 100%;
                        padding: 10px;
                        margin: 40px auto;
                        background-color: rgb(255, 255, 255);
                        border-radius: 10px;
                        font-family: "Montserrat", sans-serif;
                        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
                    }
            
                    b {
                        color: #696969;
                    }
            
                    p {
                        margin-bottom: 5px;
                        margin-top: 0;
                    }
                    
                    p, h3 {
                        color: #848484;
                    }
            
                    a {
                        text-decoration: none;
                    }
            
                    .container {
                        margin-top: 50px;
                        display: flex;
                        flex-direction: row;
                        flex-wrap: wrap;
                    }
                    .pie-mensaje{

                        text-align:center;
                        font-family: "Montserrat", sans-serif;
                    }
                    .link-pdf{
                        margin-top:2rem;
                        margin-bottom:2rem;
                    }
                    .link-pdf a{
                        color:#fff !important;
                    }

                    .descargar-pdf{
                        border: #bbab9b 1px solid;
                        background:#bbab9b;
                        padding: 11px;
                        margin-top: 30px;
                        margin-bottom: 30px;
                        border-radius: 10px;
                    }
                    .footer{
                        margin-top:4rem;
                        text-align:center;
                        font-family: "Montserrat", sans-serif;
                    }
                    .cuerpo-mensaje{
                        text-align: justify;
                    }
                </style>
            </head>
            
            <body style="margin:0; padding:5px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #f4f4f4;">
            
                <div id="divPadre">
            
                    <div id="divHijo">
                        <div style="padding:20px;">
                            <div class="container">                    
                                
                                <div style="width:100%; display: inline-block;">
                                    <div style="margin-bottom: 30px;">
                                    <div style="width:100%; display: inline-block;">
            
                                    <div class="cuerpo-mensaje" style="margin-bottom: 30px;">
                                        <p style="margin-bottom: 15px; font-family: "Montserrat", sans-serif;">
                                        Dear ' . $nombre . ', <br> <br>

                                        Thank you for your interest in Nalmia Villas. We’re thrilled to share with you all the
                                        detailed information you need. <br><br>

                                        You’ll find attached a detailed Brochure, containing all the essential information for
                                        you to envision your future home. Plans, prices, and much more await you in this
                                        exclusive document. <br><br>

                                        For any additional questions or to discuss your specific needs, feel free to share with
                                        us your availability to organize a call with one of our dedicated team
                                        members. <br><br>

                                        We are here to guide you through every step of your journey towards realizing your
                                        real estate dream. <br> <br>
                                        Best regards,
                                        </p>
                                        <div class="pie-mensaje">
                                            <div class="col-md-12">
                                                <h3 >Nalmia Development Team</h3>
                                            </div>

                                            <div class="col-md-12">
                                                <img style="width:200px" src="https://nalmia.com/img/logo-dark.jpg?=5">
                                                <br><br><br>
                                                <a target="_blank" href="https://nalmia.com/">www.nalmia.com</a> <br><br>
                                            </div>

                                            <div class="col-md-12 link-pdf">
                                                <a class="descargar-pdf"  href="https://nalmia.com/NALMIA Villas -Brochure.pdf">Download Brochure</a>
                                            </div>
                                        </div>
                                        
                                        <p class="footer">
                                        All rights reserved Banana Group Marketing 2023
                                        </p>
                                    </div>
                                </div>            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            </html>
            ';
        $mail->CharSet = 'UTF-8';

        $mail->send();
        // Una vez que se mande el correo automático se procede a enviar los datos del formulario a Nalmia
        require_once($_SERVER["DOCUMENT_ROOT"] . "/php/emailNalmia.php");
        $codigo_de_error = "0";
        header('location: /?msj='. $codigo_de_error);
        if (isset($_GET)) {
        include_once("php/msg2.php");
        }
        exit;
    } catch (Exception $e) {
        $codigo_de_error = "2";
        header('location: /?msj='. $codigo_de_error);
        if (isset($_GET)) {
        include_once("php/msg2.php");
        }
        exit;
    }
} else {
    header('location: /index.php?msj=4');
    exit;
  }