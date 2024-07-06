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

$query = "select * from shopping where emailaddress='$emailid'";
$rs = my_select($query);
while($row = mysqli_fetch_array($rs))
{
$id = $row[0];
$bd = $row[1];
$cn = $row[2];
$em = $row[3];
$pn = $row[4];
$pr = $row[5];
$qn = $row[6];
$to = $row[7];

$q = "insert into booking(bookingdate,customername,emailid,productname,price,quantity,total,status)
values('$bd','$cn','$em','$pn','$pr','$qn','$to','pending')";
$rp = my_iud($q);

}

if($rs)
{
	
	$q1 = "delete from shopping where emailaddress='$emailid'";
	$ra= my_iud($q1);
	header("location:viewmybooking.php");
}
else
{
	echo "Error";
}
?>
