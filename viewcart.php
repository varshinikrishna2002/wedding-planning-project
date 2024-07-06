<?php
session_start();
include "dbconfigure.php";
if(verifyuser())
{
$emailid = $_SESSION['semail'];
$query = "select * from siteuser where emailid='$emailid'";
$rs = my_select($query);
if($row = mysqli_fetch_array($rs))
{
$name = $row[0];
}
}
else
{
header("location:index.php");
}
?>
<html>
<head>
<?php include "header.php"; ?>

  <link rel = stylesheet href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel = stylesheet href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

<script src = https://code.jquery.com/jquery-3.3.1.js></script>
<script src = https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js></script>
<script src = https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js></script>
<script src = https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js></script>
<script src = https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js></script>





<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            
            'pdfHtml5'
        ]
    } );
} );
</script>

</head>
<body>
<?php include "nav2.php";
echo "<br>Welcome <b style = 'text-transform : capitalize ; color : blue'>$name</b>";
 ?>


<div class="container" style = "margin-top:10px">
<h2 class="text-center" style = "font-family : Monotype Corsiva ; color : red">View My Bookings</h2>
<div class="table-responsive">
<?php 
$query = "select * from shopping where emailaddress='$emailid'";
$rs = my_select($query);
echo "<table class='table table-hover' id = example>";
echo "<thead style = 'background-color : red ; color : white'>";
echo "<tr>";
echo "<th>BookingDate</th>";
echo "<th>CustomerName</th>";
echo "<th>Email ID</th>";
echo "<th>ProductName</th>";
echo "<th>Price</th>";
echo "<th>Quantity</th>";
echo "<th>Total</th>";
echo "</tr>";

echo "</thead>";

echo "<tbody>";
$amt = 0;
while($row = mysqli_fetch_array($rs))
{
echo "<tr>";

echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
$amt=$amt+$row[7];
$amt;
echo "</tr>";
}
echo "<tr><td></td><td></td><td></td><td></td><td colspan='2'>Total Amount</td><td>Rs. $amt</td></tr>";
echo "<tr><td></td><td></td><td></td><td></td><td><a class = 'btn btn-outline-success' href = 'book.php?id=$emailid'>BUY NOW</a></tr>";
echo "</tbody>";

echo "</table>";
?>


</div>
</div>
</body>
</html>
