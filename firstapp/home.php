<?php 
	include_once('dbFunction.php');
	if(isset($_POST['welcome'])){
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy();
	}
	if(!($_SESSION)){
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
 <head>
        <title>Homepage</title>
    </head>
    <body style="background-color: turquoise;font-family: sans-serif;">
                          
                    
                           <form name="login" method="post" action="">
                                <h1>Welcome <?=$_SESSION['username']?></h1> <br>
                                <p style="text-align: center;"> 
                                    <label for="emailid" class="uname"   > Name:</label>
                                   <?=$_SESSION['username']?>
				
                                </p>
                                <p style="text-align: center;"> 
                                    <label for="email" class="youpasswd"  > Email:</label>
                                    <?=$_SESSION['email']?>
                                </p><br>
                                <p style="text-align: center;"> 
                                    <label for="email" class="youpasswd"  > Roll number:</label>
                                    <?=$_SESSION['rollnum']?>
                                </p><br>
                                <p style="text-align: center;"> 
                                    <label for="email" class="youpasswd"  > Mobile number:</label>
                                    <?=$_SESSION['mobnum']?>
                                </p><br>
                                 
                                <p class="login button" style="text-align: center;"> 
                                    <input type="submit" name="welcome" value="Logout" /> 
								</p>
                                 
                            </form>
                             </body>
</html>