<?php

function multiply (&$number, $multiplier)
{
	$number*= $multiplier;
}
$number = 12;
$multiplier = 3;
multiply ($number, $multiplier);
echo "$number <br / >";
multiply ($number, $multiplier);
echo "$number <br / >";
?>