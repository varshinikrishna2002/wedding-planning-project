<html>
<head>
  <?php include "header.php"; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include "nav1.php"; ?>

<div class="container" style = "margin-top : 70px">
<h1 class= "text-center" style = "font-family : 'Monotype Corsiva' ; color : #000000">Admin Login</h1>

<form method = post>
<div class="form-group">
<label><b>Admin Name</b></label>
<input type = text class=form-control placeholder="Enter Your Name" name=adminname>
<label><b>Password</b></label>
<input type = password class=form-control placeholder="Enter Your Password" name=password>
<input type = checkbox name="rem">Remember Me
<br>
<br>
<input type = submit name = login value = " Login " class="btn btn-primary" style = "width : 200px">
</div>
</form>

</div>
</body>
</html>
<?php
session_start();
include "dbconfigure.php"; 
if(isset($_POST['login']))
{
$adminname = $_POST['adminname'];
$password = $_POST['password'];

if(isset($_POST['rem']))
{
$remember = "yes";
}
else
{
$remember = "no";
}
$query = "select count(*) from admin where adminname='$adminname' and password='$password'";

echo $ans = my_one($query);
if($ans == 1)
{
$_SESSION['sun'] = $adminname;
$_SESSION['spwd'] = $password;

if($remember =='yes')
{
setcookie('cun',$adminname,time()+60*60*24*7);
setcookie('cpwd',$password,time()+60*60*24*7);
}

header("location:adminhome.php");
}
else{
echo '<script>alert("Invalid Login Credentials , Try Again");</script>';
}
}
?>