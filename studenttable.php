<?php
$conn = mysqli_connect("localhost","root","","db_internship");

$q = mysqli_query($conn, "select * from tbl_student");
//or die("error".mysqli_error($conn));

echo "<table border='1'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> name </th>";
echo "<th> gender </th>";
echo "<th> dob </th>";
echo "<th> email </th>";
echo "<th> mobile </th>";
echo "<th> address </th>";
echo "<th> city </th>";
echo "<th> state </th>";
echo "<th> pincode </th>";
echo "<th> blodgroup </th>";
echo "<th> password </th>";
echo "<th> action </th>";
echo "</tr>";
while($row = mysqli_fetch_array($q))
{
	echo "<tr>";
	echo "<th>{$row['st_id']} </th>";
	echo "<th>{$row['st_name']} </th>";
	echo "<th>{$row['st_gender']} </th>";
	echo "<th>{$row['st_dob']} </th>";
	echo "<th>{$row['st_email']} </th>";
	echo "<th>{$row['st_mobile']} </th>";
	echo "<th>{$row['st_address']} </th>";
	echo "<th>{$row['st_city']} </th>";
	echo "<th>{$row['st_state']} </th>";
	echo "<th>{$row['st_pincode']} </th>";
	echo "<th>{$row['st_blodgroup']} </th>";
	echo "<th>{$row['st_password']} </th>";
	echo "<th><a href= 'sedit.php?editid={$row['st_id']}'>edit</a> | <a href= 'sdelete.php?deleteid={$row['st_id']}'>delete</a></th>";
	echo "</tr>";
}
echo "</table>";
echo "<a href='student.php'>Add record</a>";

  ?>