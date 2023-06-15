<!DOCTYPE html>
<html>
<head>
	<title> National Commission for Colleges of Education</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="main.css"/>
	<meta name="viewport" content="width=device-width,initial-scale=1, user-scale=no">
	<script src="https:/ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<style>

		/* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container  - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
		
</style>

<body>
	<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
		<div class="container" >
			<a href="/personell/index.php" class="navbar-brand" id="text"> National Commission for Colleges of Education</a>
			<ul class="nav navbar-nav"><a href="#" id="text">Management</a></ul>
			<!--<ul class="nav navbar-nav"><a href="login.php" id="text">Login</a></ul>-->
			<ul class="nav navbar-nav"><a href= "add_staff.php" id="text">Add Staff</a></ul>
			<ul class="nav navbar-nav"><a href= "allstaff.php" id="text"><div class="dropdown">
			  Nominal Role
			  <div class="dropdown-content">
			  <a href="allstaff.php">All Staff</a>
				<a href="bydepartment.php">By Department</a>
				<a href="#">By Grade Level</a>
				<a href="#">By Cadre</a>
			  </div>
			</div></a></ul>
			<div id = "form"><!--// this is for searchbox-->
					<form method = "get" action = "results.php" enctype = "multipart/form-data"> <!--// the multipart implies it will show even images as search results-->
						<input type = "text" name = "user_query" placeholder = "Search by surname, department,level or state" />
						<input type = "submit" name = "search" value ="Search" />
					</form>
			</div><!--//searchbox ends here-->
		</div>
	</nav>
	<div>
		<h1>Departments</h1>
		<ul>
			<li><a href="/personell/academic.php">Academic Programs</a></li>
			<li><a href="/personell/ict.php">Information and Communication Technology</a></li>
			<li><a href="/personell/ics.php">Information and Corporate Services</a></li>
			<li><a href="/personell/personeldept.php">Personnel Management</a></li>
			<li><a href="/personell/ppd.php">Physical Planning</a></li>
			<li><a href="/personell/procurement.php">Procurement</a></li>
			<li><a href="/personell/finance.php">Finance and Supplies</a></li>
			<li><a href="/personell/specialduties.php">Special Duties</a></li>
			<li><a href="/personell/prs.php">Planning, Research and Statistics</a></li>
			<li><a href="/personell/eduservices.php">Educational Services</a></li>
		</ul>
	</div>
	
	
</body>
</html>