<?php
$conn = mysqli_connect("localhost","root","","db_internship");

if(!isset($_GET['editid']) || empty($_GET['editid'])){
	header("location:usertable.php");
}

$editid = $_GET['editid'];
$editq = mysqli_query($conn,"select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($conn));

$editdata = mysqli_fetch_array($editq);

if($_POST){
	
	$user_name=$_POST['user_name'];
	$user_gender=$_POST['user_gender'];
	$user_mobile=$_POST['user_mobile'];
	
	$uq = mysqli_query($conn, "update tbl_user set user_name='{$user_name}',user_gender='{$user_gender}',user_mobile='{$user_mobile}' where user_id='{$editid}'") or die(mysqli_error($conn));
	 
	if($uq){
		echo "<script>alert('record updated'); window.location='usertable.php'; </script>";
	}
}
?>
<html>
<body>
<form method ="POST">

User name:  <input type="text" value="<?php echo $editdata['user_name']; ?> " name="user_name" /> 
<br/>
<td>  user gender </td> 
<td> <input type="radio"  name="user_gender"   <?php if($editdata['user_gender']=="male") { echo "checked";} ?> />male
  <input type="radio"  name="user_gender"   value="female"  <?php if($editdata['user_gender']=="female") { echo "checked";} ?> />female
</td></tr>
<br/>
user mobile: <input type="text" value="<?php echo $editdata['user_mobile']; ?> "  name="user_mobile" />
<br/>

<input type="Submit" /> 

</form>
</body>
</html>
