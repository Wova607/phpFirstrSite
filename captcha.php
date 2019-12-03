<?php
header("Content-type: image/jpeg");
$img = imagecreate(150, 40);
$background_color = imagecolorallocate($img, 80, 80, 80);
$text_color = imagecolorallocate($img, 255, 255, 255);
$str=rand(); 
$text = md5($str);
$text=substr($text, 0, 8); 
imagestring($img, 5, 40, 10, $text, $text_color);
imagejpeg($img);
?>