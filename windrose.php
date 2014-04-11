<?php
//fetching wind data
$azi = file_get_contents('http://www.biolveg.uma.es/aero/weather/meteoclimatic.htm');
$azi = explode("=",$azi);
$azi = ($azi[7]);
$azi = explode("*",$azi);
$azi = ($azi[0]);
$azi = $azi - 90;
$altobru = 51;
$anchobru = 51;
$brujula = imagecreatetruecolor($altobru, $anchobru);

imageantialias($brujula, TRUE);

//pointer size
$largo = 21;
$largo2 = 6;
$ancho = 5;

//Colors
$blanco = imagecolorallocate($brujula, 255, 255, 255);
$rojo = imagecolorallocate($brujula, 190, 0, 0);
$rojo2 = imagecolorallocate($brujula, 255, 0, 0);
$gris = imagecolorallocate($brujula, 204, 204, 204);
$gris2 = imagecolorallocate($brujula, 221, 221, 221);
$gris3 = imagecolorallocate($brujula, 180, 180, 180);
$gris4 = imagecolorallocate($brujula, 160, 160, 160);
$azul = imagecolorallocate($brujula, 0, 128, 255);
$azul2 = imagecolorallocate($brujula, 0, 102, 204);

//angles 
$a1 = 25 + cos(deg2rad($azi)) * $largo;
$a2 = 25 + sin(deg2rad($azi)) * $largo;
$a3 = 25 + cos(deg2rad($azi + 180)) * $largo2;
$a4 = 25 + sin(deg2rad($azi + 180)) * $largo2;
$b1 = 25 + cos(deg2rad($azi + 90)) * $ancho;
$b2 = 25 + sin(deg2rad($azi + 90)) * $ancho;
$b3 = 25 + cos(deg2rad($azi + 270)) * $ancho;
$b4 = 25 + sin(deg2rad($azi + 270)) * $ancho;
$c1 = 25;
$c2 = 25;

//Drawing the Rose

imagefilledrectangle($brujula, 0, 0, 51, 51, $blanco);
//imagefilledarc($brujula, 25, 25, 47, 47, 0, 359, $azul2, IMG_ARC_EDGED);
//imagefilledarc($brujula, 25, 25, 43, 43, 0, 359, $blanco, IMG_ARC_EDGED);


//Polygons:
$AA = array(0,25, 18,18, 32,32, 50,25);
$AB = array(0,25, 18,32, 32,18, 50,25);
$BA = array(18,18, 25,0, 25,25);
$BB = array(32,18, 25,0, 25,25);
$CA = array(18,32, 25,50, 25,25);
$CB = array(32,32, 25,50, 25,25);
$DA = array(39,11, 32,32, 18,18, 11,39);
$DB = array(39,11, 18,18, 32,32, 11,39);
$EA = array(11,11, 32,18, 18,32, 39,39);
$EB = array(11,11, 18,32, 32,18, 39,39);

$AA = array(0,25, 18,18, 32,32, 50,25);
$AB = array(0,25, 18,32, 32,18, 50,25);
$BA = array(18,18, 25,0, 25,25);
$BB = array(32,18, 25,0, 25,25);
$CA = array(18,32, 25,50, 25,25);
$CB = array(32,32, 25,50, 25,25);
$DA = array(39,11, 32,32, 18,18, 11,39);
$DB = array(39,11, 18,18, 32,32, 11,39);
$EA = array(11,11, 32,18, 18,32, 39,39);
$EB = array(11,11, 18,32, 32,18, 39,39);

//1a
imagefilledpolygon($brujula, $DA, 4, $gris);
imagefilledpolygon($brujula, $DB, 4, $gris2);
imagefilledpolygon($brujula, $EA, 4, $gris);
imagefilledpolygon($brujula, $EB, 4, $gris2);
imagepolygon($brujula, $DA, 4, $gris);
imagepolygon($brujula, $DB, 4, $gris2);
imagepolygon($brujula, $EA, 4, $gris);
imagefilledpolygon($brujula, $EB, 4, $gris2);

imagefilledpolygon($brujula, $AA, 4, $gris);
imagefilledpolygon($brujula, $AB, 4, $gris2);
imagefilledpolygon($brujula, $CA, 3, $gris);
imagefilledpolygon($brujula, $CB, 3, $gris2);
imagefilledpolygon($brujula, $BA, 3, $gris3);
imagefilledpolygon($brujula, $BB, 3, $gris4);

imagepolygon($brujula, $AA, 4, $gris);
imagepolygon($brujula, $AB, 4, $gris2);
imagepolygon($brujula, $CA, 3, $gris);
imagepolygon($brujula, $CB, 3, $gris2);
imagepolygon($brujula, $BA, 3, $gris3);
imagepolygon($brujula, $BB, 3, $gris4);

//Filling the polygons

//1
imagefilledpolygon($brujula, 
array (
$a1,$a2,
$b1,$b2,
$c1,$c2),
3,
$azul);
//2
imagefilledpolygon($brujula, 
array (
$a1,$a2,
$b3,$b4,
$c1,$c2),
3,
$azul2);
//3
imagefilledpolygon($brujula, 
array (
$a3,$a4,
$b1,$b2,
$c1,$c2),
3,
$azul2);
//4
imagefilledpolygon($brujula, 
array (
$a3,$a4,
$b3,$b4,
$c1,$c2),
3,
$azul);
//////antialiasing:
imagepolygon($brujula, 
array (
$a1,$a2,
$b1,$b2,
$c1,$c2),
3,
$azul);
//2
imagepolygon($brujula, 
array (
$a1,$a2,
$b3,$b4,
$c1,$c2),
3,
$azul2);
//3
imagepolygon($brujula, 
array (
$a3,$a4,
$b1,$b2,
$c1,$c2),
3,
$azul2);
//4se ve 
imagepolygon($brujula, 
array (
$a3,$a4,
$b3,$b4,
$c1,$c2),
3,
$azul);

imagesetpixel($brujula, 25, 25, $blanco);
//creamos la imagen
header("Content-Type: image/png");
imagepng($brujula);
//liberamos memoria
imagedestroy($brujula);
?>
