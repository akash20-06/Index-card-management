<?php
$userid="";
$year="";
$name="";
$rank="";
$branch="";
$phone="";
$address="";
$religion="";
$email="";
$db = mysqli_connect('localhost', 'root', '', 'database2');
if (isset($_POST['entry']))
{    
	$userid = mysqli_real_escape_string($db, $_POST['adno']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $rank = mysqli_real_escape_string($db, $_POST['cat']);
    $religion = mysqli_real_escape_string($db, $_POST['rel']);
    $phone = mysqli_real_escape_string($db, $_POST['pno']);
   $address = mysqli_real_escape_string($db, $_POST['add']);
   $year = mysqli_real_escape_string($db, $_POST['yoa']);
   $branch= mysqli_real_escape_string($db, $_POST['branch']);
   $email= mysqli_real_escape_string($db, $_POST['email']);
 
   $query = "INSERT INTO studentinfo (name,admissionNo,branch,email,yearadmission,phone,address,religion,catrank) 
   VALUES('$name', '$userid', '$branch', '$email', '$year', '$phone', '$address', '$religion','$rank')";

mysqli_query($db, $query);
header('location:dataentry.php');

}



?>
