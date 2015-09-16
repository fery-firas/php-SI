<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Homework 2</title>
</head>
<body>
<?php
    $userArr = array();

	$userArr[] = array('mail'=> 'http://mail.bg/');
    $userArr[] = array('AБВ'=>'http://www.abv.bg/');
    $userArr[] = array('facebook'=>'http://www.facebook.com/');
    $userArr[] = array('Google' =>'https://www.google.bg/');
    $userArr[] = array('Vbox7'=>'http://vbox7.bg/');

	
    
foreach($userArr as $var) 
{
    foreach($var as $key=>$value)
    {
        echo "<a href='$value'> $key </a>"  ;
        echo "<br>";
    }
}
  
?>

</body>
</html>
