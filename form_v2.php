
<!Doctype html>
<html lang="en">
<head>
  <title>Tell us about yourself</title>
  <link rel="stylesheet" href="./css/form.css" type="text/css">
</head>


<body>

     <div class="headerhome">
        <img src="https://static.wixstatic.com/media/892132_939375ed638248f7b7322dd16f9a532d~mv2.png/v1/fill/w_442,h_197,al_c,q_80,usm_2.00_1.00_0.00/892132_939375ed638248f7b7322dd16f9a532d~mv2.webp" class="logohome" />
     </div>

     <div class="topnav">
      <a href="http://www.tmpdevshop.co.za/live/Signin_Iteration_v2.php">Home</a>
      <a class="active" href="profile">My Profile</a>
      <a href="http://www.tmpdevshop.co.za/live/officenew.php">Office Room</a>
      <a href="https://www.thembeguplatform.com/">About</a>
      <a href="http://www.tmpdevshop.co.za/live/ideacapture_v2.php">My Ideas</a>
	<a href="http://www.tmpdevshop.co.za/live/skills_v2.php">My Skills</a>
    <a href="#help">Get Help</a>
    </div>

    <header> 
      <br><br><br>
      <h1> Welcome to the Mbegu Platform </h1>
      <h3> Please fill out the form below to get started: </h3>
    </header>

  <div class="form">
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
<input class="button" type="submit" value=" On to your idea " name="ideacapture"/>
<input class="button" type="submit" value=" On to your skills " name="skillscapture"/>
<br />        



    </form>
  </div>


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


header("location:ideacapture_v2.php");

}

if(isset($_POST["skillscapture"])){


$sql = "INSERT INTO SkillsBio (name, surname,DOB, email, Gender)
VALUES ('".$_POST["name"]."', '".$_POST["surname"]."', '".$_POST["bday"]."', '".$_POST["user_mail"]."','".$_POST["gender"]."')";

if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully"

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


header("location:skills_v2.php");

}

?>



</body>




  <style>

 
 footer {
	      text-align: center;
      background-color: #ccff90;
      color:black;
      padding: 15px;
    }
    

    
  </style>

<footer class="container-fluid text-center">
  <p>Built by MbeguTechnology 2019</p>
  <p>Visit www.thembeguplatform.com for more information</p>
</footer>




</html>
