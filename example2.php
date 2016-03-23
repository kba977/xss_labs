Hello 
<?php
	 
	$name =  $_GET["name"];
	$name = preg_replace("/<script>/","", $name);
	$name = preg_replace("/<\/script>/","", $name);
echo $name;
?>
