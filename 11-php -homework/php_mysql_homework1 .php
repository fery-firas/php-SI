<?php
$servername = "localhost";
$username = "phpcourseUser";
$password = "parola";
$dbname = "kindergarder";

$connection = mysqli_connect($servername, $username, $password, $dbname);
			
	if (!$connection) 
	{
		die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
	} 
mysqli_set_charset($connection, "utf8");

	$id = 2;
	$sql = "DELETE FROM kindergarder.children WHERE ChildID=$id;";
	$queryResult = mysqli_query($connection, $sql);



	$ChildID = 2;
	$Name = "Ivancho";
	$Age = "3";
	$KinderGarderID = 1;

	$sql = "INSERT INTO children (ChildID, Name, Age, KinderGarderID)".
				   "VALUES ('$ChildID', '$Name', '$Age', '$KinderGarderID')";
	$queryReselt = mysqli_query($connection, $sql);

	if ($queryReselt === TRUE) 
		{
					echo "Успешно въведено дете с id = 2";
		} 
		else 
		{
			echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
		}
?>