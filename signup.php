
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head> 
<style>
#menu{
	font-size:20px;
	color:white;
	
}
#titlenav{
	font-size:20px;
	color:white;
	height:12%;
	display: inline-block;
}
#rightmenu{
	font-size:20px;
	color:white;
}
a {
   text-decoration: none;
}
</style>
	
	
<header>

		<nav class="navbar navbar-inverse">
		<div class="container-fluid"

		<ul class="nav justify-content-center">
		<a id="titlenav" class="navbar-brand" href="index.php">BccComLabAMS</a>
		
			<a id="menu" class="nav-link active" href="Faculties.php">Faculties</a>
			<a id="menu" class="nav-link active" href="Admin.php">Admin</a>
			<a id="menu" class="nav-link active" href="About Us.php">About Us</a>
	
		<ul class="nav navbar-nav navbar-right">
		  <a id="rightmenu" href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a>
		</ul>
		</div>
		</nav>

		<div class="container">
		</ul>
		</div>
</header>

<head>
			<title> AMS Store Data </title>
</head>
<body>
<center>
		
<form action="process.php" method="POST"  class="row g-3 needs-validation" novalidate>
		<div class="container">
  <h3>Form Validation</h3>
  <p>Try to submit the form.</p>
    

<div class="col-md-4">
<label for="validationCustom01" class="form-label">Student ID</label>
<input type="text" class="form-control" name="ID" placeholder="22-0001" required>
<div class="valid-feedback">
 Looks good!
</div>
 </div> 
 
  <div class="col-md-4">
<label for="validationCustom02" class="form-label">Last name</label>
<input type="text" class="form-control" name="lname" placeholder="Rizal" required>
<div class="valid-feedback">
 Looks good!
</div>
 </div>
 
  <div class="col-md-4">
<label for="validationCustom02" class="form-label">Middle name</label>
<input type="text" class="form-control" name="mname" placeholder="Protacio" 
required>
<div class="valid-feedback">
 Looks good!
</div>
 </div>
 
<div class="col-md-4">
<label for="validationCustom01" class="form-label">First name</label>
<input type="text" class="form-control" name="fname" placeholder="Jose" required>
<div class="valid-feedback">
 Looks good!
</div>
 </div>
 
 <div class="col-md-6">
<label for="validationCustom03" class="form-label">Course</label>
<input type="text" class="form-control" name="course" value="BSIS" required>
<div class="invalid-feedback">
 Please provide a valid course.
</div>
 </div>
 
 <div class="col-md-3">
<label for="validationCustom04" class="form-label">E-mail</label>
<input type="email" class="form-control" name="email" 
placeholder="joserizal@gmail.com" required>
<div class="invalid-feedback">
 Please provide a valid email.
</div>
<div class="invalid-feedback">
 Please select a valid state.
</div>
 </div>
 
 <div class="col-md-3">
<label for="validationCustom05" class="form-label">Contact CP Number</label>
<input type="number" class="form-control" name="contact_num" required>
<div class="invalid-feedback">
 Please provide a valid contact number.
</div>
 </div>
  <div class="col-md-3">
<label for="validationCustom05" class="form-label">Password</label>
<input type="text" class="form-control" name="password" required>
<div class="invalid-feedback">
 Please provide a valid password.
</div>
 </div>
 
 <div class="col-12">
<button class="btn btn-primary" type="submit" name="submit">Submit form</button>
 </div>

</div>
</form>


<footer>
</div>

</body>


</html>