<?php
	$myfile = fopen("test.txt","w");
	//$myfile = fopen("userCreatedHTML.txt", "w") or die("Unable to open file!");
	$txt = "Mickey Mouse\n";
	fwrite($myfile, $txt);
	$txt = "Minnie Mouse\n";
	fwrite($myfile, $txt);
	fclose($myfile);
?>