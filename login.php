
<?php

include("nav.html");
echo "<link rel='stylesheet' href='/style.css'>";


?>

<?php


$login = false;
$showerr = false;
$fill = false;
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
  include('config.php');
   $username = $_POST["username"];
   $password = $_POST["password"];
   
   
   if($username == ''  || $password == '')
    {
      $fill  = true;
    }

    
   
    else
    {
      $sql = "select * from users where username = '$username' AND password = '$password' ";
      $result = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($result);
      if($num == 1)
      {
          $login = true;
          session_start();
          $_SESSION['login']= true;
          $_SESSION['username'] = $username;
          header("location:index.html");

      }
        else  
        {
          $showerr  = true;
        }

    }
    
    

   
    
      
   }
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href ="style.css">
</head>
<body class = "body">

   
  <div class="loginform">
       
   
      <form  action="/shopping/login.php" method="post">
        <h2>  Please Login </h2>
        
        <input type="username" name ="username" class="username" placeholder="Enter Username"></br>

        
        <input type="password" name="password" class="password" placeholder="Enter Password"></br>

        <button type="submit" id="btnlogin">Login</button>

        <div class="login">
          <p>Don't have an account ? <a href="signup.php">Signup</a></p>
        </div>


      </form>

      <?php
  

    if($login)
    {
        echo "<h4 class='success'>You are logged in </h4> ";
    }
      if($showerr)
      {
        echo "<h4 class='warrning'>Invalid Credentials </h4> ";
      }
      if($fill)
      {
        echo "<h4 class='warrning'>Please fill details</h4>";
      }


      
  ?>

  </div>
    
  

  


</body>
</html>
