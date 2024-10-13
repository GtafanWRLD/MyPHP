<?php
	header('Content-type: image/png');
	
	$zdjecie=imagecreatetruecolor(626,626);
	
	$tlo=imagecreatefrompng('./img.png');	
	
	imagecopy($zdjecie, $tlo, 	0, 0, 0, 0, 626, 626);	
	
	
	$color1=imagecolorallocate($zdjecie, 70,110,80);
	$color2=imagecolorallocate($zdjecie, 250,40,90);
	$text_color=imagecolorallocate($zdjecie, 0,0,0);
	
	
	
	imagettftext($zdjecie, 10, 0, 196, 136, $text_color, './arial.ttf', $_POST['name2']);
	imagettftext($zdjecie, 10, 0, 196, 188, $text_color, './arial.ttf', $_POST['phone']);
	imagettftext($zdjecie, 10, 0, 196, 209, $text_color, './arial.ttf', $_POST['mail']);
	imagettftext($zdjecie, 10, 0, 196, 232, $text_color, './arial.ttf', $_POST['adress']);
	imagepng($zdjecie);
?>