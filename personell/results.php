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
			<ul class="nav navbar-nav"><a href="index.php" id="text">Management</a></ul>
			<ul class="nav navbar-nav"><a href="login.php" id="text">Login</a></ul>
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
		</div>
	</nav>
	
	<table class="table">
		<tr id="tr">
			<th>Serial Number</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Surname</th>
			<th>Cadre</th>
			<th>Grade Level</th>
			<th>Staff Number</th>
			<th>Gender</th>
			<th>Date of Birth</th>
			<th>State of Origin</th>
			<th>Date of Appointment</th>
			<th>Department</th>
			<th>Rank</th>
		</tr>
	<div>
		<h1>Personnel Management</h1>
		<ul id="dept">
		<?php
			include_once 'db.php';
			if(isset($_GET['search'])){
				$search_query=$_GET['user_query'];
			$displayall="SELECT * FROM personell where surname like '%$search_query%'||department like '%$search_query%'||grade_level like '%$search_query%'||state_of_origin like '%$search_query%'";
			$result=mysqli_query($conn,$displayall);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				?>
				<tr id="tr">
					<td id="td"><?php echo $row["id"];?></td>
				
					<td><?php echo $row["first_name"];?></td>
					<td><?php echo $row["middle_name"];?></td>
					<td><?php echo $row["surname"];?></td>
				
					<td><?php echo $row["cadre"];?></td>
				
					<td><?php echo $row["grade_level"];?></td>
				
					<td><?php echo $row["staff_number"];?></td>
				
					<td><?php echo $row["gender"];?></td>
				
					<td><?php echo $row["date_of_birth"];?></td>
				
					<td><?php echo $row["state_of_origin"];?></td>
				
					<td><?php echo $row["date_of_appointment"];?></td>
				
					<td><?php echo $row["department"];?></td>
				
					<td><?php echo $row["rank"];?></td>
				</tr>
				<?php
				}
			//echo "</table>";
			}
		}
		?>
		</ul>
	</div>
	


	
</table>
</body>
</html>