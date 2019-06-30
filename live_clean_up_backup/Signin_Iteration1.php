
<!DOCTYPE html>
<html>
<head>
    <img id="comp-jjonul4eimgimage" alt="" data-type="image" src="https://static.wixstatic.com/media/892132_939375ed638248f7b7322dd16f9a532d~mv2.png/v1/fill/w_442,h_197,al_c,q_80,usm_2.00_1.00_0.00/892132_939375ed638248f7b7322dd16f9a532d~mv2.webp" style="width: 442px; height: 197px; object-fit: cover;">
    <title> Login with Google </title>

    <meta name="google-signin-client_id" content="405141620326-on8s86ef6vvcrp8tl5e0d9gcqcq68e17.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    
</head>



<script type="text/javascript">
    function onSignIn(googleUser)
    {
        var profile=googleUser.getBasicProfile();
        $(".g-signin2").css("display","none");
        $(".data").css("display","block");
        $("#pic").attr('src',profile.getImageUrl());
        $("#email").text(profile.getEmail());
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
                $(".data").css("display", "none");
                                         }
                            );
    };
 
  function Reg()
  {
  var newUrl = "http://www.tmpdevshop.co.za/live/form.php";
window.location.replace(newUrl);
  };



</script>

<style>
    .g-signin2  {
        margin-left:500px;
        margin-top:200px;
    }.data{display:none;}

</style>


<div class="g-signin2" data-onsuccess="onSignIn"></div>
<div class="data">
    <p> Profile Details</p>
    <img id="pic" class="img-circle" width="100" height="100"/>
    <p> Email Address </p>
    <p id="email"></p>
<button onclick="Reg()">Create a Profile</button>
<button onclick ="signOut()" class="btn btn-danger">SignOut</button>

  
<p>Date: <span id="datetime"></span></p>


<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>




<body>



</script>




</body>
</html>

