<?php
$servername="localhost";
$username="root";
$password= "";
$database_name="flight booking";
$conn= mysqli_connect($servername, $username, $password, $database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed: " . mysqli_connect_error());
}
if(isset($_POST['save']))
{
	$Name = $_POST['Name'];
	$Gender = $_POST['Gender'];
	$Contact_no = $_POST['Contact_no'];
	$Date_of_birth = $_POST['Date_of_birth'];
	$Age = $_POST['Age'];
	$User_ID = $_POST['User_ID'];
	$Authentication_proof = $_POST['Authentication_proof'];
	$Message = $_POST['Message'];

	$sql_query="INSERT INTO passenger (Name, Gender, Contact no, Date of birth, Age, User ID, Authentication proof, Message )
	VALUES ('$Name', '$Gender', '$Contact no', '$Date of birth', '$Age', '$User ID', '$Authentication proof', '$Message')";
	if (mysqli_query($conn, $sql_query))
	{
		echo "New Details Entry inserted successfully !";
	}
	else
	{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>