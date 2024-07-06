<?php 
session_start();
include "dbconfigure.php";

if(verifyuser())
{
$emailid = $_SESSION['semail'];
$query = "select * from siteuser where emailid='$emailid'";
$rs = my_select($query);
if($row=mysqli_fetch_array($rs))
{
$username = $row[0];
$city = $row[2];
$address = $row[3];
$contact = $row[5];
}



//product info
$id = $_REQUEST['id'];
$query = "select * from product where id=$id";
$rs = my_select($query);
if($row = mysqli_fetch_array($rs))
{
$productname = $row[1];
$price = $row[4];

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

<script>
    function calc()
    {
        
     var quantity1 = document.getElementById("quantity").value;
     
     var price1 = document.getElementById("price").value;
     var totalprice = parseInt(quantity1)*parseInt(price1);
     
     document.getElementById("total").value = totalprice;
    }
</script>


</head>
<body>
<?php include "nav2.php";
echo "<br>Welcome <b style = 'text-transform : capitalize ; color : blue'>$username</b>";
 ?>


<div class="container" style = "margin-top:50px">
<h2 class="text-center" style = "font-family : Monotype Corsiva ; color : red">Your Cart</h2>

<div class="form-group">
<form method = post enctype="multipart/form-data">


<input type = hidden name = id value = "<?php echo $id;?>" class="form-control" readonly>

<label><b>Customer Name</b></label>
<input type = text name = username value = "<?php echo $username;?>" class="form-control" readonly>


<label><b>EmailID</b></label>
<input type = text name = emailid value = "<?php echo $emailid;?>" class="form-control" readonly>

<label><b>Product Name</b></label>
<input type = text name = productname value = "<?php echo $productname;?>" class="form-control" readonly>

<label><b>Price</b></label>
<input type = text name = price id = price value = "<?php echo $price;?>" class="form-control" readonly>


<label><b>Quantity</b></label>
<input type = text name = quantity id = quantity onkeyup = calc() class="form-control">

<label><b>Total</b></label>
<input type = text name = total id = total class="form-control">
<input type = hidden name = bookingdate value='<?=date("d-m-y")?>' class="form-control">
<br>
<input type = submit name = submit value = "ADD TO CART" class="btn btn-primary form-control" >
</form>
</div>

</div>
</body>
</html>
<?php 

if(isset($_POST['submit']))
{
$id = $_REQUEST['id'];
$bookingdate = date("d-m-y");
$customername = $_POST['username'];
$email = $_POST['emailid'];
$productname = $_POST['productname'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];


$query = "insert into shopping(pid,bookingdate,customername,emailaddress,productname,price,quantity,total) values('$id','$bookingdate','$customername','$email','$productname','$price','$quantity','$total')";

$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Product Added in the cart");
window.location="viewcart.php";
</script>';
}
else
{
	echo mysqli_error($con);
echo '<script>alert("Something went wrong,Try Again");
</script>';
}
}
?>