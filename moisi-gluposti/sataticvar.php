<?php

function invar()
{
	static $count = 1;
	$count *= 2;
		echo "<div>stoinost na $count e : <strong>";
}


echo "<br / >";
echo "<div> parvi red : </div>";
invar();

echo "<br / >";
echo "<div> vtori red : </div>";
invar();

echo "<br / >";
echo "<div> treti red : </div>";
invar();


?>