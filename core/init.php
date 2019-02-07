<?php
	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['password'];


echo $email;
echo $password;


$servername = "localhost";
$username = "isma";
$password = "American1";
$dbname = "register";

try {
    $conn = new PDO("mysql:host=$servername;dbname=Ftech", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    	// inserting Records in the database




	}
?>


