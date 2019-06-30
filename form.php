
<!Doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="template.css" type="text/css">


    <IMG src="http://www.tmpdevshop.co.za/live/TheMbeguLogo.JPG" alt="TMP LOGO"  width="256" height="128">

<header> 
<h1> Welcome to the Mbegu Platform </h1>
<h3> Please fill out the form below to get started: </h3>
</header> 

<body>
    <form method="post" action="">
    
          <!–– COMMENT Capturing the name ––>
          <label for="name">What is your name?</label> <br>
          <br>
          <input type="text" id="name" name="name" placeholder= "Your Name..."> <br>
          <br>
         
          <label for="surname">What is your surname?</label> <br>
          <br>
          <input type="text" id="surname" name="surname" placeholder= "Your Surname..."> <br>
          <br>


           <!–– COMMENT Capturing the email address ––>
          <label for="mail">What is your e-mail address?</label> <br>
          <br>
          <input type="email" id="mail" name="user_mail" placeholder="Test@TMP.co.za"><br>   
<br>
  <!–– COMMENT a calender drop down ––>
  When were you born?<br>
  <br>
  <input type="date" name="bday">
<br>
<br>
  <!–– COMMENT gender selection––>
 What is your gender?
 <br>
 <br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other


<br>
<br>
<input type="submit" value=" On to your idea " name="ideacapture"/>
<input type="submit" value=" On to your skills " name="skillscapture"/>


    </form>

<?php

$servername = "35.194.36.11";
$username = "root";
$password = "TMP1";
$dbname = "IG";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";


if(isset($_POST["ideacapture"])){


$sql = "insert into IG_BIO (name, surname,DOB, email, Gender)
VALUES ('".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["bday"]."', '".$_POST["user_mail"]."','".$_POST["gender"]."')";

if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully"

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


header("location:ideacapture.php");

}

if(isset($_POST["skillscapture"])){


$sql = "INSERT INTO SkillsBio (name, surname,DOB, email, Gender)
VALUES ('".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["bday"]."', '".$_POST["user_mail"]."','".$_POST["gender"]."')";

if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully"

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


header("location:skills.php");

}

?>
</body>
</head>
</html>
