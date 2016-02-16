<?php
include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Nombre y Apellido: " . $_POST["Itm_8_01_1"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Nombre y Apellido:</b></td><td>" . $_POST["Itm_8_01_1"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_1"] . ";";
$txtData .= "Cédula de Identidad: " . $_POST["Itm_8_01_2"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Cédula de Identidad:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_01_2"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_2"] . ";";
$txtData .= "Fecha de Nacimiento: " . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Fecha de Nacimiento:</b></td><td>" . "</td></tr>";
$csvData .=  . ";";
$txtData .= "Año que Cursa: " . $_POST["Itm_8_01_4"] . "\r\n";
$htmData .= "<tr><td width=\"25%\" bgcolor=\"#EEEEEE\"><b>Año que Cursa:</b></td><td bgcolor=\"#EEEEEE\">" . $_POST["Itm_8_01_4"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_4"] . ";";
$txtData .= "Sección: " . $_POST["Itm_8_01_5"] . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Sección:</b></td><td>" . $_POST["Itm_8_01_5"] . "</td></tr>";
$csvData .= $_POST["Itm_8_01_5"] . ";";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "";
$htmMsg = $htmHead . "<tr><td></td></tr>" . $htmFoot;
$oEmail = new imEMail("francisco.matute@hotmail.com","francisco.matute@hotmail.com","Registros","-???-");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "<br>" . $htmHead . "<tr><td style=\"font-size: 85%\">" . $csvData . "</td></tr>" . $htmFoot . "</center></body></html>");
$oEmail->send();

@header("Location: ../index.html");
?>
