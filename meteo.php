<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="150";>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- (c) 2010 por Zebenzui Perona -->
<title>Meteo</title>
<style type="text/css">
<!--
.style1 {
	color: #666666;
	font-weight: bold;
	font-size: x-small;
}
-->
</style>
</head>
<body>
<?php

//variables:
$sens = file_get_contents('http://www.biolveg.uma.es/aero/weather/meteoclimatic.htm');
$sens = explode("=",$sens);

$upd = ($sens[4]);
$upd = explode("*",$upd);
$upd = ($upd[0]);

$tmp = ($sens[5]);
$tmp = explode("*",$tmp);
$tmp = ($tmp[0]);

$wnd = ($sens[6]);
$wnd = explode("*",$wnd);
$wnd = ($wnd[0]);

$azi = ($sens[7]);
$azi = explode("*",$azi);
$azi = ($azi[0]);

$bar = ($sens[8]);
$bar = explode("*",$bar);
$bar = ($bar[0]);

$hum = ($sens[9]);
$hum = explode("*",$hum);
$hum = ($hum[0]);

$dhtm = ($sens[12]);
$dhtm = explode("*",$dhtm);
$dhtm = ($dhtm[0]);

$dltm = ($sens[13]);
$dltm = explode("*",$dltm);
$dltm = ($dltm[0]);

$dhhm = ($sens[14]);
$dhhm = explode("*",$dhhm);
$dhhm = ($dhhm[0]);

$dlhm = ($sens[15]);
$dlhm = explode("*",$dlhm);
$dlhm = ($dlhm[0]);

$dhbr = ($sens[16]);
$dhbr = explode("*",$dhbr);
$dhbr = ($dhbr[0]);

$dlbr = ($sens[17]);
$dlbr = explode("*",$dlbr);
$dlbr = ($dlbr[0]);

$dgst = ($sens[18]);
$dgst = explode("*",$dgst);
$dgst = ($dgst[0]);

$dpcp = ($sens[21]);
$dpcp = explode("*",$dpcp);
$dpcp = ($dpcp[0]);

$wrun = ($sens[22]);
$wrun = explode("*",$wrun);
$wrun = ($wrun[0]);

$mhtm = ($sens[23]);
$mhtm = explode("*",$mhtm);
$mhtm = ($mhtm[0]);

$mltm = ($sens[24]);
$mltm = explode("*",$mltm);
$mltm = ($mltm[0]);

$mhhm = ($sens[25]);
$mhhm = explode("*",$mhhm);
$mhhm = ($mhhm[0]);

$mlhm = ($sens[26]);
$mlhm = explode("*",$mlhm);
$mlhm = ($mlhm[0]);

$mhbr = ($sens[27]);
$mhbr = explode("*",$mhbr);
$mhbr = ($mhbr[0]);

$mlbr = ($sens[28]);
$mlbr = explode("*",$mlbr);
$mlbr = ($mlbr[0]);

$mgst = ($sens[29]);
$mgst = explode("*",$mgst);
$mgst = ($mgst[0]);

$mpcp = ($sens[32]);
$mpcp = explode("*",$mpcp);
$mpcp = ($mpcp[0]);

$yhtm = ($sens[33]);
$yhtm = explode("*",$yhtm);
$yhtm = ($yhtm[0]);

$yltm = ($sens[34]);
$yltm = explode("*",$yltm);
$yltm = ($yltm[0]);

$yhhm = ($sens[35]);
$yhhm = explode("*",$yhhm);
$yhhm = ($yhhm[0]);

$ylhm = ($sens[36]);
$ylhm = explode("*",$ylhm);
$ylhm = ($ylhm[0]);

$yhbr = ($sens[37]);
$yhbr = explode("*",$yhbr);
$yhbr = ($yhbr[0]);

$ylbr = ($sens[38]);
$ylbr = explode("*",$ylbr);
$ylbr = ($ylbr[0]);

$ygst = ($sens[39]);
$ygst = explode("*",$ygst);
$ygst = ($ygst[0]);

$ypcp = ($sens[42]);
$ypcp = explode("*",$ypcp);
$ypcp = ($ypcp[0]);

if ($azi > 348.75 || $azi < 11.25) {
$rum = "N";
}
elseif ($azi < 33.75 && $azi > 11.25) {
$rum = "NNE";
}
elseif ($azi < 56.25 && $azi > 33.75) {
$rum = "NE";
}
elseif ($azi < 78.75 && $azi > 56.25) {
$rum = "ENE";
}
elseif ($azi < 101.25 && $azi > 78.75) {
$rum = "E";
}
elseif ($azi < 123.75 && $azi > 101.25) {
$rum = "ESE";
}
elseif ($azi < 146.25 && $azi > 123.75) {
$rum = "SE";
}
elseif ($azi < 168.75 && $azi > 146.25) {
$rum = "SSE";
}
elseif ($azi < 191.25 && $azi > 168.75) {
$rum = "S";
}
elseif ($azi < 213.75 && $azi > 191.25) {
$rum = "SSO";
}
elseif ($azi < 236.25 && $azi > 213.75) {
$rum = "SO";
}
elseif ($azi < 258.75 && $azi > 236.25) {
$rum = "OSO";
}
elseif ($azi < 281.25 && $azi > 258.75) {
$rum = "O";
}
elseif ($azi < 303.75 && $azi > 281.25) {
$rum = "ONO";
}
elseif ($azi < 326.25 && $azi > 303.75) {
$rum = "NO";
}
elseif ($azi < 348.75 && $azi > 326.25) {
$rum = "NNO";
}
?>

