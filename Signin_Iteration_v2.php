
<!DOCTYPE html>
<html>
<head>
   
    <title> Login with Google </title>

    <meta name="google-signin-client_id" content="405141620326-on8s86ef6vvcrp8tl5e0d9gcqcq68e17.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">



    
</head>



<script type="text/javascript">
    function onSignIn(googleUser)
    {
        var profile=googleUser.getBasicProfile();
        $(".data").css("display","block");
        $(".blocksignin").css("display","none");
        $("#pic").attr('src',profile.getImageUrl());
        $("#email").text(profile.getEmail());
        $(".topnav").css("display","block");
        $(".header").css("display","none");
        $(".headerhome").css("display","block");
          alert ("Sending Login Data to DB");

if(profile){
          

          $.ajax({
                type: 'POST',
                url: 'Script_For_SignIn_DB.php',
                data: {
                       id:profile.getId(), name:profile.getName(), email:profile.getEmail()
                      }
                 } 
                ).done(function(data)
                                     {
                                      console.log(data);
                                     alert ("Log in Successfull and stored time");

                                     }
                                      ).fail(function() 
                                                       { 
                                                        alert( "Posting failed." );
                                                       }
                                      );
          }

    };

    function signOut()
    {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
                alert("You have been successfully signed out");
                $(".g-signin2").css("display", "block");
                $(".topnav").css("display","none");
                $(".header").css("display","block");
                $(".headerhome").css("display","none");
                $(".blocksignin").css("display","block");
                $(".data").css("display", "none");
                                         }
                            );
    };
 
  function Reg()
  {
  var newUrl = "http://www.tmpdevshop.co.za/live/form_v2.php";
window.location.replace(newUrl);
  };



</script>








<body>

    <div class="header">
    
      <img src="https://static.wixstatic.com/media/892132_939375ed638248f7b7322dd16f9a532d~mv2.png/v1/fill/w_442,h_197,al_c,q_80,usm_2.00_1.00_0.00/892132_939375ed638248f7b7322dd16f9a532d~mv2.webp" class="logo" />
    
  </div>

   <div class="headerhome">
    
      <img src="https://static.wixstatic.com/media/892132_939375ed638248f7b7322dd16f9a532d~mv2.png/v1/fill/w_442,h_197,al_c,q_80,usm_2.00_1.00_0.00/892132_939375ed638248f7b7322dd16f9a532d~mv2.webp" class="logohome" />
    
  </div>

  <div class="topnav">
    <a class="active" href="http://www.tmpdevshop.co.za/live/Signin_Iteration_v2.php">Home</a>
    <a href="profile">My Profile</a>
    <a href="http://www.tmpdevshop.co.za/live/officenew.php">Office Room</a>
    <a href="https://www.thembeguplatform.com/">About</a>
	<a href="http://www.tmpdevshop.co.za/live/ideacapture_v2.php">My Ideas</a>
	<a href="http://www.tmpdevshop.co.za/live/skills_v2.php">My Skills</a>
    <a href="#help">Get Help</a>
  </div>

  <div class="blocksignin">
    <h3>Welcome to the mbegu platform</h3>
    <h4>Sign in with Google, Facebook or create a new account</h4>
    <img src="https://www.freeiconspng.com/uploads/profile-icon-28.png" class="genericprofile">
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="250" data-height="50"></div>
    <button type="button" class="fbbutton">Facebook</button>
    <button type="button" class="mbegubutton">Register a new account</button>
    
  </div>



<div class="data">
    <p class="profilehead"> Profile Details</p>
    <img id="pic" class="img-circle" width="200" height="200"/>
    <p class="emailhead">Email Address:</p>
    <p id="email"></p>
    <br/>
<a href="./form_v2.php"><button class="registerbtn">Create Profile</button></a>

<button class="signoutbtn" onclick ="signOut()" class="btn btn-danger">SignOut</button>

<br/>

  
<p class="datehead">Date: <span id="datetime"></span></p>
</div>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>


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

