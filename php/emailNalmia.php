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
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.nalmia.com';                   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contact@nalmia.com';    //SMTP username
    $mail->Password   = '0Gg754ODxW';                     //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                                  //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //MANDAMOS EL NOMBRE EN UNA VARIABLE PARA PODER AGREGARLE LAA COMILLA SIMPLE
    $slh = "Nalmia Development";
    //Recipients
    $mail->setFrom('contact@nalmia.com', $slh); //QUIEN MANDA, CON EL NOMBRE
    $mail->addAddress('contact@nalmia.com', 'Nalmia Development'); //QUIEN RECIB

    //Content
    $mail->isHTML(true); //ACEPTAR HTML
    $mail->Subject = 'Datos del formulario';
    $mail->Body    = '<html xmlns="http://www.w3.org/1999/xhtml">

          <head>
              <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
              <meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no" name="viewport">
              <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
              <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
              <meta content="#EEEEEE" name="sr bgcolor">
              <title>Contact Formulario</title>
              <style type="text/css">
                  html,
                  body {
                      width: 100%;
                      margin: 0;
                  }
          
                  #divPadre {
                      text-align: center;
                      margin: 150px 20px;
                      padding: 0 20px;
                  }
          
                  #divHijo {
                      max-width: 650px;
                      padding: 10px;
                      margin: 150px auto;
                      background-color: rgb(255, 255, 255);
                      border-radius: 10px;
                      box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
                  }
          
                  b {
                      color: #696969;
                  }
          
                  p {
                      font-size: 14px;
                      margin-bottom: 5px;
                      margin-top: 0;
                  }
                  
                  p, h3 {
                      color: #848484;
                      text-align: left;
                  }
          
                  a {
                      text-decoration: none;
                      color: cornflowerblue;
                  }
          
                  .conteiner {
                      margin-top: 50px;
                      display: flex;
                      flex-direction: row;
                      flex-wrap: wrap;
                  }
              </style>
          
          
          
          </head>
          
          <body
              style="margin:0; padding:5px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #f4f4f4;">
          
              <div id="divPadre">
          
                  <div id="divHijo">
          
          
                      <div style="margin: 20px 50px 50px 50px;">
                          <div>
                            <img style="width:200px" src="https://nalmia.com/img/logo-dark.jpg?=5">
                          </div>
          
                          <div class="container">                    
                              
                              <div style="width:100%; display: inline-block;">          
                                  <div style="margin-bottom: 30px;">
                                        <h3><b>¡Un nuevo usuario mandó formulario!</h3>
                                        <h3>Estos son los datos que han proporcionado:</h3>
                                        <p style="margin-bottom: 15px;"><b>Nombre: </b>' . $nombre . '</p>
                                        <p style="margin-bottom: 15px;"><b>Correo: </b>' . $email . '</p>
                                        <p style="margin-bottom: 15px;"><b>Teléfono: </b>' . $full_tel . '</p>
                                        <p style="margin-bottom: 15px;"><b>Mensaje: </b>' . $msj . '</p>
                                        <p style="margin-bottom: 15px; font-size: 12px;">Todos los derechos reservados Banana Group Marketing 2023</p>
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
    $codigo_de_error = "0";
    header('location: /?msj='. $codigo_de_error);
        if (isset($_GET)) {
        include_once("php/msg2.php");
        }
     exit;
} catch (Exception $e) {
    echo "ERROR";
}