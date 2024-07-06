<html>
<head>
<?php include "header.php"; ?>
<style>
.zoom:hover {
  -ms-transform: scale(1.8); /* IE 9 */
  -webkit-transform: scale(1.8); /* Safari 3-8 */
  transform: scale(1.8); 
}
</style>
</head>
<body>
<?php include "nav1.php";
include "dbconfigure.php"; 
$category = $_GET['category'];
$categoryname = $_GET['categoryname'];
$query = "select * from product where category='$category'";
$rs = my_select($query);
?>


<div class="container" style = "margin-top:20px">
<h2 class="text-center style1" style = "font-family : Monotype Corsiva ; color : #000000">All Services</h2>
<br>
<center><img src="myimages/line1.jpg" style ="height:20px ; width : 500px" ></center>
<br>

<div class = "row">
<?php 
while($row=mysqli_fetch_array($rs))
{
?>
<div class="col-sm-4 mydivstyleone text-center">

<img src="admin/<?=$row[2]?>" class="img-thumbnail" style = "width:304px; height : 236px">
<br><br>
<h4 class = "text-center headingfour" style = "font-family : Monotype Corsiva ; color : red"> <?= $row[1]?></h4> 
<h4 class = "text-center headingfour" style = "font-family : Monotype Corsiva ; color : blue">Rs. <?= $row[4]?></h4> 
<h4 class = "text-center headingfour" style = "font-family : Monotype Corsiva ; color : purple"> <?= $row[5]?></h4> 

<?php echo "<a class = 'btn btn-outline-success' href = 'login.php?id=$row[0]'>BOOK NOW</a>&nbsp;&nbsp;&nbsp";
 "<a class = 'btn btn-outline-success' href = 'login.php?id=$row[0]'>BOOK NOW</a>";?>


</div>
<?php 
}
?>

</div>
<br><br><br>
</body>
</html>
