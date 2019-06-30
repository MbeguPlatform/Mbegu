<!DOCTYPE html>
<html>  
  <head>

    <title>Idea Capture</title>
    <link rel="stylesheet" type="text/css" href="./css/ideacapture.css">

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
      <a class="active" href="http://www.tmpdevshop.co.za/live/ideacapture_v2.php">My Ideas</a>
	<a href="http://www.tmpdevshop.co.za/live/skills_v2.php">My Skills</a>
    <a href="#help">Get Help</a>
    </div>

    <h3>*Name* tell us more about your idea</h3>

  <div class="form">

 	<form action=" " method="post">   <br/>
           <!--THIS IS QUESTION ONE -->
          <label for="IdeaQ1">What is your idea?</label> <br>
          <br>
          <textarea type="text" id="IdeaQ1" name="IdeaQ1" placeholder= "Briefly describe your idea"></textarea> <br>
        	<br>
          <!--THIS IS QUESTION TWO -->
          <label for="IdeaQ2">What problem are you solving?</label> <br>
          <br>
          <textarea type="text" id="IdeaQ2" name="IdeaQ2" placeholder= "Briefly describe the problem"></textarea> <br>
       <br>
          <!--THIS IS QUESTION THREE -->
          
	  <label for="IdeaQ3">Who will you provide your service to?</label> <br>
          <br>
          <textarea type="text" id="IdeaQ3" name="IdeaQ3" placeholder= "Age, Gender, Income"></textarea> <br>
       <br>

	 <!--THIS IS QUESTION FOUR -->
         <label for ="IdeaQ4">  What can TMP help you with?</label><br>
          <br>
       <div class="q4">
          <input id="Business_Plan" type="checkbox" name="Help[]" value="Business Plan"> I need a Business Plan<br>
          <input id="Web_Development" type="checkbox" name="Help[]" value="Web Development" > I need Web Development<br>
          <input id="Marketing" type="checkbox" name="Help[]" value="Marketing"> I need a marketing plan<br>
          <input id="Strategy" type="checkbox" name="Help[]" value="Strategy" /> I need strategic advice<br>
          <input id="Financial_Projections" type="checkbox" name="Help[]" value="Financial Projections"> I need Financial Projections<br>
          <input id="Accounting_Tools" type="checkbox" name="Help[]" value="Accounting Tools"> I need Accounting Tools<br>
	  <input id="Competitors_Analysis" type="checkbox" name="Help[]" value="Competitor Analysis"> I need a competitors analysis<br>
	  <input id="Proposal_for_Funders" type="checkbox" name="Help[]" value="Proposal For Funders"> I need a proposal for funders<br>
	  <input id="Product Review" type="checkbox" name="Help[]" value="Product Review"> I need a product review<br>
          <option value="Other"> Other </option>
          </div>
          <input class="otherbox" type="text" name="Mbegu" > <br>
          <br>

  	  <!--THIS IS QUESTION FIVE -->
	  <label for="IdeaQ5">What industry is your solution?</label> <br>
          <br>
          <div class="q5">
          <input type="radio" name="Industry" value="Agriculture" > Agriculture<br>
          <input type="radio" name="Industry" value="FMCG"> FMCG<br>
          <input type="radio" name="Industry" value="Transport"> Transport <br> 
          <input type="radio" name="Industry" value="Manufacturing"> Manufacturing<br>
          <input type="radio" name="Industry" value="Mining"> Mining<br>
          <input type="radio" name="Industry" value="Construction"> Construction<br>
          <input type="radio" name="Industry" value="Pharmacuticals">Pharmacuticals <br> 
	  <input type="radio" name="Industry" value="Other">Other <br>
        </div>
          <input class="otherbox" type="text" name="Mbegu"> 
	<br> 
        <br>
          <!--THIS IS QUESTION SIX -->
          <label for="IdeaQ6">How long have you been working on this idea?</label><br> 
          <br>
        <div class="q6">
          <input type="radio" name="Time" value="Starting Up" > Starting Up<br>
          <input type="radio" name="Time" value="Less than 6 months"> Less than 6 months<br>
          <input type="radio" name="Time" value="6 months to a year"> 6 months to a year <br> 
          <input type="radio" name="Time" value="More than a year"> More than a year<br>
        </div>
          <br>
        <br>
         <!--THIS IS QUESTION SEVEN -->





<input type="submit" value=" Submit Your Idea" name="submit"/><br />
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

 if(isset($_POST["submit"]))
 {


	$checkbox1 = $_POST['Help'];
	$chk = "";
	foreach($checkbox1 as $chk1)
		{
		$chk .= $chk1.",";
		}
	$Industry = $_POST['Industry'];
	$IndustryOther = $_POST['Mbegu'];
	$mbegu = "";
	$mbegu .= $Industry.$IndustryOther;
	
	$sql = "insert into IG_Idea (idea, problem, service, skills, industry, age_buss) 
	values ('".$_POST["IdeaQ1"]."', '".$_POST["IdeaQ2"]."', '".$_POST["IdeaQ3"]."', '$chk', '$mbegu', '".$_POST["Time"]."')";

	if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully"

	} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
	}


	header("location:idea_completion.php");
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
