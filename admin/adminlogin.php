<?php
  
  session_start();


  if(isset($_SESSION['uid']))
  {
    header('location:index.php');
  }
  
  include('../libs/cone.php');
  include('../libs/database.php');

$db = new database();
if(isset($_POST['submit']))
{
 $_SESSION['uid'] = $_POST['email'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT * FROM `admin` WHERE `email`='$email' AND `pass` = '$pass'";
$run = mysqli_query($con,$query);
if($run == true){
header('location:index.php');}
else
{
?><script>alert('Email And Password is not Matched')</script><?php
}
}


 
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center" style="background-color:#557FFF;">
    <div class="container"style="width:380px;height:400px;background:url('../images/abc.png');margin-top:10%;margin-left:35%;border : 1px solid;border-radius:10px;box-shadow:3px 5px #2D2D2D;">
         <div class="row">
          <div class="col-sm-12 blog-main">
              <form class="form-signin" action="adminlogin.php" method="post">
               <img class="mb-4" style="margin:10%;border-radius: 50%;" src="../images/login1.jpg" alt="" width="72" height="72">
               <h1 class="h3 mb-3 font-weight-normal" style="color:white;">Admin Login</h1>
               <input type="email" id="inputEmail" class="form-control" style="width:95%;margin:3%;" name="email" placeholder="Email address" required autofocus>
               <input type="password" id="inputPassword" style="width:95%;margin:3%" name="pass" class="form-control" placeholder="Password" required>
               <button class="btn btn-primary " style=" margin-top:2%; width:30%;" name="submit" type="submit">Sign in</button>
               </form>
          </div>
       </div>
     </div>
    
  </body>
</html>
