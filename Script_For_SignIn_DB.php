

echo "Inside Scriptfor DB "."<br>";

<?php


session_start();
date_default_timezone_set('Africa/Johannesburg');
$mysqltime = date('Y-m-d H:i:s', time());
 
$servername = "35.194.36.11";
$username = "root";
$password = "TMP1";
$dbname = "IG";

//$dt = new DateTime();
//echo $dt->format('Y-m-d H:i:s');


echo "<br>";
echo "TIME:".$mysqltime ;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];



	$sql = "SELECT * FROM users WHERE email='".$_POST["email"]."'";
	

$result = $conn->query($sql);

echo "results";

if(!empty( $result->fetch_assoc() )
           ){ 		$sql2 = "UPDATE users SET google_id='".$_POST["id"]."',updated_at ='$mysqltime' WHERE email='".$_POST["email"]."' "; echo "in update";}
           
 else{ 	$sql2 = "INSERT INTO users (name, email, google_id, created_at ,updated_at) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."','$mysqltime','$mysqltime')"; echo "in insert";}
            

	$conn->query($sql2);

if ($conn->query($sql) === TRUE) { echo "New record created successfully"; } 
				  else { echo "Error: " . $sql2 . "<br>" . $conn->error;}

?>

