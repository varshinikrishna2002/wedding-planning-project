<?php 
session_start();
include "dbconfigure.php";
if(verifyuser())
{
$name = $_SESSION['sun'];

}
else
{
header("location:index.php");
}
?>

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
<?php include "nav2.php"; 
echo "Welcome <b style = 'color : green ; text-transform:capitalize'>$name</b>";
?>
<?php
$con = mysqli_connect("localhost","root","","giftshopphp");
$idd = $_REQUEST['id'];
$q = "select * from partyhall where id='$idd'";
$r = mysqli_query($con,$q);
while($d = mysqli_fetch_assoc($r))
{
	$na = $d['name'];
	$ad = $d['address'];
	$ph = $d['phone'];
	$pr = $d['price'];
	$de = $d['description'];
	$ts = $d['timeslot'];
	
}
?>
<div class="container" style = "margin-top : 50px">
<h1 class= "text-center" style = "font-family : 'Monotype Corsiva' ; color : #000000">Add Product</h1>
<form method = post enctype="multipart/form-data">
<div class="form-group">
<label><b>Hall Name</b></label>
<input type = text name="name" class="form-control" value="<?php echo $na; ?>" placeholder="Enter Hall Name">
<label><b>Address</b></label>
<input type = text name="address" class="form-control" value="<?php echo $ad; ?>" placeholder="Enter Hall Address">
<label><b>Contact Number</b></label>
<input type = text name="phone" class="form-control" value="<?php echo $ph; ?>" placeholder="Enter Phone Number">
<label><b>Price</b></label>
<input type = text name="price" class="form-control" value="<?php echo $pr; ?>">
<label><b>Description</b></label>
<textarea name="description" class="form-control" value="<?php echo $de; ?>"></textarea>
<label><b>Time Slot</b></label>
<input type = text name="slot" class="form-control" value="<?php echo $ts; ?>">

<br>
<input type = submit class="btn btn-primary form-control" name="submit" value="Submit" >
</div>
</form>
</div>
</body>
</html>
<?php 

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$addr = $_POST['address'];
$ph = $_POST['phone'];
$price = $_POST['price'];
$description = $_POST['description'];
$slot = $_POST['slot'];
$query = "update partyhall set name='$name',address='$addr',phone='$ph',price='$price',description='$description',timeslot='$slot'";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Party Hall Updated Successfully");
window.location = "viewparty.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong");
</script>';
}
}
?>
