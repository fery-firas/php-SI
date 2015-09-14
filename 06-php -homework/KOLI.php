<?php
	$array = array("lada", "honda", "toyota", "audi", "Mazda");

	$array[] = "Mercedes";

	$size = count($array);

	for($i = 0; $i < $size; $i++)
	{
		echo "<p>ISKAM DA KUPA " . $array[$i] . "</p>";
	}
	unset($array[5]);
	echo "<br />";
	$size = count($array);
	for($i = 0; $i < $size; $i++)
	{
	echo "<p>SHTE VZEMA" . $array[$i] . "</p>";
	}
?>