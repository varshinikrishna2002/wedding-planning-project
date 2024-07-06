<html>
<head>
 <?php include "header.php"; ?>
  
<title>gift</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-style: bold;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<?php include "nav1.php"; ?>
<!-- carousel start-->

<div>
	
	<img src = "myimages/banner.jpeg" width="100%" height=552></div>
<!-- carousel end-->
<div class="container" style = "margin-top : 50px">
<h2 align="center" class="style1" style = "font-family : Monotype Corsiva ; color : #000000">Our Categories</h2>
  <center><img src="myimages/line1.jpg" style ="height:20px ; width : 500px" ></center>


<?php 
include "dbconfigure.php";
$query = "select * from category";
$rs = my_select($query);
echo "<div class='row'>";
while($row = mysqli_fetch_array($rs))
{
echo "<div class='col-sm-4'>";
echo "<h2 class='text-center' style='font-family:Forte ; color:#'>$row[1]</h2>";
$loc = "admin/".$row[2];
echo "<a href = 'giftbycategory.php?category=$row[0]&categoryname=$row[1]'><img class='img-thumnail' src='$loc' style='width:340px ; height:236px'></a>";
echo "</div>";
}
echo "</div>";
?>
</div>
<br><br>
</body>
</html>