<?php 
session_start();
$_SESSION['semail']="";
$_SESSION['spwd']="";
session_destroy();

setcookie('cemail',"",time()-60*60*24*7);
setcookie('cpwd',"",time()-60*60*24*7);
header("location:index.php");
?>