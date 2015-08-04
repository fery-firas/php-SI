<?php

function printheader($title = null)
{
	global $default_hedar;
	if (!isset($title))
	{
		$title = $default_hedar;
	}
	echo $title;
}
function printfoter() 
{
	
}
		
?>