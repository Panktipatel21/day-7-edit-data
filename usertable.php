<?php
$conn = mysqli_connect("localhost","root","","db_internship");

$q = mysqli_query($conn, "select * from tbl_user");
//or die("error".mysqli_error($conn));

echo "<table border='1'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> name </th>";
echo "<th> gender </th>";
echo "<th> mobile </th>";
echo "<th> action </th>";
echo "</tr>";
while($row = mysqli_fetch_array($q))
{
	echo "<tr>";
	echo "<th>{$row['user_id']} </th>";
	echo "<th>{$row['user_name']} </th>";
	echo "<th>{$row['user_gender']} </th>";
	echo "<th>{$row['user_mobile']} </th>";
	
	echo "<th><a href= 'edit.php?editid={$row['user_id']}'>edit</a> | <a href= 'delete.php?deleteid={$row['user_id']}'>delete</a></th>";
	echo "</tr>";
}
echo "</table>";
echo "<a href='connection.php'>Add record</a>";
  ?>