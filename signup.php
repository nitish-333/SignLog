<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "Engage";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "Engage";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO Signup (name, email, password) 
VALUES ('$name', '$email', '$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Succesfully Registered');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Please try again');
	</script>
	<?php
}


?>




















