<?php 
session_start();
include "dbconfigure.php";

if(verifyuser())
{
$u = $_SESSION['semail'];
$query = "select * from siteuser where emailid='$u'";
$rs = my_select($query);
if($row=mysqli_fetch_array($rs))
{
$username = $row[0];
$city = $row[2];
$address = $row[3];
$contact = $row[5];
}

}
else
{
header("location:login.php");
}
?>
<html>
<head>
<?php include "header.php"; ?>

<style>
td{color : brown}
</style>

</head>
<body>
<?php include "nav2.php"; 
echo "<br>&nbsp;&nbsp;Welcome <b style = 'color : green ; text-transform:capitalize'>$username</b>";
?>

<div class="container" >
<h1 class="text-center" style = "font-family : Monotype Corsiva ; color : #000000">Send FeedBack</h1>
<br>
<br>
<form method="post">
<label>Feedback Message</label>
<textarea class="form-control" name="ymsg" rows=10></textarea>
<br>
<input type = submit value="Submit" name="submit" class="btn btn-success">
</form>


</div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$date = date("d-m-y");
	$message = $_POST['ymsg'];
	$query1 = "insert into feedback(name,mobileno,emailid,date,ymsg) values('$username','$contact','$u','$date','$message')";
	
	$n = my_iud($query1);
	if($n==1)
	{
		echo '<script>alert("Message Sent Successfully");</script>';
	}
	else{
		echo '<script>alert("Something Went Wrong , Try Again");</script>';
	}
}
?>