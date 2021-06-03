<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection function
$conn = mysqli_connect("localhost","root","","db_internship");


if($_POST){
	
	$st_name=$_POST['st_name'];
	$st_gender=$_POST['st_gender'];
	$st_dob=$_POST['st_dob'];
	$st_email=$_POST['st_email'];
	$st_mobile=$_POST['st_mobile'];
	$st_address=$_POST['st_address'];
	$st_city=$_POST['st_city'];
	$st_state=$_POST['st_state'];
	$st_pincode=$_POST['st_pincode'];
	$st_blodgroup=$_POST['st_blodgroup'];
	$st_password=$_POST['st_password'];

$q = mysqli_query($conn, "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_city,st_state,st_pincode,st_blodgroup,st_password) values('$st_name','$st_gender','$st_dob','$st_email','$st_mobile','$st_address','$st_city','$st_state','$st_pincode','$st_blodgroup','$st_password')" );
//or die("error".mysqli_error($conn));
	
	if($q)
	{
		echo "<script>alert('record added');</script>";
	}
	else
	print mysqli_error($conn);
}	
?>
<html>
<body>
<form method ="POST">

<h1> Student registration </h1>
<br><br>

 student_name:  <input type="text"  name="st_name" /> 



<br><br>
student_gender:
<select name= "st_gender">
<option>male</option>
<option>female</option>
</select> 



<br><br>
student_dob: <input type="text"  name="st_dob" /> 



<br><br>
student_email: <input type="text"  name="st_email" /> 



<br><br>
student_mobile: <input type="text"  name="st_mobile" />

<br><br>
student_address:  <textarea name="st_address">  </textarea> 

<br><br>
student_city:  <input type ="text" name="st_city" /> 

<br><br>
student_state:  
<select name= "st_state">
<option>gujrat</option>
<option>up</option>
<option>mp</option>
<option>zarkhand</option>
</select> 


<br><br>
 student_pincode: <input type="text"  name="st_pincode" />


 
<br><br>
student_blodgroup: <input type="text"  name="st_blodgroup" /> 



<br><br>
 password: <input type="text"  name="st_password" /> 



<br><br>
<input type="Submit" /> 

</form>
</body>
</html>

<a href='studenttable.php'>Display record</a>
