<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
    $DOB = $_POST['DOB'];
    $age = $_POST['age'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','user_registeration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into user_account(firstName, lastName, DOB, age, gender, email, password, number) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisssi", $firstName, $lastName, $DOB, $age, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successful...";
		$stmt->close();
		$conn->close();
	}
?>