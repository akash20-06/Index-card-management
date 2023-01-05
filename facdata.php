<?php
$userid="";
$sem1="";
$sem2="";
$sem3="";
$sem4="";
$db = mysqli_connect('localhost', 'root', '', 'database2');
if (isset($_POST['entry']))
{    
	$userid = mysqli_real_escape_string($db, $_POST['adno']);
    $sem1 = mysqli_real_escape_string($db, $_POST['sem1']);
    $sem2 = mysqli_real_escape_string($db, $_POST['sem2']);
    $sem3 = mysqli_real_escape_string($db, $_POST['sem3']);
    $sem4 = mysqli_real_escape_string($db, $_POST['sem4']);
   
 
    $query = "UPDATE studentinfo set sem1='$sem1' where admissionNo='$userid'";
    mysqli_query($db, $query);
    $query = "UPDATE studentinfo set sem2='$sem2' where admissionNo='$userid'";
    mysqli_query($db, $query);
    $query = "UPDATE studentinfo set sem3='$sem3' where admissionNo='$userid'";
    mysqli_query($db, $query);
    $query = "UPDATE studentinfo set sem4='$sem4' where admissionNo='$userid'";
    mysqli_query($db, $query);
   
header('location:facinsert.php');

}



?>
