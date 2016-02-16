<?php
include "../res/imemail.inc.php";

//Form Data
$txtData = "";
$htmData = "";
$txtData .= "Solicitud de:: " . ($_POST["Itm_8_00_1_sub_1"]==""?"-":$_POST["Itm_8_00_1_sub_1"]) . ", " . ($_POST["Itm_8_00_1_sub_2"]==""?"-":$_POST["Itm_8_00_1_sub_2"]) . ", " . ($_POST["Itm_8_00_1_sub_3"]==""?"-":$_POST["Itm_8_00_1_sub_3"]) . "\r\n";
$htmData .= "<tr><td width=\"25%\"><b>Solicitud de::</b></td><td>" . ($_POST["Itm_8_00_1_sub_1"]==""?"-":$_POST["Itm_8_00_1_sub_1"]) . ", " . ($_POST["Itm_8_00_1_sub_2"]==""?"-":$_POST["Itm_8_00_1_sub_2"]) . ", " . ($_POST["Itm_8_00_1_sub_3"]==""?"-":$_POST["Itm_8_00_1_sub_3"]) . "</td></tr>";

// Template
$htmHead = "<table width=\"90%\" border=\"0\" bgcolor=\"#FFFFFF\" cellpadding=\"4\" style=\"font: 11px Tahoma; color: #000000; border: 1px solid #BBBBBB;\">";
$htmFoot = "</table>";

//Send email to owner
$txtMsg = "";
$htmMsg = $htmHead . "<tr><td></td></tr>" . $htmFoot;
$oEmail = new imEMail("francisco.matute1997@hotmail.com","francisco.matute1997@hotmail.com","Solicitud","-???-");
$oEmail->setText($txtMsg . "\r\n\r\n" . $txtData);
$oEmail->setHTML("<html><body bgcolor=\"#063A69\"><center>" . $htmMsg . "<br>" . $htmHead . $htmData . $htmFoot . "</center></body></html>");
$oEmail->send();

@header("Location: ../index.html");
?>
