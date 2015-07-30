<?php
$userarr = array( 'username' => 'FERY_FIRAS','name' => 'firas zaiud');
 
$userarr['points']=13;

echo $userarr['username']. " ".$userarr['name']."<br />";

foreach($userarr as $key => $value)
	{
	echo $key. " ".$value. " <br>" ;
	}




?>