<!DOCTYPE html>
<html>  
  <head>

    <title>Skills Capture</title>
    <link rel="stylesheet" type="text/css" href="./css/skills.css">

 </head>

<body>

    <div class="headerhome">
        <img src="https://static.wixstatic.com/media/892132_939375ed638248f7b7322dd16f9a532d~mv2.png/v1/fill/w_442,h_197,al_c,q_80,usm_2.00_1.00_0.00/892132_939375ed638248f7b7322dd16f9a532d~mv2.webp" class="logohome" />
    </div>

    <div class="topnav">
      <a href="http://www.tmpdevshop.co.za/live/Signin_Iteration_v2.php">Home</a>
      <a href="profile">My Profile</a>
      <a href="http://www.tmpdevshop.co.za/live/officenew.php">Office Room</a>
      <a href="https://www.thembeguplatform.com/">About</a>
     <a href="http://www.tmpdevshop.co.za/live/ideacapture_v2.php">My Ideas</a>
	<a class="active" href="http://www.tmpdevshop.co.za/live/skills_v2.php">My Skills</a>
    <a href="#help">Get Help</a>
    </div>

    <h3>So *Name* please tell us more about your skillset</h3>

  <div class="form">
 	<form action=" " method="post">   <br/>
           <!--THIS IS QUESTION ONE -->
          <label for="skillsQ1">What academic qualifications do you have?</label> <br>
          <br>
          <input type="text" id="skillsQ1" name="skillsQ1" placeholder= "MBA, BCom Accounting"> <br>
        	<br>

          <!--THIS IS QUESTION TWO -->
          <label for="skillsQ2"> Who is your current employer?</label> <br>
          <br>
          <input type="text" id="skillsQ2" name="skillsQ2"> <br>
       <br>
          <!--THIS IS QUESTION THREE -->
          
	  <label for="skillsQ3">What skills would you like to contribute?</label> <br>
          <br>
          <input id="web_development" type="checkbox" id="skillsQ3" name="skills[]" value ="web_dev"> Web Development <br>
          <input id="business_plan" type="checkbox" id="skillsQ3" name="skills[]" value ="bus_plan"> Business Plan Development <br>
          <input id="marketing" type="checkbox" id="skillsQ3" name="skills[]" value ="marketing"> Marketing Development <br>
          <input id="strategy" type="checkbox" id="skillsQ3" name="skills[]" value ="strategy"> Strategy  <br>
          <input id="financial_plan" type="checkbox" id="skillsQ3" name="skills[]" value ="financial_plan"> Financial Projections <br>
          <input id="product_review" type="checkbox" id="skillsQ3" name="skills[]" value ="product_review"> Product Review <br> 
          <br>

	 <!--THIS IS QUESTION FOUR -->
         <label for ="skillsQ4">  What industries would interest you?</label><br>
          <br>
          <input id="agriculture" type="checkbox" name="Help[]" value="test"> Agriculture<br>
          <input id="fmcg" type="checkbox" name="Help[]" value="test" > FMCG<br>
          <input id="transport" type="checkbox" name="Help[]" value="test"> Transport<br>
          <input id="manufacturing" type="checkbox" name="Help[]" value="test" /> Manufacturing<br>
          <input id="mining" type="checkbox" name="Help[]" value="test"> Mining<br>
          <input id="construction" type="checkbox" name="Help[]" value="1"> Construction<br>
	  <input id="technology" type="checkbox" name="Help[]" value="1"> Technology<br>
          <br>
        <br>
          <!--THIS IS QUESTION FIVE -->
          <label for="skillsQ5">How much weekly hours do you have for The Mbegu Platform?</label><br> 
          <br>
          <input type="radio" name="Time" value="0-2" > 0-2<br>
          <input type="radio" name="Time" value="2-6"> 2-6<br>
          <input type="radio" name="Time" value="6-10"> 6-10 <br> 
          <input type="radio" name="Time" value="10+"> 10+<br>
          <br>
        <br>
<input class="button" type="submit" value=" Submit your skills " name="submit"/><br />    
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
// echo "Connected successfully";

 if(isset($_POST["submit"]))
 {


	$checkbox1 = $_POST['skills'];
	$chk = "";
	foreach($checkbox1 as $chk1)
		{
		$chk .= $chk1.",";
    }
    

	$checkbox2 = $_POST['Help'];
	$chk2 = "";
	foreach($checkbox2 as $chk3)
		{
		$chk2 .= $chk3.",";
    }


	
	$sql = "insert into skill (qualifications, employer, skills, industries, time) 
	values ('".$_POST["skillsQ1"]."', '".$_POST["skillsQ2"]."',  '$chk', '$chk2', '".$_POST["Time"]."')";

	

	if($conn->query($sql)===true){
		echo "succcess";
	} 
	else{
		echo "error";
		}

	header("location:skillscompletion.php");

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

