<?php
	include_once'db.php';
	if(isset($_POST['submit'])){
		
		$first_name=$_POST['fname'];
		$middle_name=$_POST['mname'];
		$surname=$_POST['surname'];
		$cadre=$_POST['cadre'];
		$grade_level=$_POST['grade_level'];
		$staff_number=$_POST['staff_number'];
		$gender=$_POST['gender'];
		$date_of_birth=$_POST['dob'];
		$state_of_origin=$_POST['state_of_origin'];
		$date_of_appointment=$_POST['date_of_appointment'];
		$department=$_POST['department'];
		$rank=$_POST['rank'];
		
		$sql="INSERT INTO personell(first_name,middle_name,surname,cadre,grade_level,staff_number,gender,date_of_birth,
		state_of_origin,date_of_appointment,department,rank) VALUES('$first_name','$middle_name','$surname','$cadre','$grade_level',
		'$staff_number','$gender','$date_of_birth',
		'$state_of_origin','$date_of_appointment','$department','$rank')";
		
		$succeed=mysqli_query($conn,$sql);
		//if($succeed){
			echo "<script> alert('Record added succesfully'  )</script>";
			
		echo "<script>window.open('http://localhost:8080/personell/add_staff.php','_self')</script>";
		//}
		
		//if(mysqli_query($conn,$sql)){
		//	echo "New record has been added successfuly!";
		//}else{
		//	echo"Error:".$sql.":-".mysqli_error($conn);
		//}
		//mysqli_close($conn);
	}
?>