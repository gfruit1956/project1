<?php
   include("config.php");
   session_start();
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      // username and password sent from form 
      $username = $_POST["UserName"];
      $password = $_POST["Password"];

      $san_myusername = mysqli_real_escape_string($db,$username);
      $san_mypassword = mysqli_real_escape_string($db,$password); 

      $sql = "SELECT Security FROM persondetails WHERE UserName = '".$san_myusername."' and Password = '".$san_mypassword."'";
      //$security = "SELECT security FROM Login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);      
      $row = mysqli_num_rows($result);      
      $count = mysqli_num_rows($result);
      $myrow = $result->fetch_assoc();
      

      if($count == 1) {
	  
      // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         $_SESSION['Security'] = $myrow['Security'];
         if ($myrow['Security']  == "Admin") {header("location: Admin-Panel-3/index.php "); exit();}
         elseif ($myrow['Security'] == "Manage") {header("location: manager.html");exit();}
         elseif ($myrow['Security'] == "User") {header("location: CalendarView.html");exit();}
      } else {
         $error = "Your Login Name or Password is incorrect";
      }
   }        
?>


<html>
<head>
   <title>Login Page</title>
   <!-- css link for generic application styling -->
   <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body bgcolor = "#FFFFFF">
   <div align = "center">
       <!--styling specific to page-->
      <div style = "width:300px; border: solid 1px #333333; " align = "left">
         <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
         <div style = "margin:30px">
            <form action = "" method = "post">
                <!--input fields for username and password -->
               <label>UserName  :</label><input type = "text" name = "UserName" class = "box"/><br /><br />
               <label>Password  :</label><input type = "password" name = "Password" class = "box" /><br/><br />
               <input type = "submit" value = " Submit "/><br />
            </form>
            <div style = "font-size:15px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
         </div>
      </div>
   </div>
</body>
</html>
