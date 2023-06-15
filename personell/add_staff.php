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
						<input type = "text" name = "user_query" placeholder = "Search for Staff by surname or department" />
						<input type = "submit" name = "search" value ="Search" />
					</form>
			</div><!--//searchbox ends here-->
		</div>
	</nav>
	

	<div class="container">
		<h1> New Record</h1>
		<form action="new_record.php" method="post">
		<table align="center" width="100%" border="5" bgcolor="white">
		<tr align="center">
			<td colspan="8"><h5>Insert New Record Here</h5></td>
		</tr>
		
		<tr>
			<td><label for="cadre">Cadre</label></td>
			<td>
			<select name="cadre" id="cadre" required>
				<option></option>
				<option value="other">Other</option>
				<option value= "senior">Senior Staff</option>
				<option value="junior">Junior Staff</option>
			</select></td>
		</tr>
		<tr>
			<td><label for="grade_level">Grade Level</label></td>
			<td>
			<select name="grade_level" id="grade_level" required>
				<option></option>
				<option value= "contediss1">CONTEDISS 1</option>
				<option value="contediss2">CONTEDISS 2</option>
				<option value="contediss3">CONTEDISS 3</option>
				<option value= "contediss4">CONTEDISS 4</option>
				<option value="contediss5">CONTEDISS 5</option>
				<option value="contediss6">CONTEDISS 6</option>
				<option value="contediss7">CONTEDISS 7</option>
				<option value="contediss8">CONTEDISS 8</option>
				<option value="contediss9">CONTEDISS 9</option>
				<option value="contediss10">CONTEDISS 10</option>
				<option value="contediss11">CONTEDISS 11</option>
				<option value="contediss12">CONTEDISS 12</option>
				<option value="contediss13">CONTEDISS 13</option>
				<option value="contediss14">CONTEDISS 14</option>
				<option value="contediss15">CONTEDISS 15</option>
				<option value="contediss16">Other</option>
			</select></td>
		</tr>
		<tr>
			<td><label for="staff_number">Staff Number:</label></td>
			<td><input type="text" name="staff_number" id="staff_number" required/></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" id="female" name="gender" value="female" required>
			<label for="female">Female</label>
			<input type="radio" id="male" name="gender" value="male" required>
			<label for="male">Male</label></td>
		</tr>
		<tr>
			<td><label for="fname">First Name:</label></td>
			<td><input type="text" name="fname" id="fname" required/></td>
		</tr>
		<tr>
			<td><label for="mname">Middle Name:</label></td>
			<td><input type="text" name="mname" id="mname" required/><td>
		</tr>
		<tr>
			<td><label for="surname">Surname:</label></td>
			<td><input type="text" name="surname" id="surname" required/><td>
		</tr>
		<tr>
			<td><label for="dob">Date of Birth:</label></td>
			<td><input type="date" id="dob" name="dob" required/></br></td>
		</tr>
		<tr>
			<td><label for="state_of_origin">State of Origin</label></td>
			<td><select name="state_of_origin" id="state_of_origin" required>
				<option></option>
				<option value= "abia">Abia</option>
				<option value="adamawa">Adamawa</option>
				<option value="akwaibom">Akwa Ibom</option>
				<option value= "anambra">Anambra</option>
				<option value="bauchi">Bauchi</option>
				<option value="bayelsa">Bayelsa</option>
				<option value="benue">Benue</option>
				<option value="borno">Borno</option>
				<option value="crossriver">Cross River</option>
				<option value="delta">Delta</option>
				<option value="ebonyi">Ebonyi</option>
				<option value="edo">Edo</option>
				<option value="ekiti">Ekiti</option>
				<option value="enugu">Enugu</option>
				<option value="gombe">Gombe</option>
				<option value="imo">Imo</option>
				<option value="jigawa">Jigawa</option>
				<option value="kaduna">Kaduna</option>
				<option value="kano">Kano</option>
				<option value="katsina">Katsina</option>
				<option value="kebbi">Kebbi</option>
				<option value="kogi">Kogi</option>
				<option value="kwara">Kwara</option>
				<option value="lagos">Lagos</option>
				<option value="nassarawa">Nassarawa</option>
				<option value="niger">Niger</option>
				<option value="ogun">Ogun</option>
				<option value="ondo">Ondo</option>
				<option value="osun">Osun</option>
				<option value="oyo">Oyo</option>
				<option value="plateau">Plateau</option>
				<option value="rivers">Rivers</option>
				<option value="sokoto">Sokoto</option>
				<option value="taraba">Taraba</option>
				<option value="yobe">Damaturu</option>
				<option value="zamfara">Zamfara</option>
				<option value="fctabuja">FCT Abuja</option>
			</select></td>
		</tr>
		<tr>
			<td><label for="date_of_appointment">Date of Present Appointment:</label></td>
			<td><input type="date" id="date_of_appointment" name="date_of_appointment" required/></td>
		</tr>
		<tr>
			<td><label for="department">Department</label></td>
			<td><select name="department" id="department" required>
				<option></option>
				<option value= "Academic Programmes">Academic Programmes</option>
				<option value="Educational Services">Educational Services</option>
				<option value="Physical Planning">Physical Planning</option>
				<option value= "Procurement">Procurement</option>
				<option value="Finance">Finance</option>
				<option value="Personell Management">Personell Management</option>
				<option value="Special Duties">Special Duties</option>
				<option value="Information and Communications Technology">Information and Communications Technology</option>
				<option value="Information and Coporate Services">Information and Coporate Services</option>
				<option value="Planning Research and Statistics">Planning Research and Statistics</option>
			</select></td>
		</tr>
			<!--<label for="rank">Rank</label>
			<select name="rank" id="rank">
				<option value= "default">select a rank</option>
				<option value= "pa1">Programme Analyst 1</option>
				<option value="pa2">Programme Analyst 2</option>
				<option value="dpo1">Data Processing Officer 1</option>
				<option value= "dpo2">Data Processing Officer 2</option>
				<option value="fs">Finance</option>
				<option value="pm">Personell Management</option>
				<option value="sd">Special Duties</option>
				<option value="ict">Information and Communications Technology</option>
				<option value="ics">Information and Coporate Services</option>
				<option value="prs">Planning Research and Statistics</option>
			</select>-->
		<tr>
			<td><label for="rank">Rank:</label></td>
			<td><input type="text" name="rank" id="rank"/></td>
		</tr>
		<tr>
			<td><button type="submit" name="submit" value="Submit">Submit</button></td>
			<td align="center"><button type="reset" name="reset" value="Reset">Reset</input></td>
		</tr>
			<!--<button type="add_staff.php" name="add_new">Add New</button>-->
		
		</table>
		</form>
	</div>
	
	
</body>
</html>
