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
<?php include "nav2.php";
include "dbconfigure.php";
 
$categoryid = $_GET['categoryid'];
$categoryname = $_GET['categoryname'];
$query = "select * from personal where id='$categoryid'";
$rs = my_select($query);
?>


<div class="container" style = "margin-top:70px">
<h2 class="text-center" style = "font-family : Monotype Corsiva ; color : red"> <span style = "color : blue">Personalised Products</span></h2>

<?php 
while($row = mysqli_fetch_array($rs))
{
echo "<div class = container style = 'margin-top:50px'>";
echo "<div class = row>";
echo "<div class = col-sm-4>";
$loc = 'admin/'.$row[2];
echo "<center><img src = '$loc' width=300 height=300></center>"; 
echo "</div>";
echo "<div class = col-sm-8>";
echo "<p style='font-size:18px'><span style = 'color : blue ; font-weight : bold'>Product Name : </span>$row[1]</p>";
echo "<p style='font-size:18px'><span style = 'color : blue ; font-weight : bold'>Price : </span>Rs. $row[4]</p>";
echo "<p style='font-size:18px'><span style = 'color : blue ; font-weight : bold'>Description : </span> $row[5] </p>";
echo "<form action='booking1.php' method='post' enctype='multipart/form-data'><p style='font-size:18px'><span style = 'color : blue ; font-weight : bold'>Upload Photo <input type='file' name='fname'></p>";
echo "<p style='font-size:18px'><span style = 'color : blue ; font-weight : bold'>Add Text <textarea name='msg' cols='30'></textarea></p>
<input type='hidden' value=$row[0] name='id'> </p>";
echo "<a class = 'btn btn-outline-success' href = 'cart1.php?id=$row[0]'>ADD TO CART</a>&nbsp;&nbsp;&nbsp;";

echo "<button class = 'btn btn-outline-success' type='submit'>BUY NOW</a></form>";
echo "</div>";
echo "</div>";
echo "</div>";
}
?>
</div>
<br><br><br>
</body>
</html>
