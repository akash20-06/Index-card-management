<?php
$userid="";
$pass="";
$db = mysqli_connect('localhost', 'root', '', 'database2');
if (isset($_POST['login']))
{    
	$userid = mysqli_real_escape_string($db, $_POST['userid']);
  $pass = mysqli_real_escape_string($db, $_POST['password']);
	$query = "select * from student_login where userid='$userid' and  password='$pass' ";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results) == 1 )
	{   echo"connection";
		header('location:hodpage.php');
	}
}



?>
