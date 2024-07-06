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

<div class="container" style = "margin-top : 50px">
<h1 class= "text-center" style = "font-family : 'Monotype Corsiva' ; color : #000000">Add Service</h1>
<form method = post enctype="multipart/form-data">
<div class="form-group">
<label><b>Service Name</b></label>
<input type = text name="name" class="form-control" placeholder="Enter Service Name">
<label><b>Service Image</b></label>
<input type = file name="image" class="form-control">
<label><b>Religious</b></label>
<select name = "category" class="form-control">
<?php 
$query = "select * from category";
$rs = my_select($query);
while($row = mysqli_fetch_array($rs))
{
echo "<option value='$row[0]'>$row[1]</option>";	
}
?>

</select>
<label><b>Price</b></label>
<input type = text name="price" class="form-control">
<label><b>Service Details</b></label>
<textarea name="description" class="form-control"></textarea>
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
$name = $_POST['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"uploadimage/".$_FILES['image']['name']);
$image = "uploadimage/".$_FILES['image']['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];

$query = "insert into product(name,image,category,price,description) values('$name','$image','$category','$price','$description')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Product Added Successfully");
window.location = "viewproduct.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong");
</script>';
}
}
?>
