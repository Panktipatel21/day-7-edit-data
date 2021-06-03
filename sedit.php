<?php
$conn = mysqli_connect("localhost","root","","db_internship");

if(!isset($_GET['editid']) || empty($_GET['editid'])){
	header("location:studenttable.php");
}

$editid = $_GET['editid'];
$editq = mysqli_query($conn,"select * from tbl_student where st_id='{$editid}'") or die(mysqli_error($conn));

$editdata = mysqli_fetch_array($editq);

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
	
	$uq = mysqli_query($conn, "update tbl_student set st_name='{$st_name}',st_gender='{$st_gender}',st_dob='{$st_dob}',st_email='{$st_email}',st_mobile='{$st_mobile}',st_address='{$st_address}',st_city='{$st_city}',st_state='{$st_state}',st_pincode='{$st_pincode}',st_blodgroup='{$st_blodgroup}',st_password='{$st_password}' where st_id='{$editid}'") or die(mysqli_error($conn));
	
		if($uq){
		echo "<script>alert('record updated'); window.location='studenttable.php'; </script>";
	}
}
?>

<html>
<body>
<form method ="POST">

student name:  <input type="text" value="<?php echo $editdata['st_name']; ?>" name="st_name" /> 
<br/>
<td>  student gender </td> 
<td> <input type="radio"  name="st_gender"   <?php if($editdata['st_gender']=="male") { echo "checked";} ?> />male
  <input type="radio"  name="st_gender"   value="female"  <?php if($editdata['st_gender']=="female") { echo "checked";} ?> />female
</td></tr>
<br/>
<br><br>
student_dob: <input type="text" value="<?php echo $editdata['st_dob']; ?>" name="st_dob" /> 



<br><br>
student_email: <input type="text" value="<?php echo $editdata['st_email']; ?>" name="st_email" /> 



<br><br>
student_mobile: <input type="text" value="<?php echo $editdata['st_mobile']; ?>" name="st_mobile" />

<br><br>
student_address:  <input type ="textarea" name="st_address" value="<?php echo $editdata['st_address']; ?>">  </textarea> 

<br><br>
student_city:  <input type ="text" value="<?php echo $editdata['st_city']; ?>" name="st_city" /> 

<br><br>
student_state:  
<select name= "st_state" value="<?php echo $editdata['st_state']; ?>">
<option>gujrat</option>
<option>up</option>
<option>mp</option>
<option>zarkhand</option>
</select> 


<br><br>
 student_pincode: <input type="text" value="<?php echo $editdata['st_pincode']; ?>" name="st_pincode" />


 
<br><br>
student_blodgroup: <input type="text" value="<?php echo $editdata['st_blodgroup']; ?>" name="st_blodgroup" /> 



<br><br>
 password: <input type="text" value="<?php echo $editdata['st_password']; ?>" name="st_password" /> 



<br><br>
<input type="Submit" /> 

</form>
</body>
</html>