<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection function
$conn = mysqli_connect("localhost","root","","db_internship");


if($_POST){
	
	$user_name=$_POST['user_name'];
	$user_gender=$_POST['user_gender'];
	$user_mobile=$_POST['user_mobile'];

$q = mysqli_query($conn, "insert into tbl_user(user_name,user_gender,user_mobile) values('$user_name','$user_gender','$user_mobile')" );
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

<h1> user registration </h1>
<br><br>

user name:  <input type="text"  name="user_name" /> 

suser gender:
<select name= "user_gender">
<option>male</option>
<option>female</option>
</select> 

user mobile: <input type="text"  name="user_mobile" />

<input type="Submit" /> 

</form>
</body>
</html>

<a href='usertable.php'>Display record</a>
