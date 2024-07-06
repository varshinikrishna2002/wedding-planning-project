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
</head>
<body>
<?php include "nav2.php"; 
echo "Welcome <b style = 'color : green ; text-transform:capitalize'>$name</b>";
?>

<div class="container" style = "margin-top : 70px">
<h1 class= "text-center" style = "font-family : 'Monotype Corsiva' ; color : #000000">Add Category</h1>

<form method = post enctype="multipart/form-data">
<div class="form-group">
<label><b>Category Name</b></label>
<input type = text name="categoryname" class="form-control" placeholder="Enter Category Name">
<label><b>Category Image</b></label>
<input type = file name="image" class="form-control">

<br>
<input type = submit class="btn btn-primary form-control" name="submit" value="Submit" >
</div>
</form>
</div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$categoryname = $_POST['categoryname'];
move_uploaded_file($_FILES['image']['tmp_name'],"uploadimage/".$_FILES['image']['name']);
$image = "uploadimage/".$_FILES['image']['name'];


$query = "insert into category(categoryname,image) values('$categoryname','$image')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Category Added Successfully");
window.location = "viewcategory.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again");
</script>';
}
}
?>