<table align="center" border="0" cellpadding="3" cellspacing="1">
<tbody>
<tr class="separador">
</tr>
</tbody>
</table>
<table style="height: 120px; width: 405px;" align="center" border="0">
<tbody>
<tr>
<td style="background-color: #0066cc; width: 135px;" colspan="3" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><span style="color: #ffffff;"><strong>Temperatura</strong></span></span></span></td>
<td style="background-color: #0066cc; width: 135px;" colspan="3" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><span style="color: #ffffff;"><strong>Humedad</strong></span></span></span></td>
<td style="background-color: #0066cc; width: 135px;" colspan="3" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><span style="color: #ffffff;"><strong>Presión</strong></span></span></span></td>
</tr>
<tr>
<td style="border: 1px solid #0066cc;" colspan="3" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($tmp);
?> ºC</span></span></td>
<td style="border: 1px solid #0066cc;" colspan="3" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($hum);
?>%</span></span></td>
<td style="border: 1px solid #0066cc;" colspan="3" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($bar);
?> hPa</span></span></td>
</tr>
<tr>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Máx.<br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Mín.<br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Máx.<br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Mín.<br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Máx.<br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Mín.<br /></span></span></td>
</tr>
<tr>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Hoy</span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($dhtm);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($dltm);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Hoy</span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($dhhm);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($dlhm);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Hoy</span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($dhbr);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($dlbr);
?><br /></span></span></td>
</tr>
<tr>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Mes</span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($mhtm);
?><br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($mltm);
?><br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Mes</span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($mhhm);
?><br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($mlhm);
?><br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Mes</span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($mhbr);
?><br /></span></span></td>
<td style="background-color: #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($mlbr);
?><br /></span></span></td>
</tr>
<tr>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Año</span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($yhtm);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($yltm);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Año</span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($yhhm);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($ylhm);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Año</span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($yhbr);
?><br /></span></span></td>
<td style="border: 1px solid #dddddd; width: 45px;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($ylbr);
?><br /></span></span></td>
</tr>
<tr>
<td style="background-color: #0066cc;" colspan="4" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><span style="color: #ffffff;"><strong>Viento</strong></span></span></span><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"></span></span></td>
<td style="background-color: #0066cc;" colspan="5" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><span style="color: #ffffff;"><strong>Precipitaciones</strong></span></span></span><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><br /></span></span></td></tr>
<tr>
<td style="border: 1px solid #0066cc;" colspan="2" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($wnd);
?> km·h<sup>-1</sup> </span></span></td>
<td style="border: 1px solid #0066cc;" colspan="2" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($rum);
?><br /></span></span></td>
<td style="border: 1px solid #0066cc;" colspan="2" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($dpcp);
?> mm </span></span></td>
<td style="border: 1px solid #0066cc;" colspan="3" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">sin datos<br /></span></span></td>
</tr>
<tr>
<td style="border: 1px solid #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><br /></span></span></td>
<td style="border: 1px solid #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Máx.</span></span></td>
<td style="border: 1px solid #dddddd;" colspan="2" rowspan="4" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><img src="./brujula.php" /><br /></span></span></td>
<td style="border: 1px solid #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"></span></span></td>
<td style="border: 1px solid #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Máx.<br /></span></span></td>
<td colspan="3" rowspan="4" style="border: 1px solid #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">sin datos<br /></span></span></td>
</tr>
<tr>
<td style="background-color: #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Hoy</span></span></td>
<td style="background-color: #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($dgst);
?></span></span></td>
<td style="background-color: #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Hoy</span></span></td>
<td style="background-color: #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($dpcp);
?></span></span></td>
</tr>
<tr>
<td style="border: 1px solid #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Mes</span></span></td>
<td style="border: 1px solid #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($mgst);
?></span></span></td>
<td style="border: 1px solid #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Mes</span></span></td>
<td style="border: 1px solid #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($mpcp);
?></span></span></td>
</tr>
<tr>
<td style="background-color: #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Año</span></span></td>
<td style="background-color: #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($ygst);
?><br /></span></span></td>
<td style="background-color: #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Año</span></span></td>
<td style="background-color: #dddddd;" align="center" valign="middle"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;"><?php
print ($ypcp);
?><br /></span></span></td>
</tr>
<tr>
<td style="background-color: #ffffff; width: 600px;" colspan="9" align="center" valign="middle">
<div class="style1" align="right"><span style="font-size: 8pt;"><span style="font-family: tahoma,arial,helvetica,sans-serif;">Actualizado: <?php
print ($upd);
?></span></span></div>
</td>
</tr>
</tbody>
</table>
</body>
</html>
