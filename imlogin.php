<?php
include("res/login.php");
$iIndex = explode("|",$area_indexes);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="-???-" lang="-???-" dir="ltr">
<head>
	<title>-???-</title>

	<!-- Contents -->
	<meta http-equiv="Content-Type" content="text/html; charset=-???-" />
	<meta http-equiv="Content-Language" content="-???-" />
	<meta http-equiv="last-modified" content="24/07/2011 15:00:42" />
	<meta http-equiv="Content-Type-Script" content="text/javascript" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- imCustomHead -->
	<meta http-equiv="Expires" content="0" />
	<meta name="Resource-Type" content="document" />
	<meta name="Distribution" content="global" />
	<meta name="Robots" content="index, follow" />
	<meta name="Revisit-After" content="21 days" />
	<meta name="Rating" content="general" />
	<!-- Others -->
	<meta name="Author" content="Luisa Pinto, Yoximar Sequera" />
	<meta name="Generator" content="Incomedia WebSite X5 Evolution 8.0.11 - www.websitex5.com" />
	<meta http-equiv="ImageToolbar" content="False" />
	<meta name="MSSmartTagsPreventParsing" content="True" />
	
	<!-- Parent -->
	<link rel="sitemap" href="imsitemap.html" title="-???-" />
	<!-- Res -->
	<script type="text/javascript" src="res/x5engine.js"></script>
	<link rel="stylesheet" type="text/css" href="res/styles.css" media="screen, print" />
	<link rel="stylesheet" type="text/css" href="res/template.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="res/print.css" media="print" />
	<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="res/iebehavior.css" media="screen" /><![endif]-->
	<!-- imPageCSS -->
	<link rel="stylesheet" type="text/css" href="res/handheld.css" media="handheld" />
	<link rel="alternate stylesheet" title="-???-" type="text/css" href="res/accessibility.css" media="screen" />
<!-- imCustomCode -->
</head>
<body>
<div id="imSite">
<div id="imHeader">
	<h1>ueefm</h1>
</div>
<div class="imInvisible">
<hr />
<a href="#imGoToCont" title="-???-">-???-</a>
</div>
<div id="imBody">
	<div id="imMenuMain">

<!-- Menu START -->
<a name="imGoToMenu"></a><p class="imInvisible">-???-</p>
<div id="imMnMn">
<ul>
	<li><a class="imMnItm_1" href="index.html" title=""><span class="imHidden">P�gina de inicio</span></a></li>
	<li><a class="imMnItm_2" href="plano_de_ubicacion.html" title=""><span class="imHidden">Plano de Ubicaci�n</span></a></li>
	<li><a class="imMnItm_3" href="mision_y_vision.html" title=""><span class="imHidden">Misi�n y Visi�n</span></a></li>
	<li><a class="imMnItm_4" href="objetivos.html" title=""><span class="imHidden">Objetivos</span></a></li>
	<li><a class="imMnItm_5" href="servicios.php" title=""><span class="imHidden">Servicios</span></a></li>
	<li><a class="imMnItm_6" href="personal.html" title=""><span class="imHidden">Personal</span></a></li>
	<li><a class="imMnItm_7" href="eventos.html" title=""><span class="imHidden">Eventos</span></a></li>
	<li><a class="imMnItm_8" href="galeria_de_imagenes.html" title=""><span class="imHidden">Galeria de Im�genes</span></a></li>
	<li><a class="imMnItm_9" href="entretenimiento.html" title=""><span class="imHidden">Entretenimiento</span></a></li>
</ul>
</div>
<!-- Menu END -->

	</div>
<hr class="imInvisible" />
<a name="imGoToCont"></a>
	<div id="imContent">
<?php
echo "<h2>" . $area_settings[$iIndex[0]-1][0] . "</h2>\n";
echo "<div id=\"imLockTxt\">" . $area_settings[$iIndex[0]-1][1] . "<br />\n";
?>
<form id="imLockForm" action="imlogin.php" method="post">
<?php
if($session_error == true)
   echo "<span id=\"imLockAlert\">" . $local_string[4] . "</span><br />";
?>
<span class="imLockLabel"><?php echo $local_string[0]; ?></span><input class="imLockFld" type="text" name="user" /><br />
<span class="imLockLabel"><?php echo $local_string[1]; ?></span><input class="imLockFld" type="password" name="psw" /><br />
<input class="imLockBtn" type="submit" name="Submit" value="<?php echo $local_string[2]; ?>" />
<?php
if ($area_settings[$iIndex[0]-1][2] != "")
   echo "      <input class=\"imLockBtn\" type=\"button\" value=\"" . $local_string[3] . "\" onclick=\"window.location='" . $area_settings[$iIndex[0]-1][2] . "'\" />\n";
?>
</form>
</div>

	</div>
	<div id="imFooter">
	</div>
</div>
</div>
<div class="imInvisible">
<hr />
<a href="#imGoToCont" title="-???-">-???-</a> | <a href="#imGoToMenu" title="-???-">-???-</a>
</div>


<div id="imShowBoxBG" style="display: none;" onclick="imShowBoxHide()"></div>
<div id="imShowBoxContainer" style="display: none;" onclick="imShowBoxHide()"><div id="imShowBox" style="height: 200px; width: 200px;"></div></div>
<div id="imBGSound"></div>
<div id="imToolTip"><script type="text/javascript">var imt = new IMTip;</script></div>
<script type="text/javascript">imPreloadImages('res/immnu_01b.gif,res/immnu_02b.gif,res/immnu_03b.gif,res/immnu_04b.gif,res/immnu_05b.gif,res/immnu_06b.gif,res/immnu_07b.gif,res/immnu_08b.gif,res/immnu_09b.gif')</script>
</body>
</html>
