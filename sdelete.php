<?php
$conn = mysqli_connect("localhost","root","","db_internship");

$id = $_GET['deleteid'];
 
 $q = mysqli_query($conn,
			"delete from tbl_student where st_id = '{$id}'") or die(mysqli_error($conn));

if($q)
{
	echo "<script>alert('record deleted'); window.location='studenttable.php'; </script>";
}
?>