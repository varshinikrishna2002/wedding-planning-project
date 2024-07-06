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
  
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
  
  <script src = https://code.jquery.com/jquery-3.3.1.js></script>
<script src = https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js></script>
<script src = https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js></script>
<script src = https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js></script>
  
</head>
<body>
<?php include "nav2.php"; 
echo "Welcome <b style = 'color : green ; text-transform:capitalize'>$name</b>";
?>

<div class="container" style = "margin-top : 50px">
<h1 class= "text-center" style = "font-family : 'Monotype Corsiva' ; color : #000000">View Product</h1>
<?php 
$query = "select * from product";
$rs = my_select($query);

echo "<br><table class='table table-hover' id=example>";
echo "<thead style = 'background-color : green ; color : white'>";
echo "<tr>";
echo "<th>Product ID</th>";
echo "<th>Product Name</th>";
echo "<th>Image</th>";
echo "<th>Category</th>";
echo "<th>Price</th>";
echo "<th>Description</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
$cnt=1;
while($row = mysqli_fetch_array($rs))
{
echo "<tr>";
echo "<td>".$cnt++."</td>";
echo "<td>$row[1]</td>";
echo "<td><img src = $row[2] width=150 height=100></td>";
$query1 = "select * from category where id=$row[3]";
$rs1 = my_select($query1);
if($row1=mysqli_fetch_array($rs1))
{
echo "<td>$row1[1]</td>";
}

echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td><a href='deleteproduct.php?id=$row[0]' class='btn btn-danger'>Delete</a></td>";
echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>

</div>
</body>
</html>
