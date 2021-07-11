<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body style="background-color: lightseagreen">
  
                            <form name="login" method="post" action="index.php">
                               <h1 style="text-align: center;">Registration Form  </h1><br><br>
                                <p style="text-align: center;font-size: 20px;font-weight: bold"> 
                                    <label>Name&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
                                    <input style="padding: 10px 20px" name="name" required="required" type="text" placeholder="Enter your Name.."/> 
                                </p>
								<p style="text-align: center;font-size: 20px;font-weight: bold"> 
                                    <label>RollNumber&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
                                    <input style="padding: 10px 20px" name="rollnumber" required="required" type="number" placeholder="Enter your RollNumber.."/> 
                                </p>
								<p style="text-align: center;font-size: 20px;font-weight: bold"> 
                                    <label>MobileNumber&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
                                    <input style="padding: 10px 20px" name="number" required="required" type="number" placeholder="Enter your MobileNumber.."/> 
                                </p>
                                <p style="text-align: center;font-size: 20px;font-weight: bold"> 
                                    <label>Email-ID&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
                                    <input style="padding: 10px 20px" name="emailid" required="required" type="email" placeholder="Enter your mail.."/> 
                                </p>
                                <p style="text-align: center;font-size: 20px;font-weight: bold"> 
                                    <label>Password&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</label>
                                    <input style="padding: 10px 20px" name="password" required="required" type="password" placeholder="Enter your Password.."/> 
                                </p>
                                <p style="text-align: center;font-size: 20px;font-weight: bold"> 
                                    <label>Confirm Password&ensp;&ensp;&ensp;</label>
                                    <input style="padding: 10px 20px" name="confirm_password" required="required" type="password" placeholder="Re-enter your password.."/> 
                                </p>
                                <p style="text-align: center;"> 
									<input style="padding: 10px 20px;cursor: pointer;border:0;color: white;background-color: blue"; type="submit" name="register" value="Sign up"/> 
								</p>
                                <p style="text-align: center;" class="change_link">  
									Already a member ?
									<a href="index.php" class="to_register"> Just log in </a>
								</p>
                            </form><br><br>
                                     
</body>
</html>