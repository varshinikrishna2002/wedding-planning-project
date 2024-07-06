<?php 
include "dbconfigure.php";

$id = $_GET['id'];

$query = "delete from personal where id=$id";

my_iud($query);
header("location:viewpersonalised.php");
?>