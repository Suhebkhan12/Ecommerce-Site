

<?php

  include("nav.html");
  echo "<link rel='stylesheet' href='/style.css'>";
  
  $error = false;
  $error2 = false;
  $signup = false;
  if ($_SERVER['REQUEST_METHOD'] == "POST")
   {
      include("config.php");
      $username = $_POST['username'];
      $password = $_POST['password'];
      

      
      // echo "Connected Successfully";
      if ($username == '' || $password == '' ) 
      {
          $error = true;
         
      }
      if(strlen($password) < 8 || strlen($password) > 12)
        {
          $error2 = true;
        }

      else
      {
        $sql = "INSERT INTO users(username,password) values('$username','$password')";
        $result = mysqli_query($conn , $sql);
         if($result)
         {
           $signup = true;
           header("location:index.html");
           
           
         }
      }

      

        
   }
  
        
      


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href ="style.css">
</head>
<body class= "body">
    
  <div class="signupform">

      <form  action="signup.php" method="post">
        <h2>   Signup </h2>
        
        <input type="username" name ="username" class="username" placeholder="Enter Username"></br>

        
        <input type="password" name ="password" class="password" placeholder="Enter Password"></br>

        <button type="submit" id="btnsignup">Register Now</button>

        <div class="signup">
          <p>Already have an account ? <a href="login.php">Login</a></p>
        </div>


      </form>
      <?php
       
     if($signup)
     {
      echo "<h4 class='success'>Your account created successfull. And You Can Login</h4>";
     }
    if($error)
    {
    echo "<h4 class='warrning'>Please Enter Username and Password </h4>";
    }
    
    if($error2)
    {
      echo "<h4 class='warrning'>Password  more then 8 to 12 character long</h4>";
    }
    
   
  ?>

  </div>



</body>
</html>
