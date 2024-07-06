<?php 
include "dbconfigure.php";

$id = $_GET['id'];

$query = "delete from partyhall where id=$id";

my_iud($query);
header("location:viewparty.php");
?>