<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
<nav class="navbar navbar-expand-sm navbar-dark pl-5" style = "background-color : black">
<a href="#" class="navbar-brand style1">
Wedding Event Planner</a>
<button type = "button" class="navbar-toggler" data-toggle="collapse" data-target="#abc">
<span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id = "abc">
<ul class="navbar-nav pl-5">
<li class="nav-item"><a class= "nav-link" href=adminhome.php style = "color : white ; font-weight : bold">Home</a></li>


<li class="nav-item dropdown"><a class= "nav-link dropdown-toggle" href="#" data-toggle = "dropdown" style = "color : white ; font-weight : bold">Services</a>

<div class="dropdown-menu">
<a class="dropdown-item" href = "addproduct.php">Add Services</a>
<a class="dropdown-item" href = "viewproduct.php">View Service</a></div>
</li>


<li class="nav-item dropdown"><a class= "nav-link dropdown-toggle" href="#" data-toggle = "dropdown" style = "color : white ; font-weight : bold">Religious Category</a>

<div class="dropdown-menu">
<a class="dropdown-item" href = "addcategory.php">Add Category</a>
<a class="dropdown-item" href = "viewcategory.php">View Category</a></div>
</li>
<li class="nav-item"><a class= "nav-link" href=viewcustomer.php style = "color : white ; font-weight : bold">View Customers</a></li>

<li class="nav-item"><a class= "nav-link" href=viewbooking.php style = "color : white ; font-weight : bold">View Booking</a></li>
<li class="nav-item"><a class= "nav-link" href=viewfeedback.php style = "color : white ; font-weight : bold">View feedback</a></li>

<li class="nav-item"><a class= "nav-link" href=logout.php style = "color : white ; font-weight : bold">Logout</a></li>
</ul>
</div>
</nav>