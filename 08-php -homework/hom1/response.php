<?php

$oldpassword = 'money';
// What if POST username is not defined from the form ?
$name = $_POST["userName"];
$oldpass = $_POST["oldPass"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
if ($name === 'first-user' && $oldpass === $oldpassword && $pass1 === $pass2)
{
	echo "Успешна смяна";
}
else
{
	echo "Грешна информация";
}
?>
